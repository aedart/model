<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Deleted At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DeletedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DeletedAtTrait {

    /**
     * Date of when this component, entity or resource was deleted
     *
     * @var string|null
     */
    protected $deletedAt = null;

    /**
     * Set the given deleted at
     *
     * @param string $date Date of when this component, entity or resource was deleted
     *
     * @return void
     */
    public function setDeletedAt($date) {
        $this->deletedAt = (string) $date;
    }

    /**
     * Get the given deleted at
     *
     * If no deleted at has been set, this method will
     * set and return a default deleted at, if any such
     * value is available
     *
     * @see getDefaultDeletedAt()
     *
     * @return string|null deleted at or null if none deleted at has been set
     */
    public function getDeletedAt() {
        if (!$this->hasDeletedAt() && $this->hasDefaultDeletedAt()) {
            $this->setDeletedAt($this->getDefaultDeletedAt());
        }
        return $this->deletedAt;
    }

    /**
     * Get a default deleted at value, if any is available
     *
     * @return string|null A default deleted at value or Null if no default value is available
     */
    public function getDefaultDeletedAt() {
        return null;
    }

    /**
     * Check if deleted at has been set
     *
     * @return bool True if deleted at has been set, false if not
     */
    public function hasDeletedAt() {
        if (!is_null($this->deletedAt)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default deleted at is available or not
     *
     * @return bool True of a default deleted at is available, false if not
     */
    public function hasDefaultDeletedAt() {
        if (!is_null($this->getDefaultDeletedAt())) {
            return true;
        }
        return false;
    }
}