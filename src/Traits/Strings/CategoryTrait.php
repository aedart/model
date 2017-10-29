<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Name of category
     *
     * @var string|null
     */
    protected $category = null;

    /**
     * Set category
     *
     * @param string|null $name Name of category
     *
     * @return self
     */
    public function setCategory(?string $name)
    {
        $this->category = $name;

        return $this;
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
     * @return string|null category or null if no category has been set
     */
    public function getCategory() : ?string 
    {
        if ( ! $this->hasCategory()) {
            $this->setCategory($this->getDefaultCategory());
        }
        return $this->category;
    }

    /**
     * Check if "category" has been set
     *
     * @return bool True if "category" has been set, false if not
     */
    public function hasCategory() : bool
    {
        return isset($this->category);
    }

    /**
     * Get a default "category" value, if any is available
     *
     * @return string|null Default "category" value or null if no default value is available
     */
    public function getDefaultCategory() : ?string
    {
        return null;
    }
}