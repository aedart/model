<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Domain Aware</h1>
 *
 * Component is aware of a string "domain" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DomainAware
{
    /**
     * Set domain
     *
     * @param string|null $domain Name, URL, territory or term that describes a given domain... etc
     *
     * @return self
     */
    public function setDomain(?string $domain);

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
    public function getDomain() : ?string ;

    /**
     * Check if "domain" has been set
     *
     * @return bool True if "domain" has been set, false if not
     */
    public function hasDomain() : bool;

    /**
     * Get a default "domain" value, if any is available
     *
     * @return string|null Default "domain" value or null if no default value is available
     */
    public function getDefaultDomain() : ?string;
}