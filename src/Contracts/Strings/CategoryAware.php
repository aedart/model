<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $name Name of category
     *
     * @return self
     */
    public function setCategory(?string $name);

    /**
     * Get category
     *
     * If no "category" value has been set, this method will
     * set and return a default "category" value,
     * if any such value is available
     *
     * @see getDefaultCategory()
     *
     * @return string|null category or null if no category has been set
     */
    public function getCategory() : ?string ;

    /**
     * Check if "category" has been set
     *
     * @return bool True if "category" has been set, false if not
     */
    public function hasCategory() : bool;

    /**
     * Get a default "category" value, if any is available
     *
     * @return string|null Default "category" value or null if no default value is available
     */
    public function getDefaultCategory() : ?string;
}