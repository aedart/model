<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>File Path Aware</h1>
 *
 * Component is aware of a string "file path" value, which can
 * also be specified.
 *
 * @see FilenameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FilePathAware
{
    /**
     * Set file path
     *
     * @param string $path Path to a file
     *
     * @return void
     */
    public function setFilePath($path);

    /**
     * Get file path
     *
     * If no "file path" value has been set, this method will
     * set and return a default "file path" value,
     * if any such value is available
     *
     * @see getDefaultFilePath()
     *
     * @return string|null "file path" value or null if no "file path" value has been set
     */
    public function getFilePath();

    /**
     * Get a default "file path" value, if any is available
     *
     * @return string|null A default "file path" value or null if no default value is available
     */
    public function getDefaultFilePath();

    /**
     * Check if "file path" has been set
     *
     * @return bool True if "file path" value has been set, false if not
     */
    public function hasFilePath();

    /**
     * Check if a default "file path" is available or not
     *
     * @return bool True of a default "file path" value is available, false if not
     */
    public function hasDefaultFilePath();
}