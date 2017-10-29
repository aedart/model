<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $path Path to a given directory, relative or absolute, existing or none-existing
     *
     * @return self
     */
    public function setDirectory(?string $path)
    {
        $this->directory = $path;

        return $this;
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
     * @return string|null directory or null if no directory has been set
     */
    public function getDirectory() : ?string 
    {
        if ( ! $this->hasDirectory()) {
            $this->setDirectory($this->getDefaultDirectory());
        }
        return $this->directory;
    }

    /**
     * Check if "directory" has been set
     *
     * @return bool True if "directory" has been set, false if not
     */
    public function hasDirectory() : bool
    {
        return isset($this->directory);
    }

    /**
     * Get a default "directory" value, if any is available
     *
     * @return string|null Default "directory" value or null if no default value is available
     */
    public function getDefaultDirectory() : ?string
    {
        return null;
    }
}