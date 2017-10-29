<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Arrays;

/**
 * <h1>Categories Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Arrays\CategoriesAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
trait CategoriesTrait
{
    /**
     * List of category names
     *
     * @var array|null
     */
    protected $categories = null;

    /**
     * Set categories
     *
     * @param array|null $list List of category names
     *
     * @return self
     */
    public function setCategories(?array $list)
    {
        $this->categories = $list;

        return $this;
    }

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
    public function getCategories() : ?array 
    {
        if ( ! $this->hasCategories()) {
            $this->setCategories($this->getDefaultCategories());
        }
        return $this->categories;
    }

    /**
     * Check if "categories" has been set
     *
     * @return bool True if "categories" has been set, false if not
     */
    public function hasCategories() : bool
    {
        return isset($this->categories);
    }

    /**
     * Get a default "categories" value, if any is available
     *
     * @return array|null Default "categories" value or null if no default value is available
     */
    public function getDefaultCategories() : ?array
    {
        return null;
    }
}