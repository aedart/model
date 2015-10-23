<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Filename Aware</h1>
 *
 * Component is able to specify and retrieve the name of a file.
 * This can be with or without the file's path, e.g. notes.doc, /lib/docs/help.pdf
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface FilenameAware {

    /**
     * Set the given filename
     *
     * @param string $name Filename - Name of a given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @return void
     */
    public function setFilename($name);

    /**
     * Get the given filename
     *
     * If no filename has been set, this method will
     * set and return a default filename, if any such
     * value is available
     *
     * @see getDefaultFilename()
     *
     * @return string|null filename or null if none filename has been set
     */
    public function getFilename();

    /**
     * Get a default filename value, if any is available
     *
     * @return string|null A default filename value or Null if no default value is available
     */
    public function getDefaultFilename();

    /**
     * Check if filename has been set
     *
     * @return bool True if filename has been set, false if not
     */
    public function hasFilename();

    /**
     * Check if a default filename is available or not
     *
     * @return bool True of a default filename is available, false if not
     */
    public function hasDefaultFilename();
}