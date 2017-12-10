<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Comment Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CommentAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CommentTrait
{
    /**
     * A comment
     *
     * @var string|null
     */
    protected $comment = null;

    /**
     * Set comment
     *
     * @param string|null $content A comment
     *
     * @return self
     */
    public function setComment(?string $content)
    {
        $this->comment = $content;

        return $this;
    }

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
    public function getComment() : ?string 
    {
        if ( ! $this->hasComment()) {
            $this->setComment($this->getDefaultComment());
        }
        return $this->comment;
    }

    /**
     * Check if "comment" has been set
     *
     * @return bool True if "comment" has been set, false if not
     */
    public function hasComment() : bool
    {
        return isset($this->comment);
    }

    /**
     * Get a default "comment" value, if any is available
     *
     * @return string|null Default "comment" value or null if no default value is available
     */
    public function getDefaultComment() : ?string
    {
        return null;
    }
}