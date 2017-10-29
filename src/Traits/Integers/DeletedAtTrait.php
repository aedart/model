<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Deleted At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\DeletedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait DeletedAtTrait
{
    /**
     * Date of when this component, entity or resource was deleted
     *
     * @var int|null
     */
    protected $deletedAt = null;

    /**
     * Set deleted at
     *
     * @param int|null $date Date of when this component, entity or resource was deleted
     *
     * @return self
     */
    public function setDeletedAt(?int $date)
    {
        $this->deletedAt = $date;

        return $this;
    }

    /**
     * Get deleted at
     *
     * If no "deleted at" value has been set, this method will
     * set and return a default "deleted at" value,
     * if any such value is available
     *
     * @see getDefaultDeletedAt()
     *
     * @return int|null deleted at or null if no deleted at has been set
     */
    public function getDeletedAt() : ?int 
    {
        if ( ! $this->hasDeletedAt()) {
            $this->setDeletedAt($this->getDefaultDeletedAt());
        }
        return $this->deletedAt;
    }

    /**
     * Check if "deleted at" has been set
     *
     * @return bool True if "deleted at" has been set, false if not
     */
    public function hasDeletedAt() : bool
    {
        return isset($this->deletedAt);
    }

    /**
     * Get a default "deleted at" value, if any is available
     *
     * @return int|null Default "deleted at" value or null if no default value is available
     */
    public function getDefaultDeletedAt() : ?int
    {
        return null;
    }
}