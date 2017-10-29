<?php

namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Tags Aware</h1>
 *
 * Component is aware of a array "tags" value, which can
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
     * @param array|null $tags List of tags
     *
     * @return self
     */
    public function setTags(?array $tags);

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
    public function getTags() : ?array ;

    /**
     * Check if "tags" has been set
     *
     * @return bool True if "tags" has been set, false if not
     */
    public function hasTags() : bool;

    /**
     * Get a default "tags" value, if any is available
     *
     * @return array|null Default "tags" value or null if no default value is available
     */
    public function getDefaultTags() : ?array;
}