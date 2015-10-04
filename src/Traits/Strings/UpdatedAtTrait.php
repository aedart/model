<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Updated At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\UpdatedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait UpdatedAtTrait {

    /**
     * Date of when this component, entity or resource was updated
     *
     * @var string|null
     */
    protected $updatedAt = null;

    /**
     * Set the given updated at
     *
     * @param string $date Date of when this component, entity or resource was updated
     *
     * @return void
     */
    public function setUpdatedAt($date) {
        $this->updatedAt = (string) $date;
    }

    /**
     * Get the given updated at
     *
     * If no updated at has been set, this method will
     * set and return a default updated at, if any such
     * value is available
     *
     * @see getDefaultUpdatedAt()
     *
     * @return string|null updated at or null if none updated at has been set
     */
    public function getUpdatedAt() {
        if (!$this->hasUpdatedAt() && $this->hasDefaultUpdatedAt()) {
            $this->setUpdatedAt($this->getDefaultUpdatedAt());
        }
        return $this->updatedAt;
    }

    /**
     * Get a default updated at value, if any is available
     *
     * @return string|null A default updated at value or Null if no default value is available
     */
    public function getDefaultUpdatedAt() {
        return null;
    }

    /**
     * Check if updated at has been set
     *
     * @return bool True if updated at has been set, false if not
     */
    public function hasUpdatedAt() {
        if (!is_null($this->updatedAt)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default updated at is available or not
     *
     * @return bool True of a default updated at is available, false if not
     */
    public function hasDefaultUpdatedAt() {
        if (!is_null($this->getDefaultUpdatedAt())) {
            return true;
        }
        return false;
    }
}