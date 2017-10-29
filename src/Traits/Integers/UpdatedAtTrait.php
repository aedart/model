<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

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
     * Date of when this component, entity or resource was updated
     *
     * @var int|null
     */
    protected $updatedAt = null;

    /**
     * Set updated at
     *
     * @param int|null $date Date of when this component, entity or resource was updated
     *
     * @return self
     */
    public function setUpdatedAt(?int $date)
    {
        $this->updatedAt = $date;

        return $this;
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
     * @return int|null updated at or null if no updated at has been set
     */
    public function getUpdatedAt() : ?int 
    {
        if ( ! $this->hasUpdatedAt()) {
            $this->setUpdatedAt($this->getDefaultUpdatedAt());
        }
        return $this->updatedAt;
    }

    /**
     * Check if "updated at" has been set
     *
     * @return bool True if "updated at" has been set, false if not
     */
    public function hasUpdatedAt() : bool
    {
        return isset($this->updatedAt);
    }

    /**
     * Get a default "updated at" value, if any is available
     *
     * @return int|null Default "updated at" value or null if no default value is available
     */
    public function getDefaultUpdatedAt() : ?int
    {
        return null;
    }
}