<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $number Numeric or Alphanumeric card number, e.g. for credit cards or other types of cards
     *
     * @return void
     */
    public function setCardNumber($number)
    {
        $this->cardNumber = (string) $number;
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
     * @return string|null "card number" value or null if no "card number" value has been set
     */
    public function getCardNumber()
    {
        if (!$this->hasCardNumber() && $this->hasDefaultCardNumber()) {
            $this->setCardNumber($this->getDefaultCardNumber());
        }
        return $this->cardNumber;
    }

    /**
     * Get a default "card number" value, if any is available
     *
     * @return string|null A default "card number" value or null if no default value is available
     */
    public function getDefaultCardNumber()
    {
        return null;
    }

    /**
     * Check if "card number" has been set
     *
     * @return bool True if "card number" value has been set, false if not
     */
    public function hasCardNumber()
    {
        return isset($this->cardNumber);
    }

    /**
     * Check if a default "card number" is available or not
     *
     * @return bool True of a default "card number" value is available, false if not
     */
    public function hasDefaultCardNumber()
    {
        $default = $this->getDefaultCardNumber();
        return isset($default);
    }
}