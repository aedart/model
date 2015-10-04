<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Id Trait</h>
 *
 * @see \Aedart\Model\Contracts\Strings\IdAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IdTrait {

    /**
     * Unique identifier
     *
     * @var string|null
     */
    protected $id = null;

    /**
     * Set the given id
     *
     * @param string $identifier Unique identifier
     *
     * @return void
     */
    public function setId($identifier) {
        $this->id = (string) $identifier;
    }

    /**
     * Get the given id
     *
     * If no id has been set, this method will
     * set and return a default id, if any such
     * value is available
     *
     * @see getDefaultId()
     *
     * @return string|null id or null if none id has been set
     */
    public function getId() {
        if (!$this->hasId() && $this->hasDefaultId()) {
            $this->setId($this->getDefaultId());
        }
        return $this->id;
    }

    /**
     * Get a default id value, if any is available
     *
     * @return string|null A default id value or Null if no default value is available
     */
    public function getDefaultId() {
        return null;
    }

    /**
     * Check if id has been set
     *
     * @return bool True if id has been set, false if not
     */
    public function hasId() {
        if (!is_null($this->id)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default id is available or not
     *
     * @return bool True of a default id is available, false if not
     */
    public function hasDefaultId() {
        if (!is_null($this->getDefaultId())) {
            return true;
        }
        return false;
    }
}