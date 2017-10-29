<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Slug Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\SlugAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait SlugTrait
{
    /**
     * Human readable keyword(s) that can be part or a Url
     *
     * @var string|null
     */
    protected $slug = null;

    /**
     * Set slug
     *
     * @param string|null $slug Human readable keyword(s) that can be part or a Url
     *
     * @return self
     */
    public function setSlug(?string $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * If no "slug" value has been set, this method will
     * set and return a default "slug" value,
     * if any such value is available
     *
     * @see getDefaultSlug()
     *
     * @return string|null slug or null if no slug has been set
     */
    public function getSlug() : ?string 
    {
        if ( ! $this->hasSlug()) {
            $this->setSlug($this->getDefaultSlug());
        }
        return $this->slug;
    }

    /**
     * Check if "slug" has been set
     *
     * @return bool True if "slug" has been set, false if not
     */
    public function hasSlug() : bool
    {
        return isset($this->slug);
    }

    /**
     * Get a default "slug" value, if any is available
     *
     * @return string|null Default "slug" value or null if no default value is available
     */
    public function getDefaultSlug() : ?string
    {
        return null;
    }
}