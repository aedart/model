<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Index Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IndexAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IndexTrait
{
    /**
     * Index
     *
     * @var string|null
     */
    protected $index = null;

    /**
     * Set index
     *
     * @param string|null $index Index
     *
     * @return self
     */
    public function setIndex(?string $index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Get index
     *
     * If no "index" value has been set, this method will
     * set and return a default "index" value,
     * if any such value is available
     *
     * @see getDefaultIndex()
     *
     * @return string|null index or null if no index has been set
     */
    public function getIndex() : ?string 
    {
        if ( ! $this->hasIndex()) {
            $this->setIndex($this->getDefaultIndex());
        }
        return $this->index;
    }

    /**
     * Check if "index" has been set
     *
     * @return bool True if "index" has been set, false if not
     */
    public function hasIndex() : bool
    {
        return isset($this->index);
    }

    /**
     * Get a default "index" value, if any is available
     *
     * @return string|null Default "index" value or null if no default value is available
     */
    public function getDefaultIndex() : ?string
    {
        return null;
    }
}