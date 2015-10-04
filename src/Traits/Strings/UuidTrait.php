<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Uuid Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\UuidAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait UuidTrait {

    /**
     * Universally unique identifier (UUID)
     *
     * @var string|null
     */
    protected $uuid = null;

    /**
     * Set the given uuid
     *
     * @param string $identifier Universally unique identifier (UUID)
     *
     * @return void
     */
    public function setUuid($identifier) {
        $this->uuid = (string) $identifier;
    }

    /**
     * Get the given uuid
     *
     * If no uuid has been set, this method will
     * set and return a default uuid, if any such
     * value is available
     *
     * @see getDefaultUuid()
     *
     * @return string|null uuid or null if none uuid has been set
     */
    public function getUuid() {
        if (!$this->hasUuid() && $this->hasDefaultUuid()) {
            $this->setUuid($this->getDefaultUuid());
        }
        return $this->uuid;
    }

    /**
     * Get a default uuid value, if any is available
     *
     * @return string|null A default uuid value or Null if no default value is available
     */
    public function getDefaultUuid() {
        return null;
    }

    /**
     * Check if uuid has been set
     *
     * @return bool True if uuid has been set, false if not
     */
    public function hasUuid() {
        if (!is_null($this->uuid)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default uuid is available or not
     *
     * @return bool True of a default uuid is available, false if not
     */
    public function hasDefaultUuid() {
        if (!is_null($this->getDefaultUuid())) {
            return true;
        }
        return false;
    }
}