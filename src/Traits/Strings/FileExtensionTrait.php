<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>File Extension Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\FileExtensionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait FileExtensionTrait
{
    /**
     * File extension, e.g. php, avi, json, txt...etc
     *
     * @var string|null
     */
    protected $fileExtension = null;

    /**
     * Set file extension
     *
     * @param string $extension File extension, e.g. php, avi, json, txt...etc
     *
     * @return void
     */
    public function setFileExtension($extension)
    {
        $this->fileExtension = (string) $extension;
    }

    /**
     * Get file extension
     *
     * If no "file extension" value has been set, this method will
     * set and return a default "file extension" value,
     * if any such value is available
     *
     * @see getDefaultFileExtension()
     *
     * @return string|null "file extension" value or null if no "file extension" value has been set
     */
    public function getFileExtension()
    {
        if (!$this->hasFileExtension() && $this->hasDefaultFileExtension()) {
            $this->setFileExtension($this->getDefaultFileExtension());
        }
        return $this->fileExtension;
    }

    /**
     * Get a default "file extension" value, if any is available
     *
     * @return string|null A default "file extension" value or null if no default value is available
     */
    public function getDefaultFileExtension()
    {
        return null;
    }

    /**
     * Check if "file extension" has been set
     *
     * @return bool True if "file extension" value has been set, false if not
     */
    public function hasFileExtension()
    {
        return isset($this->fileExtension);
    }

    /**
     * Check if a default "file extension" is available or not
     *
     * @return bool True of a default "file extension" value is available, false if not
     */
    public function hasDefaultFileExtension()
    {
        $default = $this->getDefaultFileExtension();
        return isset($default);
    }
}