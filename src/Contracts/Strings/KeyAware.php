<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Key Aware</h1>
 *
 * Component is aware of a string "key" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface KeyAware
{
    /**
     * Set key
     *
     * @param string $key A key, e.g. indexing key, encryption key or other type of key
     *
     * @return void
     */
    public function setKey($key);

    /**
     * Get key
     *
     * If no "key" value has been set, this method will
     * set and return a default "key" value,
     * if any such value is available
     *
     * @see getDefaultKey()
     *
     * @return string|null "key" value or null if no "key" value has been set
     */
    public function getKey();

    /**
     * Get a default "key" value, if any is available
     *
     * @return string|null A default "key" value or null if no default value is available
     */
    public function getDefaultKey();

    /**
     * Check if "key" has been set
     *
     * @return bool True if "key" value has been set, false if not
     */
    public function hasKey();

    /**
     * Check if a default "key" is available or not
     *
     * @return bool True of a default "key" value is available, false if not
     */
    public function hasDefaultKey();
}