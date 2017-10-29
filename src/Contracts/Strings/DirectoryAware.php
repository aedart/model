<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Directory Aware</h1>
 *
 * Component is aware of a string "directory" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DirectoryAware
{
    /**
     * Set directory
     *
     * @param string|null $path Path to a given directory, relative or absolute, existing or none-existing
     *
     * @return self
     */
    public function setDirectory(?string $path);

    /**
     * Get directory
     *
     * If no "directory" value has been set, this method will
     * set and return a default "directory" value,
     * if any such value is available
     *
     * @see getDefaultDirectory()
     *
     * @return string|null directory or null if no directory has been set
     */
    public function getDirectory() : ?string ;

    /**
     * Check if "directory" has been set
     *
     * @return bool True if "directory" has been set, false if not
     */
    public function hasDirectory() : bool;

    /**
     * Get a default "directory" value, if any is available
     *
     * @return string|null Default "directory" value or null if no default value is available
     */
    public function getDefaultDirectory() : ?string;
}