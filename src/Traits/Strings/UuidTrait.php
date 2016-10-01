<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Uuid Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\UuidAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait UuidTrait
{
    /**
     * Universally Unique Identifier (UUID)
     *
     * @var string|null
     */
    protected $uuid = null;

    /**
     * Set uuid
     *
     * @param string $identifier Universally Unique Identifier (UUID)
     *
     * @return void
     */
    public function setUuid($identifier)
    {
        $this->uuid = (string) $identifier;
    }

    /**
     * Get uuid
     *
     * If no "uuid" value has been set, this method will
     * set and return a default "uuid" value,
     * if any such value is available
     *
     * @see getDefaultUuid()
     *
     * @return string|null "uuid" value or null if no "uuid" value has been set
     */
    public function getUuid()
    {
        if (!$this->hasUuid() && $this->hasDefaultUuid()) {
            $this->setUuid($this->getDefaultUuid());
        }
        return $this->uuid;
    }

    /**
     * Get a default "uuid" value, if any is available
     *
     * @return string|null A default "uuid" value or null if no default value is available
     */
    public function getDefaultUuid()
    {
        return null;
    }

    /**
     * Check if "uuid" has been set
     *
     * @return bool True if "uuid" value has been set, false if not
     */
    public function hasUuid()
    {
        return isset($this->uuid);
    }

    /**
     * Check if a default "uuid" is available or not
     *
     * @return bool True of a default "uuid" value is available, false if not
     */
    public function hasDefaultUuid()
    {
        $default = $this->getDefaultUuid();
        return isset($default);
    }
}