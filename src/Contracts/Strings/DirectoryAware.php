<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Directory Aware</h1>
 *
 * Components are aware of a directory path, which can either be
 * relative, e.g. relative to the root level or perhaps just the
 * directory name, or absolute.
 *
 * Furthermore, the path might or might not exist
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DirectoryAware
{
    /**
     * Set directory
     *
     * @param string $path Path to a given directory, relative or absolute, existing or none-existing
     *
     * @return void
     */
    public function setDirectory($path);

    /**
     * Get directory
     *
     * If no "directory" value has been set, this method will
     * set and return a default "directory" value,
     * if any such value is available
     *
     * @see getDefaultDirectory()
     *
     * @return string|null "directory" value or null if no "directory" value has been set
     */
    public function getDirectory();

    /**
     * Get a default "directory" value, if any is available
     *
     * @return string|null A default "directory" value or null if no default value is available
     */
    public function getDefaultDirectory();

    /**
     * Check if "directory" has been set
     *
     * @return bool True if "directory" value has been set, false if not
     */
    public function hasDirectory();

    /**
     * Check if a default "directory" is available or not
     *
     * @return bool True of a default "directory" value is available, false if not
     */
    public function hasDefaultDirectory();
}