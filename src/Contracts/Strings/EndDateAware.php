<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>End Date Aware</h1>
 *
 * Component is aware of a string "end date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface EndDateAware
{
    /**
     * Set end date
     *
     * @param string|null $date Date for when some kind of event ends
     *
     * @return self
     */
    public function setEndDate(?string $date);

    /**
     * Get end date
     *
     * If no "end date" value has been set, this method will
     * set and return a default "end date" value,
     * if any such value is available
     *
     * @see getDefaultEndDate()
     *
     * @return string|null end date or null if no end date has been set
     */
    public function getEndDate() : ?string ;

    /**
     * Check if "end date" has been set
     *
     * @return bool True if "end date" has been set, false if not
     */
    public function hasEndDate() : bool;

    /**
     * Get a default "end date" value, if any is available
     *
     * @return string|null Default "end date" value or null if no default value is available
     */
    public function getDefaultEndDate() : ?string;
}