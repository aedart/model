<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Ip V6 Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IpV6Aware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IpV6Trait
{
    /**
     * IPv6 address
     *
     * @var string|null
     */
    protected $ipV6 = null;

    /**
     * Set ip v6
     *
     * @param string $address IPv6 address
     *
     * @return void
     */
    public function setIpV6($address)
    {
        $this->ipV6 = (string) $address;
    }

    /**
     * Get ip v6
     *
     * If no "ip v6" value has been set, this method will
     * set and return a default "ip v6" value,
     * if any such value is available
     *
     * @see getDefaultIpV6()
     *
     * @return string|null "ip v6" value or null if no "ip v6" value has been set
     */
    public function getIpV6()
    {
        if (!$this->hasIpV6() && $this->hasDefaultIpV6()) {
            $this->setIpV6($this->getDefaultIpV6());
        }
        return $this->ipV6;
    }

    /**
     * Get a default "ip v6" value, if any is available
     *
     * @return string|null A default "ip v6" value or null if no default value is available
     */
    public function getDefaultIpV6()
    {
        return null;
    }

    /**
     * Check if "ip v6" has been set
     *
     * @return bool True if "ip v6" value has been set, false if not
     */
    public function hasIpV6()
    {
        return isset($this->ipV6);
    }

    /**
     * Check if a default "ip v6" is available or not
     *
     * @return bool True of a default "ip v6" value is available, false if not
     */
    public function hasDefaultIpV6()
    {
        $default = $this->getDefaultIpV6();
        return isset($default);
    }
}