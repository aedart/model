<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Domain Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DomainAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DomainTrait
{
    /**
     * Name, URL, territory or term that describes a given domain... etc
     *
     * @var string|null
     */
    protected $domain = null;

    /**
     * Set domain
     *
     * @param string $value Name, URL, territory or term that describes a given domain... etc
     *
     * @return void
     */
    public function setDomain($value)
    {
        $this->domain = (string) $value;
    }

    /**
     * Get domain
     *
     * If no "domain" value has been set, this method will
     * set and return a default "domain" value,
     * if any such value is available
     *
     * @see getDefaultDomain()
     *
     * @return string|null "domain" value or null if no "domain" value has been set
     */
    public function getDomain()
    {
        if (!$this->hasDomain() && $this->hasDefaultDomain()) {
            $this->setDomain($this->getDefaultDomain());
        }
        return $this->domain;
    }

    /**
     * Get a default "domain" value, if any is available
     *
     * @return string|null A default "domain" value or null if no default value is available
     */
    public function getDefaultDomain()
    {
        return null;
    }

    /**
     * Check if "domain" has been set
     *
     * @return bool True if "domain" value has been set, false if not
     */
    public function hasDomain()
    {
        return isset($this->domain);
    }

    /**
     * Check if a default "domain" is available or not
     *
     * @return bool True of a default "domain" value is available, false if not
     */
    public function hasDefaultDomain()
    {
        $default = $this->getDefaultDomain();
        return isset($default);
    }
}