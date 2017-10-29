<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>File Path Aware</h1>
 *
 * Component is aware of a string "file path" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FilePathAware
{
    /**
     * Set file path
     *
     * @param string|null $path Path to a file
     *
     * @return self
     */
    public function setFilePath(?string $path);

    /**
     * Get file path
     *
     * If no "file path" value has been set, this method will
     * set and return a default "file path" value,
     * if any such value is available
     *
     * @see getDefaultFilePath()
     *
     * @return string|null file path or null if no file path has been set
     */
    public function getFilePath() : ?string ;

    /**
     * Check if "file path" has been set
     *
     * @return bool True if "file path" has been set, false if not
     */
    public function hasFilePath() : bool;

    /**
     * Get a default "file path" value, if any is available
     *
     * @return string|null Default "file path" value or null if no default value is available
     */
    public function getDefaultFilePath() : ?string;
}