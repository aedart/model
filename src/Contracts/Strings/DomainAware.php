<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $value Name, URL, territory or term that describes a given domain... etc
     *
     * @return void
     */
    public function setDomain($value);

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
    public function getDomain();

    /**
     * Get a default "domain" value, if any is available
     *
     * @return string|null A default "domain" value or null if no default value is available
     */
    public function getDefaultDomain();

    /**
     * Check if "domain" has been set
     *
     * @return bool True if "domain" value has been set, false if not
     */
    public function hasDomain();

    /**
     * Check if a default "domain" is available or not
     *
     * @return bool True of a default "domain" value is available, false if not
     */
    public function hasDefaultDomain();
}