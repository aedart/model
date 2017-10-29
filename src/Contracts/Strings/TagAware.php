<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $name Name of tag
     *
     * @return self
     */
    public function setTag(?string $name);

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
    public function getTag() : ?string ;

    /**
     * Check if "tag" has been set
     *
     * @return bool True if "tag" has been set, false if not
     */
    public function hasTag() : bool;

    /**
     * Get a default "tag" value, if any is available
     *
     * @return string|null Default "tag" value or null if no default value is available
     */
    public function getDefaultTag() : ?string;
}