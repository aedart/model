<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Index Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\IndexAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait IndexTrait
{
    /**
     * An index
     *
     * @var int|null
     */
    protected $index = null;

    /**
     * Set index
     *
     * @param int $index An index
     *
     * @return void
     */
    public function setIndex($index)
    {
        $this->index = (int) $index;
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
     * @return int|null "index" value or null if no "index" value has been set
     */
    public function getIndex()
    {
        if (!$this->hasIndex() && $this->hasDefaultIndex()) {
            $this->setIndex($this->getDefaultIndex());
        }
        return $this->index;
    }

    /**
     * Get a default "index" value, if any is available
     *
     * @return int|null A default "index" value or null if no default value is available
     */
    public function getDefaultIndex()
    {
        return null;
    }

    /**
     * Check if "index" has been set
     *
     * @return bool True if "index" value has been set, false if not
     */
    public function hasIndex()
    {
        return isset($this->index);
    }

    /**
     * Check if a default "index" is available or not
     *
     * @return bool True of a default "index" value is available, false if not
     */
    public function hasDefaultIndex()
    {
        $default = $this->getDefaultIndex();
        return isset($default);
    }
}