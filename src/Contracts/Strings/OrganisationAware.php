<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Organisation Aware</h1>
 *
 * Component is aware of a string "organisation" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface OrganisationAware
{
    /**
     * Set organisation
     *
     * @param string|null $name Name of organisation
     *
     * @return self
     */
    public function setOrganisation(?string $name);

    /**
     * Get organisation
     *
     * If no "organisation" value has been set, this method will
     * set and return a default "organisation" value,
     * if any such value is available
     *
     * @see getDefaultOrganisation()
     *
     * @return string|null organisation or null if no organisation has been set
     */
    public function getOrganisation() : ?string ;

    /**
     * Check if "organisation" has been set
     *
     * @return bool True if "organisation" has been set, false if not
     */
    public function hasOrganisation() : bool;

    /**
     * Get a default "organisation" value, if any is available
     *
     * @return string|null Default "organisation" value or null if no default value is available
     */
    public function getDefaultOrganisation() : ?string;
}