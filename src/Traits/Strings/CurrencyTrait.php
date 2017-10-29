<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Name, code or other identifier of currency
     *
     * @var string|null
     */
    protected $currency = null;

    /**
     * Set currency
     *
     * @param string|null $identifier Name, code or other identifier of currency
     *
     * @return self
     */
    public function setCurrency(?string $identifier)
    {
        $this->currency = $identifier;

        return $this;
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
     * @return string|null currency or null if no currency has been set
     */
    public function getCurrency() : ?string 
    {
        if ( ! $this->hasCurrency()) {
            $this->setCurrency($this->getDefaultCurrency());
        }
        return $this->currency;
    }

    /**
     * Check if "currency" has been set
     *
     * @return bool True if "currency" has been set, false if not
     */
    public function hasCurrency() : bool
    {
        return isset($this->currency);
    }

    /**
     * Get a default "currency" value, if any is available
     *
     * @return string|null Default "currency" value or null if no default value is available
     */
    public function getDefaultCurrency() : ?string
    {
        return null;
    }
}