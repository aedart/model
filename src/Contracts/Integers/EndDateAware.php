<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>End Date Aware</h1>
 *
 * Component is aware of a int "end date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface EndDateAware
{
    /**
     * Set end date
     *
     * @param int|null $date Date for when some kind of event ends
     *
     * @return self
     */
    public function setEndDate(?int $date);

    /**
     * Get end date
     *
     * If no "end date" value has been set, this method will
     * set and return a default "end date" value,
     * if any such value is available
     *
     * @see getDefaultEndDate()
     *
     * @return int|null end date or null if no end date has been set
     */
    public function getEndDate() : ?int ;

    /**
     * Check if "end date" has been set
     *
     * @return bool True if "end date" has been set, false if not
     */
    public function hasEndDate() : bool;

    /**
     * Get a default "end date" value, if any is available
     *
     * @return int|null Default "end date" value or null if no default value is available
     */
    public function getDefaultEndDate() : ?int;
}