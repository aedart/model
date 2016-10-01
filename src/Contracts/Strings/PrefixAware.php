<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Prefix Aware</h1>
 *
 * Component is aware of a string "prefix" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PrefixAware
{
    /**
     * Set prefix
     *
     * @param string $affix Affix that is placed before something
     *
     * @return void
     */
    public function setPrefix($affix);

    /**
     * Get prefix
     *
     * If no "prefix" value has been set, this method will
     * set and return a default "prefix" value,
     * if any such value is available
     *
     * @see getDefaultPrefix()
     *
     * @return string|null "prefix" value or null if no "prefix" value has been set
     */
    public function getPrefix();

    /**
     * Get a default "prefix" value, if any is available
     *
     * @return string|null A default "prefix" value or null if no default value is available
     */
    public function getDefaultPrefix();

    /**
     * Check if "prefix" has been set
     *
     * @return bool True if "prefix" value has been set, false if not
     */
    public function hasPrefix();

    /**
     * Check if a default "prefix" is available or not
     *
     * @return bool True of a default "prefix" value is available, false if not
     */
    public function hasDefaultPrefix();
}