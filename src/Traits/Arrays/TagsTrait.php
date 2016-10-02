<?php namespace Aedart\Model\Traits\Arrays;

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
     * List of tag names
     *
     * @var string[]|null
     */
    protected $tags = null;

    /**
     * Set tags
     *
     * @param string[] $list List of tag names
     *
     * @return void
     */
    public function setTags(array $list)
    {
        $this->tags = $list;
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
     * @return string[]|null "tags" value or null if no "tags" value has been set
     */
    public function getTags()
    {
        if (!$this->hasTags() && $this->hasDefaultTags()) {
            $this->setTags($this->getDefaultTags());
        }
        return $this->tags;
    }

    /**
     * Get a default "tags" value, if any is available
     *
     * @return string[]|null A default "tags" value or null if no default value is available
     */
    public function getDefaultTags()
    {
        return null;
    }

    /**
     * Check if "tags" has been set
     *
     * @return bool True if "tags" value has been set, false if not
     */
    public function hasTags()
    {
        return isset($this->tags);
    }

    /**
     * Check if a default "tags" is available or not
     *
     * @return bool True of a default "tags" value is available, false if not
     */
    public function hasDefaultTags()
    {
        $default = $this->getDefaultTags();
        return isset($default);
    }
}