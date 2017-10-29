<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Middle Name Aware</h1>
 *
 * Component is aware of a string "middle name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface MiddleNameAware
{
    /**
     * Set middle name
     *
     * @param string|null $name Middle Name or names of a person
     *
     * @return self
     */
    public function setMiddleName(?string $name);

    /**
     * Get middle name
     *
     * If no "middle name" value has been set, this method will
     * set and return a default "middle name" value,
     * if any such value is available
     *
     * @see getDefaultMiddleName()
     *
     * @return string|null middle name or null if no middle name has been set
     */
    public function getMiddleName() : ?string ;

    /**
     * Check if "middle name" has been set
     *
     * @return bool True if "middle name" has been set, false if not
     */
    public function hasMiddleName() : bool;

    /**
     * Get a default "middle name" value, if any is available
     *
     * @return string|null Default "middle name" value or null if no default value is available
     */
    public function getDefaultMiddleName() : ?string;
}