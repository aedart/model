<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Uuid Aware</h1>
 *
 * Component is aware of a string "uuid" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface UuidAware
{
    /**
     * Set uuid
     *
     * @param string|null $identifier Universally Unique Identifier (UUID)
     *
     * @return self
     */
    public function setUuid(?string $identifier);

    /**
     * Get uuid
     *
     * If no "uuid" value has been set, this method will
     * set and return a default "uuid" value,
     * if any such value is available
     *
     * @see getDefaultUuid()
     *
     * @return string|null uuid or null if no uuid has been set
     */
    public function getUuid() : ?string ;

    /**
     * Check if "uuid" has been set
     *
     * @return bool True if "uuid" has been set, false if not
     */
    public function hasUuid() : bool;

    /**
     * Get a default "uuid" value, if any is available
     *
     * @return string|null Default "uuid" value or null if no default value is available
     */
    public function getDefaultUuid() : ?string;
}