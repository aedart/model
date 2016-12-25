<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Created At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\CreatedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait CreatedAtTrait
{
    /**
     * Date (UNIX timestamp) of when this component, entity or resource was created
     *
     * @var int|null
     */
    protected $createdAt = null;

    /**
     * Set created at
     *
     * @param int $date Date (UNIX timestamp) of when this component, entity or resource was created
     *
     * @return void
     */
    public function setCreatedAt($date)
    {
        $this->createdAt = (int) $date;
    }

    /**
     * Get created at
     *
     * If no "created at" value has been set, this method will
     * set and return a default "created at" value,
     * if any such value is available
     *
     * @see getDefaultCreatedAt()
     *
     * @return int|null "created at" value or null if no "created at" value has been set
     */
    public function getCreatedAt()
    {
        if (!$this->hasCreatedAt() && $this->hasDefaultCreatedAt()) {
            $this->setCreatedAt($this->getDefaultCreatedAt());
        }
        return $this->createdAt;
    }

    /**
     * Get a default "created at" value, if any is available
     *
     * @return int|null A default "created at" value or null if no default value is available
     */
    public function getDefaultCreatedAt()
    {
        return null;
    }

    /**
     * Check if "created at" has been set
     *
     * @return bool True if "created at" value has been set, false if not
     */
    public function hasCreatedAt()
    {
        return isset($this->createdAt);
    }

    /**
     * Check if a default "created at" is available or not
     *
     * @return bool True of a default "created at" value is available, false if not
     */
    public function hasDefaultCreatedAt()
    {
        $default = $this->getDefaultCreatedAt();
        return isset($default);
    }
}