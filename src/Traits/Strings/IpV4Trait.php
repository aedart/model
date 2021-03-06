<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Ip V4 Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IpV4Aware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IpV4Trait
{
    /**
     * IPv4 address
     *
     * @var string|null
     */
    protected $ipV4 = null;

    /**
     * Set ip v4
     *
     * @param string|null $address IPv4 address
     *
     * @return self
     */
    public function setIpV4(?string $address)
    {
        $this->ipV4 = $address;

        return $this;
    }

    /**
     * Get ip v4
     *
     * If no "ip v4" value has been set, this method will
     * set and return a default "ip v4" value,
     * if any such value is available
     *
     * @see getDefaultIpV4()
     *
     * @return string|null ip v4 or null if no ip v4 has been set
     */
    public function getIpV4() : ?string 
    {
        if ( ! $this->hasIpV4()) {
            $this->setIpV4($this->getDefaultIpV4());
        }
        return $this->ipV4;
    }

    /**
     * Check if "ip v4" has been set
     *
     * @return bool True if "ip v4" has been set, false if not
     */
    public function hasIpV4() : bool
    {
        return isset($this->ipV4);
    }

    /**
     * Get a default "ip v4" value, if any is available
     *
     * @return string|null Default "ip v4" value or null if no default value is available
     */
    public function getDefaultIpV4() : ?string
    {
        return null;
    }
}