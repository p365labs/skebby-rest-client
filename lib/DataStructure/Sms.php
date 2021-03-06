<?php

namespace Fazland\SkebbyRestClient\DataStructure;

use Fazland\SkebbyRestClient\Constant\ValidityPeriods;
use Fazland\SkebbyRestClient\Exception\InvalidDeliveryStartException;
use Fazland\SkebbyRestClient\Exception\InvalidValidityPeriodException;

/**
 * @author Massimiliano Braglia <massimiliano.braglia@fazland.com>
 */
class Sms
{
    /**
     * @var string
     */
    private $sender;

    /**
     * @var string[]
     */
    private $recipients;

    /**
     * @var string[][]
     */
    private $recipientVariables;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $userReference;

    /**
     * @var \DateTime
     */
    private $deliveryStart;

    /**
     * @var \DateInterval
     */
    private $validityPeriod;

    /**
     * Sms constructor.
     */
    public function __construct()
    {
        $this->recipients = [];
        $this->recipientVariables = [];
    }

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param string $sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param string[] $recipients
     *
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * @param string $recipient
     *
     * @return $this
     */
    public function addRecipient($recipient)
    {
        $this->recipients[] = $recipient;

        return $this;
    }

    /**
     * @param string $recipient
     *
     * @return $this
     */
    public function removeRecipient($recipient)
    {
        $itemPosition = array_search($recipient, $this->recipients);

        if (false !== $itemPosition) {
            unset($this->recipients[$itemPosition]);
        }

        unset($this->recipientVariables[$recipient]);

        return $this;
    }

    /**
     * @return bool
     */
    public function hasRecipients()
    {
        return ! empty($this->recipients);
    }

    /**
     * @return string[][]
     */
    public function getRecipientVariables()
    {
        return $this->recipientVariables;
    }

    /**
     * @param string $recipient
     * @param string[] $recipientVariables
     *
     * @return $this
     */
    public function setRecipientVariables($recipient, array $recipientVariables)
    {
        $this->recipientVariables[$recipient] = $recipientVariables;

        return $this;
    }

    /**
     * @param string $recipient
     * @param string $recipientVariable
     * @param string $recipientVariableValue
     *
     * @return $this
     */
    public function addRecipientVariable($recipient, $recipientVariable, $recipientVariableValue)
    {
        if (! isset($this->recipientVariables[$recipient])) {
            $this->recipientVariables[$recipient] = [];
        }

        $this->recipientVariables[$recipient][$recipientVariable] = $recipientVariableValue;

        return $this;
    }

    /**
     * @param string $recipient
     * @param string $recipientVariable
     *
     * @return $this
     */
    public function removeRecipientVariable($recipient, $recipientVariable)
    {
        unset($this->recipientVariables[$recipient][$recipientVariable]);

        return $this;
    }

    /**
     * @return bool
     */
    public function hasRecipientVariables()
    {
        return ! empty($this->recipientVariables);
    }

    /**
     * @return $this
     */
    public function clearRecipientVariables()
    {
        $this->recipientVariables = [];

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserReference()
    {
        return $this->userReference;
    }

    /**
     * @param string $userReference
     *
     * @return $this
     */
    public function setUserReference($userReference)
    {
        $this->userReference = $userReference;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryStart()
    {
        return $this->deliveryStart;
    }

    /**
     * @param \DateTime|null $deliveryStart
     *
     * @return $this
     *
     * @throws InvalidDeliveryStartException
     */
    public function setDeliveryStart(\DateTime $deliveryStart = null)
    {
        if (null !== $deliveryStart && $deliveryStart < date_create_from_format('U', (string)time())) {
            throw new InvalidDeliveryStartException();
        }

        $this->deliveryStart = $deliveryStart;

        return $this;
    }

    /**
     * @return \DateInterval
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * @param \DateInterval|null $validityPeriod
     *
     * @return $this
     *
     * @throws InvalidValidityPeriodException
     */
    public function setValidityPeriod(\DateInterval $validityPeriod = null)
    {
        if (null !== $validityPeriod &&
            ($validityPeriod->i < ValidityPeriods::MIN || $validityPeriod->i > ValidityPeriods::MAX)
        ) {
            throw new InvalidValidityPeriodException();
        }

        $this->validityPeriod = $validityPeriod;

        return $this;
    }
}
