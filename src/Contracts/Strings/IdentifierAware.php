<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Identifier Aware</h1>
 *
 * Component is aware of a string "identifier" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IdentifierAware
{
    /**
     * Set identifier
     *
     * @param string|null $identifier Name or code that identifies a unique object, resource, class, component or thing
     *
     * @return self
     */
    public function setIdentifier(?string $identifier);

    /**
     * Get identifier
     *
     * If no "identifier" value has been set, this method will
     * set and return a default "identifier" value,
     * if any such value is available
     *
     * @see getDefaultIdentifier()
     *
     * @return string|null identifier or null if no identifier has been set
     */
    public function getIdentifier() : ?string ;

    /**
     * Check if "identifier" has been set
     *
     * @return bool True if "identifier" has been set, false if not
     */
    public function hasIdentifier() : bool;

    /**
     * Get a default "identifier" value, if any is available
     *
     * @return string|null Default "identifier" value or null if no default value is available
     */
    public function getDefaultIdentifier() : ?string;
}