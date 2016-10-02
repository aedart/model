<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Currency Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CurrencyAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CurrencyTrait
{
    /**
     * Name, code or other identifier of a currency
     *
     * @var string|null
     */
    protected $currency = null;

    /**
     * Set currency
     *
     * @param string $identifier Name, code or other identifier of a currency
     *
     * @return void
     */
    public function setCurrency($identifier)
    {
        $this->currency = (string) $identifier;
    }

    /**
     * Get currency
     *
     * If no "currency" value has been set, this method will
     * set and return a default "currency" value,
     * if any such value is available
     *
     * @see getDefaultCurrency()
     *
     * @return string|null "currency" value or null if no "currency" value has been set
     */
    public function getCurrency()
    {
        if (!$this->hasCurrency() && $this->hasDefaultCurrency()) {
            $this->setCurrency($this->getDefaultCurrency());
        }
        return $this->currency;
    }

    /**
     * Get a default "currency" value, if any is available
     *
     * @return string|null A default "currency" value or null if no default value is available
     */
    public function getDefaultCurrency()
    {
        return null;
    }

    /**
     * Check if "currency" has been set
     *
     * @return bool True if "currency" value has been set, false if not
     */
    public function hasCurrency()
    {
        return isset($this->currency);
    }

    /**
     * Check if a default "currency" is available or not
     *
     * @return bool True of a default "currency" value is available, false if not
     */
    public function hasDefaultCurrency()
    {
        $default = $this->getDefaultCurrency();
        return isset($default);
    }
}