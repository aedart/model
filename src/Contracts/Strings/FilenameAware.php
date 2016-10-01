<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Filename Aware</h1>
 *
 * Component is aware of a string "filename" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FilenameAware
{
    /**
     * Set filename
     *
     * @param string $name Name of a given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @return void
     */
    public function setFilename($name);

    /**
     * Get filename
     *
     * If no "filename" value has been set, this method will
     * set and return a default "filename" value,
     * if any such value is available
     *
     * @see getDefaultFilename()
     *
     * @return string|null "filename" value or null if no "filename" value has been set
     */
    public function getFilename();

    /**
     * Get a default "filename" value, if any is available
     *
     * @return string|null A default "filename" value or null if no default value is available
     */
    public function getDefaultFilename();

    /**
     * Check if "filename" has been set
     *
     * @return bool True if "filename" value has been set, false if not
     */
    public function hasFilename();

    /**
     * Check if a default "filename" is available or not
     *
     * @return bool True of a default "filename" value is available, false if not
     */
    public function hasDefaultFilename();
}