<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $extension File extension, e.g. php, avi, json, txt...etc
     *
     * @return self
     */
    public function setFileExtension(?string $extension);

    /**
     * Get file extension
     *
     * If no "file extension" value has been set, this method will
     * set and return a default "file extension" value,
     * if any such value is available
     *
     * @see getDefaultFileExtension()
     *
     * @return string|null file extension or null if no file extension has been set
     */
    public function getFileExtension() : ?string ;

    /**
     * Check if "file extension" has been set
     *
     * @return bool True if "file extension" has been set, false if not
     */
    public function hasFileExtension() : bool;

    /**
     * Get a default "file extension" value, if any is available
     *
     * @return string|null Default "file extension" value or null if no default value is available
     */
    public function getDefaultFileExtension() : ?string;
}