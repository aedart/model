<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Rate Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\RateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait RateTrait
{
    /**
     * The rate of something, e.g. growth rate, tax rate
     *
     * @var string|null
     */
    protected $rate = null;

    /**
     * Set rate
     *
     * @param string|null $rate The rate of something, e.g. growth rate, tax rate
     *
     * @return self
     */
    public function setRate(?string $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * If no "rate" value has been set, this method will
     * set and return a default "rate" value,
     * if any such value is available
     *
     * @see getDefaultRate()
     *
     * @return string|null rate or null if no rate has been set
     */
    public function getRate() : ?string 
    {
        if ( ! $this->hasRate()) {
            $this->setRate($this->getDefaultRate());
        }
        return $this->rate;
    }

    /**
     * Check if "rate" has been set
     *
     * @return bool True if "rate" has been set, false if not
     */
    public function hasRate() : bool
    {
        return isset($this->rate);
    }

    /**
     * Get a default "rate" value, if any is available
     *
     * @return string|null Default "rate" value or null if no default value is available
     */
    public function getDefaultRate() : ?string
    {
        return null;
    }
}