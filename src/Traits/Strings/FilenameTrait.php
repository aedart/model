<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Filename Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\FilenameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait FilenameTrait {

    /**
     * Filename - Name of a given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @var string|null
     */
    protected $filename = null;

    /**
     * Set the given filename
     *
     * @param string $name Filename - Name of a given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @return void
     */
    public function setFilename($name) {
        $this->filename = (string) $name;
    }

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
    public function getFilename() {
        if (!$this->hasFilename() && $this->hasDefaultFilename()) {
            $this->setFilename($this->getDefaultFilename());
        }
        return $this->filename;
    }

    /**
     * Get a default filename value, if any is available
     *
     * @return string|null A default filename value or Null if no default value is available
     */
    public function getDefaultFilename() {
        return null;
    }

    /**
     * Check if filename has been set
     *
     * @return bool True if filename has been set, false if not
     */
    public function hasFilename() {
        return !is_null($this->filename);
    }

    /**
     * Check if a default filename is available or not
     *
     * @return bool True of a default filename is available, false if not
     */
    public function hasDefaultFilename() {
        return !is_null($this->getDefaultFilename());
    }
}