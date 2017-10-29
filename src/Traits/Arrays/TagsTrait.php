<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Arrays;

/**
 * <h1>Tags Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Arrays\TagsAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
trait TagsTrait
{
    /**
     * List of tags
     *
     * @var array|null
     */
    protected $tags = null;

    /**
     * Set tags
     *
     * @param array|null $tags List of tags
     *
     * @return self
     */
    public function setTags(?array $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * If no "tags" value has been set, this method will
     * set and return a default "tags" value,
     * if any such value is available
     *
     * @see getDefaultTags()
     *
     * @return array|null tags or null if no tags has been set
     */
    public function getTags() : ?array 
    {
        if ( ! $this->hasTags()) {
            $this->setTags($this->getDefaultTags());
        }
        return $this->tags;
    }

    /**
     * Check if "tags" has been set
     *
     * @return bool True if "tags" has been set, false if not
     */
    public function hasTags() : bool
    {
        return isset($this->tags);
    }

    /**
     * Get a default "tags" value, if any is available
     *
     * @return array|null Default "tags" value or null if no default value is available
     */
    public function getDefaultTags() : ?array
    {
        return null;
    }
}