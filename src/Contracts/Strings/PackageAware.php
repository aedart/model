<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Package Aware</h1>
 *
 * Component is aware of a string "package" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PackageAware
{
    /**
     * Set package
     *
     * @param string $name Name of a package
     *
     * @return void
     */
    public function setPackage($name);

    /**
     * Get package
     *
     * If no "package" value has been set, this method will
     * set and return a default "package" value,
     * if any such value is available
     *
     * @see getDefaultPackage()
     *
     * @return string|null "package" value or null if no "package" value has been set
     */
    public function getPackage();

    /**
     * Get a default "package" value, if any is available
     *
     * @return string|null A default "package" value or null if no default value is available
     */
    public function getDefaultPackage();

    /**
     * Check if "package" has been set
     *
     * @return bool True if "package" value has been set, false if not
     */
    public function hasPackage();

    /**
     * Check if a default "package" is available or not
     *
     * @return bool True of a default "package" value is available, false if not
     */
    public function hasDefaultPackage();
}