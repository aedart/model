<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Name Aware</h1>
 *
 * Component is aware of a string "name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface NameAware
{
    /**
     * Set name
     *
     * @param string|null $name Name
     *
     * @return self
     */
    public function setName(?string $name);

    /**
     * Get name
     *
     * If no "name" value has been set, this method will
     * set and return a default "name" value,
     * if any such value is available
     *
     * @see getDefaultName()
     *
     * @return string|null name or null if no name has been set
     */
    public function getName() : ?string ;

    /**
     * Check if "name" has been set
     *
     * @return bool True if "name" has been set, false if not
     */
    public function hasName() : bool;

    /**
     * Get a default "name" value, if any is available
     *
     * @return string|null Default "name" value or null if no default value is available
     */
    public function getDefaultName() : ?string;
}