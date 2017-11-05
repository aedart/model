<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Iata Aware</h1>
 *
 * Component is aware of a string "iata" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IataAware
{
    /**
     * Set iata
     *
     * @param string|null $code International Air Transport Association code
     *
     * @return self
     */
    public function setIata(?string $code);

    /**
     * Get iata
     *
     * If no "iata" value has been set, this method will
     * set and return a default "iata" value,
     * if any such value is available
     *
     * @see getDefaultIata()
     *
     * @return string|null iata or null if no iata has been set
     */
    public function getIata() : ?string ;

    /**
     * Check if "iata" has been set
     *
     * @return bool True if "iata" has been set, false if not
     */
    public function hasIata() : bool;

    /**
     * Get a default "iata" value, if any is available
     *
     * @return string|null Default "iata" value or null if no default value is available
     */
    public function getDefaultIata() : ?string;
}