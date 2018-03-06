<?php

namespace CurrencyCloud\EntryPoint;

use CurrencyCloud\Model\Pagination;
use CurrencyCloud\Model\Transfer;
use CurrencyCloud\Model\Transfers;
use DateTime;
use stdClass;

class TransfersEntryPoint extends AbstractEntityEntryPoint
{

    /**
     * @param Transfer $transfer
     * @param null|string $onBehalfOf
     *
     * @return Transfer
     * @throws \Exception
     */
    public function create(Transfer $transfer, $onBehalfOf = null)
    {
       
        return $this->doCreate('transfers/create', $transfer, function ($transfer) {
            return $this->convertTansferToRequest($transfer);
        }, function (stdClass $response) {
            //return 
            $test = $this->createTransferFromResponse($response);

            var_dump($response); die;
        }, $onBehalfOf);
    }

    /**
     * @param Transfer $transfer
     *
     * @return array
     */
    protected function convertTansferToRequest(Transfer $transfer)
    {
        $common = [
            'source_account_id' => $transfer->getSourceAccountId(),
            'destination_account_id' => $transfer->getDestinationAccountId(),
            'currency' => $transfer->getCurrency(),
            'amount' => $transfer->getAmount(),
            'reason' => $transfer->getReason(),
        ];
        return $common;
    }

    /**
     * @param stdClass $response
     *
     * @return Transfer
     */
    private function createTransferFromResponse(stdClass $response)
    {
        $transfer = new Transfer();
        $transfer->setShortReference($response->short_reference)
                ->setSourceAccountId($response->source_account_id)
                ->setDestinationAccountId($response->destination_account_id)
                ->setCurrency($response->currency)
                ->setAmount($response->amount)
                ->setStatus($response->status)
                ->setCreatedAt(new DateTime($response->created_at))
                ->setUpdatedAt(new DateTime($response->updated_at))
                ->setCompletedAt(new DateTime($response->completed_at))
                ->setCreatorAccountId($response->creator_account_id)
                ->setCreatorContactId($response->creator_contact_id)
                ->setReason($response->reason);
        $this->setIdProperty($transfer, $response->id);

        return $transfer;
    }


    /**
     * @param string $id
     * @param null|string $onBehalfOf
     *
     * @return Transfer
     */
    public function retrieve($id, $onBehalfOf = null)
    {
        return $this->doRetrieve(sprintf('transfers/%s', $id), function (stdClass $response) {
            return $this->createTransferFromResponse($response);
        }, $onBehalfOf);
    }
}
