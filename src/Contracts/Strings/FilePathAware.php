<?php namespace Aedart\Model\Contracts\Strings;


/**
 * <h1>File Path Aware</h1>
 *
 * Component is able to specify and retrieve a file path
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface FilePathAware
{
    /**
     * Set the given file path
     *
     * @param string $path Path to a file
     *
     * @return void
     */
    public function setFilePath($path);

    /**
     * Get the given file path
     *
     * If no file path has been set, this method will
     * set and return a default file path, if any such
     * value is available
     *
     * @see getDefaultFilePath()
     *
     * @return string|null file path or null if none file path has been set
     */
    public function getFilePath();

    /**
     * Get a default file path value, if any is available
     *
     * @return string|null A default file path value or Null if no default value is available
     */
    public function getDefaultFilePath();

    /**
     * Check if file path has been set
     *
     * @return bool True if file path has been set, false if not
     */
    public function hasFilePath();

    /**
     * Check if a default file path is available or not
     *
     * @return bool True of a default file path is available, false if not
     */
    public function hasDefaultFilePath();
}