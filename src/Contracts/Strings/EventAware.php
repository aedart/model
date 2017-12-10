<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Event Aware</h1>
 *
 * Component is aware of a string "event" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface EventAware
{
    /**
     * Set event
     *
     * @param string|null $identifier Event name or identifier
     *
     * @return self
     */
    public function setEvent(?string $identifier);

    /**
     * Get event
     *
     * If no "event" value has been set, this method will
     * set and return a default "event" value,
     * if any such value is available
     *
     * @see getDefaultEvent()
     *
     * @return string|null event or null if no event has been set
     */
    public function getEvent() : ?string ;

    /**
     * Check if "event" has been set
     *
     * @return bool True if "event" has been set, false if not
     */
    public function hasEvent() : bool;

    /**
     * Get a default "event" value, if any is available
     *
     * @return string|null Default "event" value or null if no default value is available
     */
    public function getDefaultEvent() : ?string;
}