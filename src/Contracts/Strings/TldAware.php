<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Tld Aware</h1>
 *
 * Component is aware of a string "tld" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TldAware
{
    /**
     * Set tld
     *
     * @param string $tld Top Level Domain (TLD)
     *
     * @return void
     */
    public function setTld($tld);

    /**
     * Get tld
     *
     * If no "tld" value has been set, this method will
     * set and return a default "tld" value,
     * if any such value is available
     *
     * @see getDefaultTld()
     *
     * @return string|null "tld" value or null if no "tld" value has been set
     */
    public function getTld();

    /**
     * Get a default "tld" value, if any is available
     *
     * @return string|null A default "tld" value or null if no default value is available
     */
    public function getDefaultTld();

    /**
     * Check if "tld" has been set
     *
     * @return bool True if "tld" value has been set, false if not
     */
    public function hasTld();

    /**
     * Check if a default "tld" is available or not
     *
     * @return bool True of a default "tld" value is available, false if not
     */
    public function hasDefaultTld();
}