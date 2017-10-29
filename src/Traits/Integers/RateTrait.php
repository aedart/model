<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Rate Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\RateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait RateTrait
{
    /**
     * The rate of something, e.g. growth rate, tax rate
     *
     * @var int|null
     */
    protected $rate = null;

    /**
     * Set rate
     *
     * @param int|null $rate The rate of something, e.g. growth rate, tax rate
     *
     * @return self
     */
    public function setRate(?int $rate)
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
     * @return int|null rate or null if no rate has been set
     */
    public function getRate() : ?int 
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
     * @return int|null Default "rate" value or null if no default value is available
     */
    public function getDefaultRate() : ?int
    {
        return null;
    }
}