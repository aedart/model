<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Category Aware</h1>
 *
 * Component is aware of a string "category" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CategoryAware
{
    /**
     * Set category
     *
     * @param string $name Name of a category
     *
     * @return void
     */
    public function setCategory($name);

    /**
     * Get category
     *
     * If no "category" value has been set, this method will
     * set and return a default "category" value,
     * if any such value is available
     *
     * @see getDefaultCategory()
     *
     * @return string|null "category" value or null if no "category" value has been set
     */
    public function getCategory();

    /**
     * Get a default "category" value, if any is available
     *
     * @return string|null A default "category" value or null if no default value is available
     */
    public function getDefaultCategory();

    /**
     * Check if "category" has been set
     *
     * @return bool True if "category" value has been set, false if not
     */
    public function hasCategory();

    /**
     * Check if a default "category" is available or not
     *
     * @return bool True of a default "category" value is available, false if not
     */
    public function hasDefaultCategory();
}