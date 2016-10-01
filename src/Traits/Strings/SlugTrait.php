<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $slug Human readable keyword(s) that can be part or a Url
     *
     * @return void
     */
    public function setSlug($slug)
    {
        $this->slug = (string) $slug;
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
     * @return string|null "slug" value or null if no "slug" value has been set
     */
    public function getSlug()
    {
        if (!$this->hasSlug() && $this->hasDefaultSlug()) {
            $this->setSlug($this->getDefaultSlug());
        }
        return $this->slug;
    }

    /**
     * Get a default "slug" value, if any is available
     *
     * @return string|null A default "slug" value or null if no default value is available
     */
    public function getDefaultSlug()
    {
        return null;
    }

    /**
     * Check if "slug" has been set
     *
     * @return bool True if "slug" value has been set, false if not
     */
    public function hasSlug()
    {
        return isset($this->slug);
    }

    /**
     * Check if a default "slug" is available or not
     *
     * @return bool True of a default "slug" value is available, false if not
     */
    public function hasDefaultSlug()
    {
        $default = $this->getDefaultSlug();
        return isset($default);
    }
}