<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Directory Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DirectoryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DirectoryTrait {

    /**
     * Path to a given directory, relative or absolute, existing or none-existing
     *
     * @var string|null
     */
    protected $directory = null;

    /**
     * Set the given directory
     *
     * @param string $path Path to a given directory, relative or absolute, existing or none-existing
     *
     * @return void
     */
    public function setDirectory($path) {
        $this->directory = (string) $path;
    }

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
    public function getDirectory() {
        if (!$this->hasDirectory() && $this->hasDefaultDirectory()) {
            $this->setDirectory($this->getDefaultDirectory());
        }
        return $this->directory;
    }

    /**
     * Get a default directory value, if any is available
     *
     * @return string|null A default directory value or Null if no default value is available
     */
    public function getDefaultDirectory() {
        return null;
    }

    /**
     * Check if directory has been set
     *
     * @return bool True if directory has been set, false if not
     */
    public function hasDirectory() {
        return !is_null($this->directory);
    }

    /**
     * Check if a default directory is available or not
     *
     * @return bool True of a default directory is available, false if not
     */
    public function hasDefaultDirectory() {
        return !is_null($this->getDefaultDirectory());
    }
}