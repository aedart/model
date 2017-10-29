<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Expires At Aware</h1>
 *
 * Component is aware of a int "expires at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface ExpiresAtAware
{
    /**
     * Set expires at
     *
     * @param int|null $date Date of when this component, entity or resource is going to expire
     *
     * @return self
     */
    public function setExpiresAt(?int $date);

    /**
     * Get expires at
     *
     * If no "expires at" value has been set, this method will
     * set and return a default "expires at" value,
     * if any such value is available
     *
     * @see getDefaultExpiresAt()
     *
     * @return int|null expires at or null if no expires at has been set
     */
    public function getExpiresAt() : ?int ;

    /**
     * Check if "expires at" has been set
     *
     * @return bool True if "expires at" has been set, false if not
     */
    public function hasExpiresAt() : bool;

    /**
     * Get a default "expires at" value, if any is available
     *
     * @return int|null Default "expires at" value or null if no default value is available
     */
    public function getDefaultExpiresAt() : ?int;
}