<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Name of tag
     *
     * @var string|null
     */
    protected $tag = null;

    /**
     * Set tag
     *
     * @param string|null $name Name of tag
     *
     * @return self
     */
    public function setTag(?string $name)
    {
        $this->tag = $name;

        return $this;
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
     * @return string|null tag or null if no tag has been set
     */
    public function getTag() : ?string 
    {
        if ( ! $this->hasTag()) {
            $this->setTag($this->getDefaultTag());
        }
        return $this->tag;
    }

    /**
     * Check if "tag" has been set
     *
     * @return bool True if "tag" has been set, false if not
     */
    public function hasTag() : bool
    {
        return isset($this->tag);
    }

    /**
     * Get a default "tag" value, if any is available
     *
     * @return string|null Default "tag" value or null if no default value is available
     */
    public function getDefaultTag() : ?string
    {
        return null;
    }
}