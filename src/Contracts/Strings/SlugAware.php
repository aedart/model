<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Slug Aware</h1>
 *
 * Components implementing this interface are aware of string slug;
 * "human-readable keywords, which are part of the url" (wiki)
 *
 * @see https://en.wikipedia.org/wiki/Semantic_URL#Slug
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface SlugAware {

    /**
     * Set the given slug
     *
     * @param string $slug Slug
     *
     * @return void
     */
    public function setSlug($slug);

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
    public function getSlug();

    /**
     * Get a default slug value, if any is available
     *
     * @return string|null A default slug value or Null if no default value is available
     */
    public function getDefaultSlug();

    /**
     * Check if slug has been set
     *
     * @return bool True if slug has been set, false if not
     */
    public function hasSlug();

    /**
     * Check if a default slug is available or not
     *
     * @return bool True of a default slug is available, false if not
     */
    public function hasDefaultSlug();
}