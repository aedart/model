<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Base Path Aware</h1>
 *
 * Components are aware of some kind of a "root" directory path. This could be
 * for your application, pictures, documents, or whatever top-level path might
 * be the case, in your given context.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface BasePathAware {

    /**
     * Set the given base path
     *
     * @param string $path Base Path - The path to the "root" directory of some kind of a resource, e.g. your application, files, pictures, etc.
     *
     * @return void
     */
    public function setBasePath($path);

    /**
     * Get the given base path
     *
     * If no base path has been set, this method will
     * set and return a default base path, if any such
     * value is available
     *
     * @see getDefaultBasePath()
     *
     * @return string|null base path or null if none base path has been set
     */
    public function getBasePath();

    /**
     * Get a default base path value, if any is available
     *
     * @return string|null A default base path value or Null if no default value is available
     */
    public function getDefaultBasePath();

    /**
     * Check if base path has been set
     *
     * @return bool True if base path has been set, false if not
     */
    public function hasBasePath();

    /**
     * Check if a default base path is available or not
     *
     * @return bool True of a default base path is available, false if not
     */
    public function hasDefaultBasePath();
}