<?php namespace Aedart\Model\Traits\Arrays;

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
     * @var string[]|null
     */
    protected $categories = null;

    /**
     * Set categories
     *
     * @param string[] $list List of category names
     *
     * @return void
     */
    public function setCategories(array $list)
    {
        $this->categories = $list;
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
     * @return string[]|null "categories" value or null if no "categories" value has been set
     */
    public function getCategories()
    {
        if (!$this->hasCategories() && $this->hasDefaultCategories()) {
            $this->setCategories($this->getDefaultCategories());
        }
        return $this->categories;
    }

    /**
     * Get a default "categories" value, if any is available
     *
     * @return string[]|null A default "categories" value or null if no default value is available
     */
    public function getDefaultCategories()
    {
        return null;
    }

    /**
     * Check if "categories" has been set
     *
     * @return bool True if "categories" value has been set, false if not
     */
    public function hasCategories()
    {
        return isset($this->categories);
    }

    /**
     * Check if a default "categories" is available or not
     *
     * @return bool True of a default "categories" value is available, false if not
     */
    public function hasDefaultCategories()
    {
        $default = $this->getDefaultCategories();
        return isset($default);
    }
}