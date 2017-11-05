<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Path Aware</h1>
 *
 * Component is aware of a string "path" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PathAware
{
    /**
     * Set path
     *
     * @param string|null $location Location of some kind of a resources, e.g. a file, an Url, an index
     *
     * @return self
     */
    public function setPath(?string $location);

    /**
     * Get path
     *
     * If no "path" value has been set, this method will
     * set and return a default "path" value,
     * if any such value is available
     *
     * @see getDefaultPath()
     *
     * @return string|null path or null if no path has been set
     */
    public function getPath() : ?string ;

    /**
     * Check if "path" has been set
     *
     * @return bool True if "path" has been set, false if not
     */
    public function hasPath() : bool;

    /**
     * Get a default "path" value, if any is available
     *
     * @return string|null Default "path" value or null if no default value is available
     */
    public function getDefaultPath() : ?string;
}