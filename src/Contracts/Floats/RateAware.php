<?php namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Rate Aware</h1>
 *
 * Component is aware of a float "rate" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface RateAware
{
    /**
     * Set rate
     *
     * @param float $rate The rate of something, e.g. growth rate, tax rate
     *
     * @return void
     */
    public function setRate($rate);

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
    public function getRate();

    /**
     * Get a default "rate" value, if any is available
     *
     * @return float|null A default "rate" value or null if no default value is available
     */
    public function getDefaultRate();

    /**
     * Check if "rate" has been set
     *
     * @return bool True if "rate" value has been set, false if not
     */
    public function hasRate();

    /**
     * Check if a default "rate" is available or not
     *
     * @return bool True of a default "rate" value is available, false if not
     */
    public function hasDefaultRate();
}