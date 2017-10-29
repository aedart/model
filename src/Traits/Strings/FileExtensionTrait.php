<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $extension File extension, e.g. php, avi, json, txt...etc
     *
     * @return self
     */
    public function setFileExtension(?string $extension)
    {
        $this->fileExtension = $extension;

        return $this;
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
     * @return string|null file extension or null if no file extension has been set
     */
    public function getFileExtension() : ?string 
    {
        if ( ! $this->hasFileExtension()) {
            $this->setFileExtension($this->getDefaultFileExtension());
        }
        return $this->fileExtension;
    }

    /**
     * Check if "file extension" has been set
     *
     * @return bool True if "file extension" has been set, false if not
     */
    public function hasFileExtension() : bool
    {
        return isset($this->fileExtension);
    }

    /**
     * Get a default "file extension" value, if any is available
     *
     * @return string|null Default "file extension" value or null if no default value is available
     */
    public function getDefaultFileExtension() : ?string
    {
        return null;
    }
}