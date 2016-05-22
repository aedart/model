<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a vendor
     *
     * @var string|null
     */
    protected $vendor = null;

    /**
     * Set the given vendor
     *
     * @param string $name Name of a vendor
     *
     * @return void
     */
    public function setVendor($name)
    {
        $this->vendor = (string) $name;
    }

    /**
     * Get the given vendor
     *
     * If no vendor has been set, this method will
     * set and return a default vendor, if any such
     * value is available
     *
     * @see getDefaultVendor()
     *
     * @return string|null vendor or null if none vendor has been set
     */
    public function getVendor()
    {
        if (!$this->hasVendor() && $this->hasDefaultVendor()) {
            $this->setVendor($this->getDefaultVendor());
        }
        return $this->vendor;
    }

    /**
     * Get a default vendor value, if any is available
     *
     * @return string|null A default vendor value or Null if no default value is available
     */
    public function getDefaultVendor()
    {
        return null;
    }

    /**
     * Check if vendor has been set
     *
     * @return bool True if vendor has been set, false if not
     */
    public function hasVendor()
    {
        return !is_null($this->vendor);
    }

    /**
     * Check if a default vendor is available or not
     *
     * @return bool True of a default vendor is available, false if not
     */
    public function hasDefaultVendor()
    {
        return !is_null($this->getDefaultVendor());
    }
}