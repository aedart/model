<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Host Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\HostAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait HostTrait
{
    /**
     * Identifier of a host
     *
     * @var string|null
     */
    protected $host = null;

    /**
     * Set host
     *
     * @param string|null $identifier Identifier of a host
     *
     * @return self
     */
    public function setHost(?string $identifier)
    {
        $this->host = $identifier;

        return $this;
    }

    /**
     * Get host
     *
     * If no "host" value has been set, this method will
     * set and return a default "host" value,
     * if any such value is available
     *
     * @see getDefaultHost()
     *
     * @return string|null host or null if no host has been set
     */
    public function getHost() : ?string 
    {
        if ( ! $this->hasHost()) {
            $this->setHost($this->getDefaultHost());
        }
        return $this->host;
    }

    /**
     * Check if "host" has been set
     *
     * @return bool True if "host" has been set, false if not
     */
    public function hasHost() : bool
    {
        return isset($this->host);
    }

    /**
     * Get a default "host" value, if any is available
     *
     * @return string|null Default "host" value or null if no default value is available
     */
    public function getDefaultHost() : ?string
    {
        return null;
    }
}