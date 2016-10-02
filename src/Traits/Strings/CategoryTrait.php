<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Category Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CategoryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CategoryTrait
{
    /**
     * Name of a category
     *
     * @var string|null
     */
    protected $category = null;

    /**
     * Set category
     *
     * @param string $name Name of a category
     *
     * @return void
     */
    public function setCategory($name)
    {
        $this->category = (string) $name;
    }

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
    public function getCategory()
    {
        if (!$this->hasCategory() && $this->hasDefaultCategory()) {
            $this->setCategory($this->getDefaultCategory());
        }
        return $this->category;
    }

    /**
     * Get a default "category" value, if any is available
     *
     * @return string|null A default "category" value or null if no default value is available
     */
    public function getDefaultCategory()
    {
        return null;
    }

    /**
     * Check if "category" has been set
     *
     * @return bool True if "category" value has been set, false if not
     */
    public function hasCategory()
    {
        return isset($this->category);
    }

    /**
     * Check if a default "category" is available or not
     *
     * @return bool True of a default "category" value is available, false if not
     */
    public function hasDefaultCategory()
    {
        $default = $this->getDefaultCategory();
        return isset($default);
    }
}