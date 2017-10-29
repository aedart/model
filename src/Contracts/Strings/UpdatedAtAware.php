<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Updated At Aware</h1>
 *
 * Component is aware of a string "updated at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface UpdatedAtAware
{
    /**
     * Set updated at
     *
     * @param string|null $date Date of when this component, entity or resource was updated
     *
     * @return self
     */
    public function setUpdatedAt(?string $date);

    /**
     * Get updated at
     *
     * If no "updated at" value has been set, this method will
     * set and return a default "updated at" value,
     * if any such value is available
     *
     * @see getDefaultUpdatedAt()
     *
     * @return string|null updated at or null if no updated at has been set
     */
    public function getUpdatedAt() : ?string ;

    /**
     * Check if "updated at" has been set
     *
     * @return bool True if "updated at" has been set, false if not
     */
    public function hasUpdatedAt() : bool;

    /**
     * Get a default "updated at" value, if any is available
     *
     * @return string|null Default "updated at" value or null if no default value is available
     */
    public function getDefaultUpdatedAt() : ?string;
}