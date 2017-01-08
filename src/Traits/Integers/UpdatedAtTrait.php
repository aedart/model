<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Updated At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\UpdatedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait UpdatedAtTrait
{
    /**
     * Date (UNIX timestamp) of when this component, entity or resource was updated
     *
     * @var int|null
     */
    protected $updatedAt = null;

    /**
     * Set updated at
     *
     * @param int $date Date (UNIX timestamp) of when this component, entity or resource was updated
     *
     * @return void
     */
    public function setUpdatedAt($date)
    {
        $this->updatedAt = (int) $date;
    }

    /**
     * Get updated at
     *
     * If no "updated at" value has been set, this method will
     * set and return a default "updated at" value,
     * if any such value is available
     *
     * @see getDefaultUpdatedAt()
     *
     * @return int|null "updated at" value or null if no "updated at" value has been set
     */
    public function getUpdatedAt()
    {
        if (!$this->hasUpdatedAt() && $this->hasDefaultUpdatedAt()) {
            $this->setUpdatedAt($this->getDefaultUpdatedAt());
        }
        return $this->updatedAt;
    }

    /**
     * Get a default "updated at" value, if any is available
     *
     * @return int|null A default "updated at" value or null if no default value is available
     */
    public function getDefaultUpdatedAt()
    {
        return null;
    }

    /**
     * Check if "updated at" has been set
     *
     * @return bool True if "updated at" value has been set, false if not
     */
    public function hasUpdatedAt()
    {
        return isset($this->updatedAt);
    }

    /**
     * Check if a default "updated at" is available or not
     *
     * @return bool True of a default "updated at" value is available, false if not
     */
    public function hasDefaultUpdatedAt()
    {
        $default = $this->getDefaultUpdatedAt();
        return isset($default);
    }
}