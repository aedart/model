<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Json Aware</h1>
 *
 * Component is aware of a string "json" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface JsonAware
{
    /**
     * Set json
     *
     * @param string|null $json JavaScript Object Notation (JSON)
     *
     * @return self
     */
    public function setJson(?string $json);

    /**
     * Get json
     *
     * If no "json" value has been set, this method will
     * set and return a default "json" value,
     * if any such value is available
     *
     * @see getDefaultJson()
     *
     * @return string|null json or null if no json has been set
     */
    public function getJson() : ?string ;

    /**
     * Check if "json" has been set
     *
     * @return bool True if "json" has been set, false if not
     */
    public function hasJson() : bool;

    /**
     * Get a default "json" value, if any is available
     *
     * @return string|null Default "json" value or null if no default value is available
     */
    public function getDefaultJson() : ?string;
}