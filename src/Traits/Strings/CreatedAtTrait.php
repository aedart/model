<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Created At (date) Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CreatedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CreatedAtTrait {

    /**
     * Date of when this component, entity or resource was created
     *
     * @var string|null
     */
    protected $createdAt = null;

    /**
     * Set the given created at
     *
     * @param string $date Date of when this component, entity or resource was created
     *
     * @return void
     */
    public function setCreatedAt($date) {
        $this->createdAt = (string) $date;
    }

    /**
     * Get the given created at
     *
     * If no created at has been set, this method will
     * set and return a default created at, if any such
     * value is available
     *
     * @see getDefaultCreatedAt()
     *
     * @return string|null created at or null if none created at has been set
     */
    public function getCreatedAt() {
        if (!$this->hasCreatedAt() && $this->hasDefaultCreatedAt()) {
            $this->setCreatedAt($this->getDefaultCreatedAt());
        }
        return $this->createdAt;
    }

    /**
     * Get a default created at value, if any is available
     *
     * @return string|null A default created at value or Null if no default value is available
     */
    public function getDefaultCreatedAt() {
        return null;
    }

    /**
     * Check if created at has been set
     *
     * @return bool True if created at has been set, false if not
     */
    public function hasCreatedAt() {
        if (!is_null($this->createdAt)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default created at is available or not
     *
     * @return bool True of a default created at is available, false if not
     */
    public function hasDefaultCreatedAt() {
        if (!is_null($this->getDefaultCreatedAt())) {
            return true;
        }
        return false;
    }
}