<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Rate Aware</h1>
 *
 * Component is aware of a int "rate" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface RateAware
{
    /**
     * Set rate
     *
     * @param int|null $rate The rate of something, e.g. growth rate, tax rate
     *
     * @return self
     */
    public function setRate(?int $rate);

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
    public function getRate() : ?int ;

    /**
     * Check if "rate" has been set
     *
     * @return bool True if "rate" has been set, false if not
     */
    public function hasRate() : bool;

    /**
     * Get a default "rate" value, if any is available
     *
     * @return int|null Default "rate" value or null if no default value is available
     */
    public function getDefaultRate() : ?int;
}