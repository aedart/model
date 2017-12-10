<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Comment Aware</h1>
 *
 * Component is aware of a string "comment" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CommentAware
{
    /**
     * Set comment
     *
     * @param string|null $content A comment
     *
     * @return self
     */
    public function setComment(?string $content);

    /**
     * Get comment
     *
     * If no "comment" value has been set, this method will
     * set and return a default "comment" value,
     * if any such value is available
     *
     * @see getDefaultComment()
     *
     * @return string|null comment or null if no comment has been set
     */
    public function getComment() : ?string ;

    /**
     * Check if "comment" has been set
     *
     * @return bool True if "comment" has been set, false if not
     */
    public function hasComment() : bool;

    /**
     * Get a default "comment" value, if any is available
     *
     * @return string|null Default "comment" value or null if no default value is available
     */
    public function getDefaultComment() : ?string;
}