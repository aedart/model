<?php namespace Aedart\Model\Contracts\Strings;


/**
 * <h1>UUID Aware</h1>
 *
 * Components implementing this interface are aware of a Universally unique identifier (UUID)
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface UuidAware {

    /**
     * Set the given uuid
     *
     * @param string $identifier Universally unique identifier (UUID)
     *
     * @return void
     */
    public function setUuid($identifier);

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
    public function getUuid();

    /**
     * Get a default uuid value, if any is available
     *
     * @return string|null A default uuid value or Null if no default value is available
     */
    public function getDefaultUuid();

    /**
     * Check if uuid has been set
     *
     * @return bool True if uuid has been set, false if not
     */
    public function hasUuid();

    /**
     * Check if a default uuid is available or not
     *
     * @return bool True of a default uuid is available, false if not
     */
    public function hasDefaultUuid();
}