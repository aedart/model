<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Organisation Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\OrganisationAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait OrganisationTrait
{
    /**
     * Name of an organisation
     *
     * @var string|null
     */
    protected $organisation = null;

    /**
     * Set organisation
     *
     * @param string $name Name of an organisation
     *
     * @return void
     */
    public function setOrganisation($name)
    {
        $this->organisation = (string) $name;
    }

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
    public function getOrganisation()
    {
        if (!$this->hasOrganisation() && $this->hasDefaultOrganisation()) {
            $this->setOrganisation($this->getDefaultOrganisation());
        }
        return $this->organisation;
    }

    /**
     * Get a default "organisation" value, if any is available
     *
     * @return string|null A default "organisation" value or null if no default value is available
     */
    public function getDefaultOrganisation()
    {
        return null;
    }

    /**
     * Check if "organisation" has been set
     *
     * @return bool True if "organisation" value has been set, false if not
     */
    public function hasOrganisation()
    {
        return isset($this->organisation);
    }

    /**
     * Check if a default "organisation" is available or not
     *
     * @return bool True of a default "organisation" value is available, false if not
     */
    public function hasDefaultOrganisation()
    {
        $default = $this->getDefaultOrganisation();
        return isset($default);
    }
}