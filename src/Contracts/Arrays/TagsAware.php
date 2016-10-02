<?php namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Tags Aware</h1>
 *
 * Component is aware of a string[] "tags" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface TagsAware
{
    /**
     * Set tags
     *
     * @param string[] $list List of tag names
     *
     * @return void
     */
    public function setTags(array $list);

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
    public function getTags();

    /**
     * Get a default "tags" value, if any is available
     *
     * @return string[]|null A default "tags" value or null if no default value is available
     */
    public function getDefaultTags();

    /**
     * Check if "tags" has been set
     *
     * @return bool True if "tags" value has been set, false if not
     */
    public function hasTags();

    /**
     * Check if a default "tags" is available or not
     *
     * @return bool True of a default "tags" value is available, false if not
     */
    public function hasDefaultTags();
}