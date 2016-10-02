<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Media Type Aware</h1>
 *
 * Component is aware of a string "media type" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface MediaTypeAware
{
    /**
     * Set media type
     *
     * @param string $type Media Type (also known as MIME Type), acc. to IANA standard, or perhaps a type name
     *
     * @return void
     */
    public function setMediaType($type);

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
    public function getMediaType();

    /**
     * Get a default "media type" value, if any is available
     *
     * @return string|null A default "media type" value or null if no default value is available
     */
    public function getDefaultMediaType();

    /**
     * Check if "media type" has been set
     *
     * @return bool True if "media type" value has been set, false if not
     */
    public function hasMediaType();

    /**
     * Check if a default "media type" is available or not
     *
     * @return bool True of a default "media type" value is available, false if not
     */
    public function hasDefaultMediaType();
}