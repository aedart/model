<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Event Aware</h1>
 *
 * Component is aware of a int "event" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface EventAware
{
    /**
     * Set event
     *
     * @param int|null $identifier Event name or identifier
     *
     * @return self
     */
    public function setEvent(?int $identifier);

    /**
     * Get event
     *
     * If no "event" value has been set, this method will
     * set and return a default "event" value,
     * if any such value is available
     *
     * @see getDefaultEvent()
     *
     * @return int|null event or null if no event has been set
     */
    public function getEvent() : ?int ;

    /**
     * Check if "event" has been set
     *
     * @return bool True if "event" has been set, false if not
     */
    public function hasEvent() : bool;

    /**
     * Get a default "event" value, if any is available
     *
     * @return int|null Default "event" value or null if no default value is available
     */
    public function getDefaultEvent() : ?int;
}