<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Start Date Aware</h1>
 *
 * Component is aware of a string "start date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface StartDateAware
{
    /**
     * Set start date
     *
     * @param string|null $date Start date of event
     *
     * @return self
     */
    public function setStartDate(?string $date);

    /**
     * Get start date
     *
     * If no "start date" value has been set, this method will
     * set and return a default "start date" value,
     * if any such value is available
     *
     * @see getDefaultStartDate()
     *
     * @return string|null start date or null if no start date has been set
     */
    public function getStartDate() : ?string ;

    /**
     * Check if "start date" has been set
     *
     * @return bool True if "start date" has been set, false if not
     */
    public function hasStartDate() : bool;

    /**
     * Get a default "start date" value, if any is available
     *
     * @return string|null Default "start date" value or null if no default value is available
     */
    public function getDefaultStartDate() : ?string;
}