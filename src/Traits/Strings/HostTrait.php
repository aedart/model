<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $identifier Identifier of a host
     *
     * @return void
     */
    public function setHost($identifier)
    {
        $this->host = (string) $identifier;
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
     * @return string|null "host" value or null if no "host" value has been set
     */
    public function getHost()
    {
        if (!$this->hasHost() && $this->hasDefaultHost()) {
            $this->setHost($this->getDefaultHost());
        }
        return $this->host;
    }

    /**
     * Get a default "host" value, if any is available
     *
     * @return string|null A default "host" value or null if no default value is available
     */
    public function getDefaultHost()
    {
        return null;
    }

    /**
     * Check if "host" has been set
     *
     * @return bool True if "host" value has been set, false if not
     */
    public function hasHost()
    {
        return isset($this->host);
    }

    /**
     * Check if a default "host" is available or not
     *
     * @return bool True of a default "host" value is available, false if not
     */
    public function hasDefaultHost()
    {
        $default = $this->getDefaultHost();
        return isset($default);
    }
}