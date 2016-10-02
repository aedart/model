<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Tag Aware</h1>
 *
 * Component is aware of a string "tag" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TagAware
{
    /**
     * Set tag
     *
     * @param string $name Name of a tag
     *
     * @return void
     */
    public function setTag($name);

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
    public function getTag();

    /**
     * Get a default "tag" value, if any is available
     *
     * @return string|null A default "tag" value or null if no default value is available
     */
    public function getDefaultTag();

    /**
     * Check if "tag" has been set
     *
     * @return bool True if "tag" value has been set, false if not
     */
    public function hasTag();

    /**
     * Check if a default "tag" is available or not
     *
     * @return bool True of a default "tag" value is available, false if not
     */
    public function hasDefaultTag();
}