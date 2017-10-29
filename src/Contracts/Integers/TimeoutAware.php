<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Timeout Aware</h1>
 *
 * Component is aware of a int "timeout" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface TimeoutAware
{
    /**
     * Set timeout
     *
     * @param int|null $amount Timeout amount
     *
     * @return self
     */
    public function setTimeout(?int $amount);

    /**
     * Get timeout
     *
     * If no "timeout" value has been set, this method will
     * set and return a default "timeout" value,
     * if any such value is available
     *
     * @see getDefaultTimeout()
     *
     * @return int|null timeout or null if no timeout has been set
     */
    public function getTimeout() : ?int ;

    /**
     * Check if "timeout" has been set
     *
     * @return bool True if "timeout" has been set, false if not
     */
    public function hasTimeout() : bool;

    /**
     * Get a default "timeout" value, if any is available
     *
     * @return int|null Default "timeout" value or null if no default value is available
     */
    public function getDefaultTimeout() : ?int;
}