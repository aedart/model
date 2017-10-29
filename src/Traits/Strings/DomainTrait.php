<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $domain Name, URL, territory or term that describes a given domain... etc
     *
     * @return self
     */
    public function setDomain(?string $domain)
    {
        $this->domain = $domain;

        return $this;
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
     * @return string|null domain or null if no domain has been set
     */
    public function getDomain() : ?string 
    {
        if ( ! $this->hasDomain()) {
            $this->setDomain($this->getDefaultDomain());
        }
        return $this->domain;
    }

    /**
     * Check if "domain" has been set
     *
     * @return bool True if "domain" has been set, false if not
     */
    public function hasDomain() : bool
    {
        return isset($this->domain);
    }

    /**
     * Get a default "domain" value, if any is available
     *
     * @return string|null Default "domain" value or null if no default value is available
     */
    public function getDefaultDomain() : ?string
    {
        return null;
    }
}