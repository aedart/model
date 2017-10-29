<?php

namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Categories Aware</h1>
 *
 * Component is aware of a array "categories" value, which can
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
     * @param array|null $list List of category names
     *
     * @return self
     */
    public function setCategories(?array $list);

    /**
     * Get categories
     *
     * If no "categories" value has been set, this method will
     * set and return a default "categories" value,
     * if any such value is available
     *
     * @see getDefaultCategories()
     *
     * @return array|null categories or null if no categories has been set
     */
    public function getCategories() : ?array ;

    /**
     * Check if "categories" has been set
     *
     * @return bool True if "categories" has been set, false if not
     */
    public function hasCategories() : bool;

    /**
     * Get a default "categories" value, if any is available
     *
     * @return array|null Default "categories" value or null if no default value is available
     */
    public function getDefaultCategories() : ?array;
}