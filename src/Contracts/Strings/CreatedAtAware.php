<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Created At Aware</h1>
 *
 * Component is aware of a string "created at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CreatedAtAware
{
    /**
     * Set created at
     *
     * @param string|null $date Date of when this component, entity or resource was created
     *
     * @return self
     */
    public function setCreatedAt(?string $date);

    /**
     * Get created at
     *
     * If no "created at" value has been set, this method will
     * set and return a default "created at" value,
     * if any such value is available
     *
     * @see getDefaultCreatedAt()
     *
     * @return string|null created at or null if no created at has been set
     */
    public function getCreatedAt() : ?string ;

    /**
     * Check if "created at" has been set
     *
     * @return bool True if "created at" has been set, false if not
     */
    public function hasCreatedAt() : bool;

    /**
     * Get a default "created at" value, if any is available
     *
     * @return string|null Default "created at" value or null if no default value is available
     */
    public function getDefaultCreatedAt() : ?string;
}