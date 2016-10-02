<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Media Type Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\MediaTypeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait MediaTypeTrait
{
    /**
     * Media Type (also known as MIME Type), acc. to IANA standard, or perhaps a type name
     *
     * @var string|null
     */
    protected $mediaType = null;

    /**
     * Set media type
     *
     * @param string $type Media Type (also known as MIME Type), acc. to IANA standard, or perhaps a type name
     *
     * @return void
     */
    public function setMediaType($type)
    {
        $this->mediaType = (string) $type;
    }

    /**
     * Get media type
     *
     * If no "media type" value has been set, this method will
     * set and return a default "media type" value,
     * if any such value is available
     *
     * @see getDefaultMediaType()
     *
     * @return string|null "media type" value or null if no "media type" value has been set
     */
    public function getMediaType()
    {
        if (!$this->hasMediaType() && $this->hasDefaultMediaType()) {
            $this->setMediaType($this->getDefaultMediaType());
        }
        return $this->mediaType;
    }

    /**
     * Get a default "media type" value, if any is available
     *
     * @return string|null A default "media type" value or null if no default value is available
     */
    public function getDefaultMediaType()
    {
        return null;
    }

    /**
     * Check if "media type" has been set
     *
     * @return bool True if "media type" value has been set, false if not
     */
    public function hasMediaType()
    {
        return isset($this->mediaType);
    }

    /**
     * Check if a default "media type" is available or not
     *
     * @return bool True of a default "media type" value is available, false if not
     */
    public function hasDefaultMediaType()
    {
        $default = $this->getDefaultMediaType();
        return isset($default);
    }
}