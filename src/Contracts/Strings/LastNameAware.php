<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Last Name Aware</h1>
 *
 * Component is aware of a string "last name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LastNameAware
{
    /**
     * Set last name
     *
     * @param string|null $name Last Name (surname) or family name of a person
     *
     * @return self
     */
    public function setLastName(?string $name);

    /**
     * Get last name
     *
     * If no "last name" value has been set, this method will
     * set and return a default "last name" value,
     * if any such value is available
     *
     * @see getDefaultLastName()
     *
     * @return string|null last name or null if no last name has been set
     */
    public function getLastName() : ?string ;

    /**
     * Check if "last name" has been set
     *
     * @return bool True if "last name" has been set, false if not
     */
    public function hasLastName() : bool;

    /**
     * Get a default "last name" value, if any is available
     *
     * @return string|null Default "last name" value or null if no default value is available
     */
    public function getDefaultLastName() : ?string;
}