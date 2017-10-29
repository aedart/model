<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Card Number Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CardNumberAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CardNumberTrait
{
    /**
     * Numeric or Alphanumeric card number, e.g. for credit cards or other types of cards
     *
     * @var string|null
     */
    protected $cardNumber = null;

    /**
     * Set card number
     *
     * @param string|null $number Numeric or Alphanumeric card number, e.g. for credit cards or other types of cards
     *
     * @return self
     */
    public function setCardNumber(?string $number)
    {
        $this->cardNumber = $number;

        return $this;
    }

    /**
     * Get card number
     *
     * If no "card number" value has been set, this method will
     * set and return a default "card number" value,
     * if any such value is available
     *
     * @see getDefaultCardNumber()
     *
     * @return string|null card number or null if no card number has been set
     */
    public function getCardNumber() : ?string 
    {
        if ( ! $this->hasCardNumber()) {
            $this->setCardNumber($this->getDefaultCardNumber());
        }
        return $this->cardNumber;
    }

    /**
     * Check if "card number" has been set
     *
     * @return bool True if "card number" has been set, false if not
     */
    public function hasCardNumber() : bool
    {
        return isset($this->cardNumber);
    }

    /**
     * Get a default "card number" value, if any is available
     *
     * @return string|null Default "card number" value or null if no default value is available
     */
    public function getDefaultCardNumber() : ?string
    {
        return null;
    }
}