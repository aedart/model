<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Timeout Aware</h1>
 *
 * Component is aware of a numeric timeout value that can also
 * be specified.
 *
 * <br />
 *
 * Depending upon implementation context, the timeout can be
 * stated in milliseconds, seconds, minutes, hours, days... etc
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface TimeoutAware
{
    /**
     * Set timeout
     *
     * @param int $value Timeout
     *
     * @return void
     */
    public function setTimeout($value);

    /**
     * Get timeout
     *
     * If no "timeout" value has been set, this method will
     * set and return a default "timeout" value,
     * if any such value is available
     *
     * @see getDefaultTimeout()
     *
     * @return int|null "timeout" value or null if no "timeout" value has been set
     */
    public function getTimeout();

    /**
     * Get a default "timeout" value, if any is available
     *
     * @return int|null A default "timeout" value or null if no default value is available
     */
    public function getDefaultTimeout();

    /**
     * Check if "timeout" has been set
     *
     * @return bool True if "timeout" value has been set, false if not
     */
    public function hasTimeout();

    /**
     * Check if a default "timeout" is available or not
     *
     * @return bool True of a default "timeout" value is available, false if not
     */
    public function hasDefaultTimeout();
}