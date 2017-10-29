<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Date Aware</h1>
 *
 * Component is aware of a string "date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DateAware
{
    /**
     * Set date
     *
     * @param string|null $date Date of event
     *
     * @return self
     */
    public function setDate(?string $date);

    /**
     * Get date
     *
     * If no "date" value has been set, this method will
     * set and return a default "date" value,
     * if any such value is available
     *
     * @see getDefaultDate()
     *
     * @return string|null date or null if no date has been set
     */
    public function getDate() : ?string ;

    /**
     * Check if "date" has been set
     *
     * @return bool True if "date" has been set, false if not
     */
    public function hasDate() : bool;

    /**
     * Get a default "date" value, if any is available
     *
     * @return string|null Default "date" value or null if no default value is available
     */
    public function getDefaultDate() : ?string;
}