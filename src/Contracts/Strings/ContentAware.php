<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Content Aware</h1>
 *
 * Component is aware of a string "content" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ContentAware
{
    /**
     * Set content
     *
     * @param string $content Content
     *
     * @return void
     */
    public function setContent($content);

    /**
     * Get content
     *
     * If no "content" value has been set, this method will
     * set and return a default "content" value,
     * if any such value is available
     *
     * @see getDefaultContent()
     *
     * @return string|null "content" value or null if no "content" value has been set
     */
    public function getContent();

    /**
     * Get a default "content" value, if any is available
     *
     * @return string|null A default "content" value or null if no default value is available
     */
    public function getDefaultContent();

    /**
     * Check if "content" has been set
     *
     * @return bool True if "content" value has been set, false if not
     */
    public function hasContent();

    /**
     * Check if a default "content" is available or not
     *
     * @return bool True of a default "content" value is available, false if not
     */
    public function hasDefaultContent();
}