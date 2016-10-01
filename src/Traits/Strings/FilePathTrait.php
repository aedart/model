<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>File Path Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\FilePathAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait FilePathTrait
{
    /**
     * Path to a file
     *
     * @var string|null
     */
    protected $filePath = null;

    /**
     * Set file path
     *
     * @param string $path Path to a file
     *
     * @return void
     */
    public function setFilePath($path)
    {
        $this->filePath = (string) $path;
    }

    /**
     * Get file path
     *
     * If no "file path" value has been set, this method will
     * set and return a default "file path" value,
     * if any such value is available
     *
     * @see getDefaultFilePath()
     *
     * @return string|null "file path" value or null if no "file path" value has been set
     */
    public function getFilePath()
    {
        if (!$this->hasFilePath() && $this->hasDefaultFilePath()) {
            $this->setFilePath($this->getDefaultFilePath());
        }
        return $this->filePath;
    }

    /**
     * Get a default "file path" value, if any is available
     *
     * @return string|null A default "file path" value or null if no default value is available
     */
    public function getDefaultFilePath()
    {
        return null;
    }

    /**
     * Check if "file path" has been set
     *
     * @return bool True if "file path" value has been set, false if not
     */
    public function hasFilePath()
    {
        return isset($this->filePath);
    }

    /**
     * Check if a default "file path" is available or not
     *
     * @return bool True of a default "file path" value is available, false if not
     */
    public function hasDefaultFilePath()
    {
        $default = $this->getDefaultFilePath();
        return isset($default);
    }
}