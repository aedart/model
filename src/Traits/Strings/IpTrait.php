<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Ip Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IpAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IpTrait
{
    /**
     * IP address
     *
     * @var string|null
     */
    protected $ip = null;

    /**
     * Set ip
     *
     * @param string $address IP address
     *
     * @return void
     */
    public function setIp($address)
    {
        $this->ip = (string) $address;
    }

    /**
     * Get ip
     *
     * If no "ip" value has been set, this method will
     * set and return a default "ip" value,
     * if any such value is available
     *
     * @see getDefaultIp()
     *
     * @return string|null "ip" value or null if no "ip" value has been set
     */
    public function getIp()
    {
        if (!$this->hasIp() && $this->hasDefaultIp()) {
            $this->setIp($this->getDefaultIp());
        }
        return $this->ip;
    }

    /**
     * Get a default "ip" value, if any is available
     *
     * @return string|null A default "ip" value or null if no default value is available
     */
    public function getDefaultIp()
    {
        return null;
    }

    /**
     * Check if "ip" has been set
     *
     * @return bool True if "ip" value has been set, false if not
     */
    public function hasIp()
    {
        return isset($this->ip);
    }

    /**
     * Check if a default "ip" is available or not
     *
     * @return bool True of a default "ip" value is available, false if not
     */
    public function hasDefaultIp()
    {
        $default = $this->getDefaultIp();
        return isset($default);
    }
}