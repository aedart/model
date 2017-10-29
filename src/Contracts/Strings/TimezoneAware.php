<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Timezone Aware</h1>
 *
 * Component is aware of a string "timezone" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TimezoneAware
{
    /**
     * Set timezone
     *
     * @param string|null $name Name of timezone
     *
     * @return self
     */
    public function setTimezone(?string $name);

    /**
     * Get timezone
     *
     * If no "timezone" value has been set, this method will
     * set and return a default "timezone" value,
     * if any such value is available
     *
     * @see getDefaultTimezone()
     *
     * @return string|null timezone or null if no timezone has been set
     */
    public function getTimezone() : ?string ;

    /**
     * Check if "timezone" has been set
     *
     * @return bool True if "timezone" has been set, false if not
     */
    public function hasTimezone() : bool;

    /**
     * Get a default "timezone" value, if any is available
     *
     * @return string|null Default "timezone" value or null if no default value is available
     */
    public function getDefaultTimezone() : ?string;
}