<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Expires At Aware</h1>
 *
 * Component is aware of a string "expires at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ExpiresAtAware
{
    /**
     * Set expires at
     *
     * @param string|null $date Date of when this component, entity or resource is going to expire
     *
     * @return self
     */
    public function setExpiresAt(?string $date);

    /**
     * Get expires at
     *
     * If no "expires at" value has been set, this method will
     * set and return a default "expires at" value,
     * if any such value is available
     *
     * @see getDefaultExpiresAt()
     *
     * @return string|null expires at or null if no expires at has been set
     */
    public function getExpiresAt() : ?string ;

    /**
     * Check if "expires at" has been set
     *
     * @return bool True if "expires at" has been set, false if not
     */
    public function hasExpiresAt() : bool;

    /**
     * Get a default "expires at" value, if any is available
     *
     * @return string|null Default "expires at" value or null if no default value is available
     */
    public function getDefaultExpiresAt() : ?string;
}