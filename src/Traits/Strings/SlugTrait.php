<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Slug Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\SlugAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait SlugTrait {

    /**
     * Slug
     *
     * @var string|null
     */
    protected $slug = null;

    /**
     * Set the given slug
     *
     * @param string $slug Slug
     *
     * @return void
     */
    public function setSlug($slug) {
        $this->slug = (string) $slug;
    }

    /**
     * Get the given slug
     *
     * If no slug has been set, this method will
     * set and return a default slug, if any such
     * value is available
     *
     * @see getDefaultSlug()
     *
     * @return string|null slug or null if none slug has been set
     */
    public function getSlug() {
        if (!$this->hasSlug() && $this->hasDefaultSlug()) {
            $this->setSlug($this->getDefaultSlug());
        }
        return $this->slug;
    }

    /**
     * Get a default slug value, if any is available
     *
     * @return string|null A default slug value or Null if no default value is available
     */
    public function getDefaultSlug() {
        return null;
    }

    /**
     * Check if slug has been set
     *
     * @return bool True if slug has been set, false if not
     */
    public function hasSlug() {
        if (!is_null($this->slug)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default slug is available or not
     *
     * @return bool True of a default slug is available, false if not
     */
    public function hasDefaultSlug() {
        if (!is_null($this->getDefaultSlug())) {
            return true;
        }
        return false;
    }
}