<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Released At Aware</h1>
 *
 * Component is aware of a int "released at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface ReleasedAtAware
{
    /**
     * Set released at
     *
     * @param int|null $date Date of when this component, entity or something was released
     *
     * @return self
     */
    public function setReleasedAt(?int $date);

    /**
     * Get released at
     *
     * If no "released at" value has been set, this method will
     * set and return a default "released at" value,
     * if any such value is available
     *
     * @see getDefaultReleasedAt()
     *
     * @return int|null released at or null if no released at has been set
     */
    public function getReleasedAt() : ?int ;

    /**
     * Check if "released at" has been set
     *
     * @return bool True if "released at" has been set, false if not
     */
    public function hasReleasedAt() : bool;

    /**
     * Get a default "released at" value, if any is available
     *
     * @return int|null Default "released at" value or null if no default value is available
     */
    public function getDefaultReleasedAt() : ?int;
}