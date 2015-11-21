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
 * @package Aedart\Model\Traits\Strings
 */
interface DirectoryAware {

    /**
     * Set the given directory
     *
     * @param string $path Path to a given directory, relative or absolute, existing or none-existing
     *
     * @return void
     */
    public function setDirectory($path);

    /**
     * Get the given directory
     *
     * If no directory has been set, this method will
     * set and return a default directory, if any such
     * value is available
     *
     * @see getDefaultDirectory()
     *
     * @return string|null directory or null if none directory has been set
     */
    public function getDirectory();

    /**
     * Get a default directory value, if any is available
     *
     * @return string|null A default directory value or Null if no default value is available
     */
    public function getDefaultDirectory();

    /**
     * Check if directory has been set
     *
     * @return bool True if directory has been set, false if not
     */
    public function hasDirectory();

    /**
     * Check if a default directory is available or not
     *
     * @return bool True of a default directory is available, false if not
     */
    public function hasDefaultDirectory();
}