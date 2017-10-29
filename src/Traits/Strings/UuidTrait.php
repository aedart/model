<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $identifier Universally Unique Identifier (UUID)
     *
     * @return self
     */
    public function setUuid(?string $identifier)
    {
        $this->uuid = $identifier;

        return $this;
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
     * @return string|null uuid or null if no uuid has been set
     */
    public function getUuid() : ?string 
    {
        if ( ! $this->hasUuid()) {
            $this->setUuid($this->getDefaultUuid());
        }
        return $this->uuid;
    }

    /**
     * Check if "uuid" has been set
     *
     * @return bool True if "uuid" has been set, false if not
     */
    public function hasUuid() : bool
    {
        return isset($this->uuid);
    }

    /**
     * Get a default "uuid" value, if any is available
     *
     * @return string|null Default "uuid" value or null if no default value is available
     */
    public function getDefaultUuid() : ?string
    {
        return null;
    }
}