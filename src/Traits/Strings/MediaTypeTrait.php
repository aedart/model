<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $type Media Type (also known as MIME Type), acc. to IANA standard, or perhaps a type name
     *
     * @return self
     */
    public function setMediaType(?string $type)
    {
        $this->mediaType = $type;

        return $this;
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
     * @return string|null media type or null if no media type has been set
     */
    public function getMediaType() : ?string 
    {
        if ( ! $this->hasMediaType()) {
            $this->setMediaType($this->getDefaultMediaType());
        }
        return $this->mediaType;
    }

    /**
     * Check if "media type" has been set
     *
     * @return bool True if "media type" has been set, false if not
     */
    public function hasMediaType() : bool
    {
        return isset($this->mediaType);
    }

    /**
     * Get a default "media type" value, if any is available
     *
     * @return string|null Default "media type" value or null if no default value is available
     */
    public function getDefaultMediaType() : ?string
    {
        return null;
    }
}