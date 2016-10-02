<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>File Extension Aware</h1>
 *
 * Component is aware of a string "file extension" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FileExtensionAware
{
    /**
     * Set file extension
     *
     * @param string $extension File extension, e.g. php, avi, json, txt...etc
     *
     * @return void
     */
    public function setFileExtension($extension);

    /**
     * Get file extension
     *
     * If no "file extension" value has been set, this method will
     * set and return a default "file extension" value,
     * if any such value is available
     *
     * @see getDefaultFileExtension()
     *
     * @return string|null "file extension" value or null if no "file extension" value has been set
     */
    public function getFileExtension();

    /**
     * Get a default "file extension" value, if any is available
     *
     * @return string|null A default "file extension" value or null if no default value is available
     */
    public function getDefaultFileExtension();

    /**
     * Check if "file extension" has been set
     *
     * @return bool True if "file extension" value has been set, false if not
     */
    public function hasFileExtension();

    /**
     * Check if a default "file extension" is available or not
     *
     * @return bool True of a default "file extension" value is available, false if not
     */
    public function hasDefaultFileExtension();
}