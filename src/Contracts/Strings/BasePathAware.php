<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $path The path to the root directory of some kind of a resource, e.g. your application, files, pictures,...etc
     *
     * @return void
     */
    public function setBasePath($path);

    /**
     * Get base path
     *
     * If no "base path" value has been set, this method will
     * set and return a default "base path" value,
     * if any such value is available
     *
     * @see getDefaultBasePath()
     *
     * @return string|null "base path" value or null if no "base path" value has been set
     */
    public function getBasePath();

    /**
     * Get a default "base path" value, if any is available
     *
     * @return string|null A default "base path" value or null if no default value is available
     */
    public function getDefaultBasePath();

    /**
     * Check if "base path" has been set
     *
     * @return bool True if "base path" value has been set, false if not
     */
    public function hasBasePath();

    /**
     * Check if a default "base path" is available or not
     *
     * @return bool True of a default "base path" value is available, false if not
     */
    public function hasDefaultBasePath();
}