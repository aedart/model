<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $name Name of an organisation
     *
     * @return void
     */
    public function setOrganisation($name);

    /**
     * Get organisation
     *
     * If no "organisation" value has been set, this method will
     * set and return a default "organisation" value,
     * if any such value is available
     *
     * @see getDefaultOrganisation()
     *
     * @return string|null "organisation" value or null if no "organisation" value has been set
     */
    public function getOrganisation();

    /**
     * Get a default "organisation" value, if any is available
     *
     * @return string|null A default "organisation" value or null if no default value is available
     */
    public function getDefaultOrganisation();

    /**
     * Check if "organisation" has been set
     *
     * @return bool True if "organisation" value has been set, false if not
     */
    public function hasOrganisation();

    /**
     * Check if a default "organisation" is available or not
     *
     * @return bool True of a default "organisation" value is available, false if not
     */
    public function hasDefaultOrganisation();
}