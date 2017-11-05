<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Date Aware</h1>
 *
 * Component is aware of a int "date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DateAware
{
    /**
     * Set date
     *
     * @param int|null $date Date of event
     *
     * @return self
     */
    public function setDate(?int $date);

    /**
     * Get date
     *
     * If no "date" value has been set, this method will
     * set and return a default "date" value,
     * if any such value is available
     *
     * @see getDefaultDate()
     *
     * @return int|null date or null if no date has been set
     */
    public function getDate() : ?int ;

    /**
     * Check if "date" has been set
     *
     * @return bool True if "date" has been set, false if not
     */
    public function hasDate() : bool;

    /**
     * Get a default "date" value, if any is available
     *
     * @return int|null Default "date" value or null if no default value is available
     */
    public function getDefaultDate() : ?int;
}