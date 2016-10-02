<?php namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Categories Aware</h1>
 *
 * Component is aware of a string[] "categories" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface CategoriesAware
{
    /**
     * Set categories
     *
     * @param string[] $list List of category names
     *
     * @return void
     */
    public function setCategories(array $list);

    /**
     * Get categories
     *
     * If no "categories" value has been set, this method will
     * set and return a default "categories" value,
     * if any such value is available
     *
     * @see getDefaultCategories()
     *
     * @return string[]|null "categories" value or null if no "categories" value has been set
     */
    public function getCategories();

    /**
     * Get a default "categories" value, if any is available
     *
     * @return string[]|null A default "categories" value or null if no default value is available
     */
    public function getDefaultCategories();

    /**
     * Check if "categories" has been set
     *
     * @return bool True if "categories" value has been set, false if not
     */
    public function hasCategories();

    /**
     * Check if a default "categories" is available or not
     *
     * @return bool True of a default "categories" value is available, false if not
     */
    public function hasDefaultCategories();
}