<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Class Aware</h1>
 *
 * Component is aware of a string "class" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ClassAware
{
    /**
     * Set class
     *
     * @param string|null $class The class of something or perhaps a class path
     *
     * @return self
     */
    public function setClass(?string $class);

    /**
     * Get class
     *
     * If no "class" value has been set, this method will
     * set and return a default "class" value,
     * if any such value is available
     *
     * @see getDefaultClass()
     *
     * @return string|null class or null if no class has been set
     */
    public function getClass() : ?string ;

    /**
     * Check if "class" has been set
     *
     * @return bool True if "class" has been set, false if not
     */
    public function hasClass() : bool;

    /**
     * Get a default "class" value, if any is available
     *
     * @return string|null Default "class" value or null if no default value is available
     */
    public function getDefaultClass() : ?string;
}