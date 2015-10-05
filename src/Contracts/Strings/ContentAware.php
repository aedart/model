<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Content Aware</h1>
 *
 * Components implementing this interface are aware of some content.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface ContentAware {

    /**
     * Set the given content
     *
     * @param string $content Content
     *
     * @return void
     */
    public function setContent($content);

    /**
     * Get the given content
     *
     * If no content has been set, this method will
     * set and return a default content, if any such
     * value is available
     *
     * @see getDefaultContent()
     *
     * @return string|null content or null if none content has been set
     */
    public function getContent();

    /**
     * Get a default content value, if any is available
     *
     * @return string|null A default content value or Null if no default value is available
     */
    public function getDefaultContent();

    /**
     * Check if content has been set
     *
     * @return bool True if content has been set, false if not
     */
    public function hasContent();

    /**
     * Check if a default content is available or not
     *
     * @return bool True of a default content is available, false if not
     */
    public function hasDefaultContent();
}