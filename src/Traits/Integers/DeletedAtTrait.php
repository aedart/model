<?php namespace Aedart\Model\Traits\Integers;

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
     * Date (UNIX timestamp) of when this component, entity or resource was deleted
     *
     * @var int|null
     */
    protected $deletedAt = null;

    /**
     * Set deleted at
     *
     * @param int $date Date (UNIX timestamp) of when this component, entity or resource was deleted
     *
     * @return void
     */
    public function setDeletedAt($date)
    {
        $this->deletedAt = (int) $date;
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
     * @return int|null "deleted at" value or null if no "deleted at" value has been set
     */
    public function getDeletedAt()
    {
        if (!$this->hasDeletedAt() && $this->hasDefaultDeletedAt()) {
            $this->setDeletedAt($this->getDefaultDeletedAt());
        }
        return $this->deletedAt;
    }

    /**
     * Get a default "deleted at" value, if any is available
     *
     * @return int|null A default "deleted at" value or null if no default value is available
     */
    public function getDefaultDeletedAt()
    {
        return null;
    }

    /**
     * Check if "deleted at" has been set
     *
     * @return bool True if "deleted at" value has been set, false if not
     */
    public function hasDeletedAt()
    {
        return isset($this->deletedAt);
    }

    /**
     * Check if a default "deleted at" is available or not
     *
     * @return bool True of a default "deleted at" value is available, false if not
     */
    public function hasDefaultDeletedAt()
    {
        $default = $this->getDefaultDeletedAt();
        return isset($default);
    }
}