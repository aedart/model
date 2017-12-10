<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>License Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LicenseAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LicenseTrait
{
    /**
     * License name or identifier
     *
     * @var string|null
     */
    protected $license = null;

    /**
     * Set license
     *
     * @param string|null $identifier License name or identifier
     *
     * @return self
     */
    public function setLicense(?string $identifier)
    {
        $this->license = $identifier;

        return $this;
    }

    /**
     * Get license
     *
     * If no "license" value has been set, this method will
     * set and return a default "license" value,
     * if any such value is available
     *
     * @see getDefaultLicense()
     *
     * @return string|null license or null if no license has been set
     */
    public function getLicense() : ?string 
    {
        if ( ! $this->hasLicense()) {
            $this->setLicense($this->getDefaultLicense());
        }
        return $this->license;
    }

    /**
     * Check if "license" has been set
     *
     * @return bool True if "license" has been set, false if not
     */
    public function hasLicense() : bool
    {
        return isset($this->license);
    }

    /**
     * Get a default "license" value, if any is available
     *
     * @return string|null Default "license" value or null if no default value is available
     */
    public function getDefaultLicense() : ?string
    {
        return null;
    }
}