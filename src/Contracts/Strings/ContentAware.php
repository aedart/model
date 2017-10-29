<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $content Content
     *
     * @return self
     */
    public function setContent(?string $content);

    /**
     * Get content
     *
     * If no "content" value has been set, this method will
     * set and return a default "content" value,
     * if any such value is available
     *
     * @see getDefaultContent()
     *
     * @return string|null content or null if no content has been set
     */
    public function getContent() : ?string ;

    /**
     * Check if "content" has been set
     *
     * @return bool True if "content" has been set, false if not
     */
    public function hasContent() : bool;

    /**
     * Get a default "content" value, if any is available
     *
     * @return string|null Default "content" value or null if no default value is available
     */
    public function getDefaultContent() : ?string;
}