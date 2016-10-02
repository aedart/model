<?php namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Rate Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\RateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait RateTrait
{
    /**
     * The rate of something, e.g. growth rate, tax rate
     *
     * @var float|null
     */
    protected $rate = null;

    /**
     * Set rate
     *
     * @param float $rate The rate of something, e.g. growth rate, tax rate
     *
     * @return void
     */
    public function setRate($rate)
    {
        $this->rate = (float) $rate;
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
     * @return float|null "rate" value or null if no "rate" value has been set
     */
    public function getRate()
    {
        if (!$this->hasRate() && $this->hasDefaultRate()) {
            $this->setRate($this->getDefaultRate());
        }
        return $this->rate;
    }

    /**
     * Get a default "rate" value, if any is available
     *
     * @return float|null A default "rate" value or null if no default value is available
     */
    public function getDefaultRate()
    {
        return null;
    }

    /**
     * Check if "rate" has been set
     *
     * @return bool True if "rate" value has been set, false if not
     */
    public function hasRate()
    {
        return isset($this->rate);
    }

    /**
     * Check if a default "rate" is available or not
     *
     * @return bool True of a default "rate" value is available, false if not
     */
    public function hasDefaultRate()
    {
        $default = $this->getDefaultRate();
        return isset($default);
    }
}