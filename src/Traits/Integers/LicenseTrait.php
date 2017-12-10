<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>License Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\LicenseAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait LicenseTrait
{
    /**
     * License name or identifier
     *
     * @var int|null
     */
    protected $license = null;

    /**
     * Set license
     *
     * @param int|null $identifier License name or identifier
     *
     * @return self
     */
    public function setLicense(?int $identifier)
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
     * @return int|null license or null if no license has been set
     */
    public function getLicense() : ?int 
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
     * @return int|null Default "license" value or null if no default value is available
     */
    public function getDefaultLicense() : ?int
    {
        return null;
    }
}