<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Icao Aware</h1>
 *
 * Component is aware of a string "icao" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IcaoAware
{
    /**
     * Set icao
     *
     * @param string|null $code International Civil Aviation Organization code
     *
     * @return self
     */
    public function setIcao(?string $code);

    /**
     * Get icao
     *
     * If no "icao" value has been set, this method will
     * set and return a default "icao" value,
     * if any such value is available
     *
     * @see getDefaultIcao()
     *
     * @return string|null icao or null if no icao has been set
     */
    public function getIcao() : ?string ;

    /**
     * Check if "icao" has been set
     *
     * @return bool True if "icao" has been set, false if not
     */
    public function hasIcao() : bool;

    /**
     * Get a default "icao" value, if any is available
     *
     * @return string|null Default "icao" value or null if no default value is available
     */
    public function getDefaultIcao() : ?string;
}