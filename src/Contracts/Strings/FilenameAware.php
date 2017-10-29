<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $name Name of given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @return self
     */
    public function setFilename(?string $name);

    /**
     * Get filename
     *
     * If no "filename" value has been set, this method will
     * set and return a default "filename" value,
     * if any such value is available
     *
     * @see getDefaultFilename()
     *
     * @return string|null filename or null if no filename has been set
     */
    public function getFilename() : ?string ;

    /**
     * Check if "filename" has been set
     *
     * @return bool True if "filename" has been set, false if not
     */
    public function hasFilename() : bool;

    /**
     * Get a default "filename" value, if any is available
     *
     * @return string|null Default "filename" value or null if no default value is available
     */
    public function getDefaultFilename() : ?string;
}