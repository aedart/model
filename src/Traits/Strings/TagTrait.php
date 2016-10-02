<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Tag Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TagAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TagTrait
{
    /**
     * Name of a tag
     *
     * @var string|null
     */
    protected $tag = null;

    /**
     * Set tag
     *
     * @param string $name Name of a tag
     *
     * @return void
     */
    public function setTag($name)
    {
        $this->tag = (string) $name;
    }

    /**
     * Get tag
     *
     * If no "tag" value has been set, this method will
     * set and return a default "tag" value,
     * if any such value is available
     *
     * @see getDefaultTag()
     *
     * @return string|null "tag" value or null if no "tag" value has been set
     */
    public function getTag()
    {
        if (!$this->hasTag() && $this->hasDefaultTag()) {
            $this->setTag($this->getDefaultTag());
        }
        return $this->tag;
    }

    /**
     * Get a default "tag" value, if any is available
     *
     * @return string|null A default "tag" value or null if no default value is available
     */
    public function getDefaultTag()
    {
        return null;
    }

    /**
     * Check if "tag" has been set
     *
     * @return bool True if "tag" value has been set, false if not
     */
    public function hasTag()
    {
        return isset($this->tag);
    }

    /**
     * Check if a default "tag" is available or not
     *
     * @return bool True of a default "tag" value is available, false if not
     */
    public function hasDefaultTag()
    {
        $default = $this->getDefaultTag();
        return isset($default);
    }
}