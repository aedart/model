<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Base Path Aware</h1>
 *
 * Component is aware of a string "base path" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface BasePathAware
{
    /**
     * Set base path
     *
     * @param string|null $path The path to the root directory of some kind of a resource, e.g. your application, files, pictures,...etc
     *
     * @return self
     */
    public function setBasePath(?string $path);

    /**
     * Get base path
     *
     * If no "base path" value has been set, this method will
     * set and return a default "base path" value,
     * if any such value is available
     *
     * @see getDefaultBasePath()
     *
     * @return string|null base path or null if no base path has been set
     */
    public function getBasePath() : ?string ;

    /**
     * Check if "base path" has been set
     *
     * @return bool True if "base path" has been set, false if not
     */
    public function hasBasePath() : bool;

    /**
     * Get a default "base path" value, if any is available
     *
     * @return string|null Default "base path" value or null if no default value is available
     */
    public function getDefaultBasePath() : ?string;
}