<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Suffix Aware</h1>
 *
 * Component is aware of a string "suffix" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SuffixAware
{
    /**
     * Set suffix
     *
     * @param string $affix Affix that is placed after something
     *
     * @return void
     */
    public function setSuffix($affix);

    /**
     * Get suffix
     *
     * If no "suffix" value has been set, this method will
     * set and return a default "suffix" value,
     * if any such value is available
     *
     * @see getDefaultSuffix()
     *
     * @return string|null "suffix" value or null if no "suffix" value has been set
     */
    public function getSuffix();

    /**
     * Get a default "suffix" value, if any is available
     *
     * @return string|null A default "suffix" value or null if no default value is available
     */
    public function getDefaultSuffix();

    /**
     * Check if "suffix" has been set
     *
     * @return bool True if "suffix" value has been set, false if not
     */
    public function hasSuffix();

    /**
     * Check if a default "suffix" is available or not
     *
     * @return bool True of a default "suffix" value is available, false if not
     */
    public function hasDefaultSuffix();
}