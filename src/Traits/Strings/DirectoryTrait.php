<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Directory Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DirectoryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DirectoryTrait
{
    /**
     * Path to a given directory, relative or absolute, existing or none-existing
     *
     * @var string|null
     */
    protected $directory = null;

    /**
     * Set directory
     *
     * @param string $path Path to a given directory, relative or absolute, existing or none-existing
     *
     * @return void
     */
    public function setDirectory($path)
    {
        $this->directory = (string) $path;
    }

    /**
     * Get directory
     *
     * If no "directory" value has been set, this method will
     * set and return a default "directory" value,
     * if any such value is available
     *
     * @see getDefaultDirectory()
     *
     * @return string|null "directory" value or null if no "directory" value has been set
     */
    public function getDirectory()
    {
        if (!$this->hasDirectory() && $this->hasDefaultDirectory()) {
            $this->setDirectory($this->getDefaultDirectory());
        }
        return $this->directory;
    }

    /**
     * Get a default "directory" value, if any is available
     *
     * @return string|null A default "directory" value or null if no default value is available
     */
    public function getDefaultDirectory()
    {
        return null;
    }

    /**
     * Check if "directory" has been set
     *
     * @return bool True if "directory" value has been set, false if not
     */
    public function hasDirectory()
    {
        return isset($this->directory);
    }

    /**
     * Check if a default "directory" is available or not
     *
     * @return bool True of a default "directory" value is available, false if not
     */
    public function hasDefaultDirectory()
    {
        $default = $this->getDefaultDirectory();
        return isset($default);
    }
}