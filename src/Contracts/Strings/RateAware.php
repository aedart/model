<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Rate Aware</h1>
 *
 * Component is aware of a string "rate" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface RateAware
{
    /**
     * Set rate
     *
     * @param string|null $rate The rate of something, e.g. growth rate, tax rate
     *
     * @return self
     */
    public function setRate(?string $rate);

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
    public function getRate() : ?string ;

    /**
     * Check if "rate" has been set
     *
     * @return bool True if "rate" has been set, false if not
     */
    public function hasRate() : bool;

    /**
     * Get a default "rate" value, if any is available
     *
     * @return string|null Default "rate" value or null if no default value is available
     */
    public function getDefaultRate() : ?string;
}