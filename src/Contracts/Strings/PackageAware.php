<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Package Aware</h1>
 *
 * Component is able to set and get a package name
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface PackageAware
{
    /**
     * Set the given package
     *
     * @param string $name Name of a package
     *
     * @return void
     */
    public function setPackage($name);

    /**
     * Get the given package
     *
     * If no package has been set, this method will
     * set and return a default package, if any such
     * value is available
     *
     * @see getDefaultPackage()
     *
     * @return string|null package or null if none package has been set
     */
    public function getPackage();

    /**
     * Get a default package value, if any is available
     *
     * @return string|null A default package value or Null if no default value is available
     */
    public function getDefaultPackage();

    /**
     * Check if package has been set
     *
     * @return bool True if package has been set, false if not
     */
    public function hasPackage();

    /**
     * Check if a default package is available or not
     *
     * @return bool True of a default package is available, false if not
     */
    public function hasDefaultPackage();
}