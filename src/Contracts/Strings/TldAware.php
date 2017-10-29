<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $tld Top Level Domain (TLD)
     *
     * @return self
     */
    public function setTld(?string $tld);

    /**
     * Get tld
     *
     * If no "tld" value has been set, this method will
     * set and return a default "tld" value,
     * if any such value is available
     *
     * @see getDefaultTld()
     *
     * @return string|null tld or null if no tld has been set
     */
    public function getTld() : ?string ;

    /**
     * Check if "tld" has been set
     *
     * @return bool True if "tld" has been set, false if not
     */
    public function hasTld() : bool;

    /**
     * Get a default "tld" value, if any is available
     *
     * @return string|null Default "tld" value or null if no default value is available
     */
    public function getDefaultTld() : ?string;
}