<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Released At Aware</h1>
 *
 * Component is aware of a string "released at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ReleasedAtAware
{
    /**
     * Set released at
     *
     * @param string|null $date Date of when this component, entity or something was released
     *
     * @return self
     */
    public function setReleasedAt(?string $date);

    /**
     * Get released at
     *
     * If no "released at" value has been set, this method will
     * set and return a default "released at" value,
     * if any such value is available
     *
     * @see getDefaultReleasedAt()
     *
     * @return string|null released at or null if no released at has been set
     */
    public function getReleasedAt() : ?string ;

    /**
     * Check if "released at" has been set
     *
     * @return bool True if "released at" has been set, false if not
     */
    public function hasReleasedAt() : bool;

    /**
     * Get a default "released at" value, if any is available
     *
     * @return string|null Default "released at" value or null if no default value is available
     */
    public function getDefaultReleasedAt() : ?string;
}