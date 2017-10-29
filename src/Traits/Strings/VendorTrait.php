<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Vendor Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\VendorAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait VendorTrait
{
    /**
     * Name or path of a vendor
     *
     * @var string|null
     */
    protected $vendor = null;

    /**
     * Set vendor
     *
     * @param string|null $vendor Name or path of a vendor
     *
     * @return self
     */
    public function setVendor(?string $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * If no "vendor" value has been set, this method will
     * set and return a default "vendor" value,
     * if any such value is available
     *
     * @see getDefaultVendor()
     *
     * @return string|null vendor or null if no vendor has been set
     */
    public function getVendor() : ?string 
    {
        if ( ! $this->hasVendor()) {
            $this->setVendor($this->getDefaultVendor());
        }
        return $this->vendor;
    }

    /**
     * Check if "vendor" has been set
     *
     * @return bool True if "vendor" has been set, false if not
     */
    public function hasVendor() : bool
    {
        return isset($this->vendor);
    }

    /**
     * Get a default "vendor" value, if any is available
     *
     * @return string|null Default "vendor" value or null if no default value is available
     */
    public function getDefaultVendor() : ?string
    {
        return null;
    }
}