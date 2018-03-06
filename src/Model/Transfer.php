<?php

namespace CurrencyCloud\Model;

use DateTime;

class Transfer implements EntityInterface
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $shortReference;
    /**
     * @var string
     */
    private $sourceAccountId;
    /**
     * @var string
     */
    private $destinationAccountId;
    /**
     * @var string
     */
    private $currency;
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $status; 
    /**
     * @var DateTime|null
     */
    private $createdAt;
    /**
     * @var DateTime|null
     */
    private $updatedAt;
    /**
     * @var DateTime|null
     */
    private $completed_at;
    /**
     * @var string
     */
    private $creatorAccountId;
    /**
     * @var string
     */
    private $creatorContactId;     
    /**
     * @var string
     */
    private $reason;

    /**
     * @param string $sourceAccountId
     * @param string $destinationAccountId
     * @param string $currency
     * @param string $amount
     *
     * @return $this
     */
    public static function create($sourceAccountId, $destinationAccountId, $currency, $amount)
    {
        return (new Transfer())
            ->setSourceAccountId($sourceAccountId)
            ->setDestinationAccountId($destinationAccountId)
            ->setCurrency($currency)
            ->setAmount($amount);
    }    
     
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getShortReference()
    {
        return $this->shortReference;
    }

    /**
     * @param null|string $shortReference
     *
     * @return $this
     */
    public function setShortReference($shortReference)
    {
        $this->shortReference = (null === $shortReference) ? null : (string) $shortReference;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSourceAccountId()
    {
        return $this->sourceAccountId;
    }

    /**
     * @param null|string $sourceAccountId
     *
     * @return $this
     */
    public function setSourceAccountId($sourceAccountId)
    {
        $this->sourceAccountId = (null === $sourceAccountId) ? null : (string) $sourceAccountId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDestinationAccountId()
    {
        return $this->destinationAccountId;
    }

    /**
     * @param null|string $destinationAccountId
     *
     * @return $this
     */
    public function setDestinationAccountId($destinationAccountId)
    {
        $this->destinationAccountId = (null === $destinationAccountId) ? null : (string) $destinationAccountId;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param null|string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = (null === $currency) ? null : (string) $currency;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param null|string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = (null === $amount) ? null : (string) $amount;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = (null === $status) ? null : (string) $status;
        return $this;
    }    
    
    /**
     * @return DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(DateTime $createdAt = null)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * @param DateTime|null $completedAt
     *
     * @return $this
     */
    public function setCompletedAt(DateTime $completedAt = null)
    {
        $this->completedAt = $completedAt;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCreatorAccountId()
    {
        return $this->creatorAccountId;
    }

    /**
     * @param null|string $creatorAccountId
     *
     * @return $this
     */
    public function setCreatorAccountId($creatorAccountId)
    {
        $this->creatorAccountId = (null === $creatorAccountId) ? null : (string) $creatorAccountId;
        return $this;
    } 

    /**
     * @return null|string
     */
    public function getCreatorContactId()
    {
        return $this->status;
    }

    /**
     * @param null|string $ceratorContactId
     *
     * @return $this
     */
    public function setCreatorContactId($creatorContactId)
    {
        $this->status = (null === $creatorContactId) ? null : (string) $creatorContactId;
        return $this;
    } 

    /**
     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param null|string $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = (null === $reason) ? null : (string) $reason;
        return $this;
    }
}
