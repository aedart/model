<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Slug Aware</h1>
 *
 * Component is aware of a string "slug" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SlugAware
{
    /**
     * Set slug
     *
     * @param string $slug Human readable keyword(s) that can be part or a Url
     *
     * @return void
     */
    public function setSlug($slug);

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
    public function getSlug();

    /**
     * Get a default "slug" value, if any is available
     *
     * @return string|null A default "slug" value or null if no default value is available
     */
    public function getDefaultSlug();

    /**
     * Check if "slug" has been set
     *
     * @return bool True if "slug" value has been set, false if not
     */
    public function hasSlug();

    /**
     * Check if a default "slug" is available or not
     *
     * @return bool True of a default "slug" value is available, false if not
     */
    public function hasDefaultSlug();
}