<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Row Aware</h1>
 *
 * Component is aware of a int "row" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface RowAware
{
    /**
     * Set row
     *
     * @param int $identifier A row identifier
     *
     * @return void
     */
    public function setRow($identifier);

    /**
     * Get row
     *
     * If no "row" value has been set, this method will
     * set and return a default "row" value,
     * if any such value is available
     *
     * @see getDefaultRow()
     *
     * @return int|null "row" value or null if no "row" value has been set
     */
    public function getRow();

    /**
     * Get a default "row" value, if any is available
     *
     * @return int|null A default "row" value or null if no default value is available
     */
    public function getDefaultRow();

    /**
     * Check if "row" has been set
     *
     * @return bool True if "row" value has been set, false if not
     */
    public function hasRow();

    /**
     * Check if a default "row" is available or not
     *
     * @return bool True of a default "row" value is available, false if not
     */
    public function hasDefaultRow();
}