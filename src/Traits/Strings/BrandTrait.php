<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Brand Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\BrandAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait BrandTrait
{
    /**
     * Name or identifier of a brand that is associated with a product or service
     *
     * @var string|null
     */
    protected $brand = null;

    /**
     * Set brand
     *
     * @param string|null $identifier Name or identifier of a brand that is associated with a product or service
     *
     * @return self
     */
    public function setBrand(?string $identifier)
    {
        $this->brand = $identifier;

        return $this;
    }

    /**
     * Get brand
     *
     * If no "brand" value has been set, this method will
     * set and return a default "brand" value,
     * if any such value is available
     *
     * @see getDefaultBrand()
     *
     * @return string|null brand or null if no brand has been set
     */
    public function getBrand() : ?string 
    {
        if ( ! $this->hasBrand()) {
            $this->setBrand($this->getDefaultBrand());
        }
        return $this->brand;
    }

    /**
     * Check if "brand" has been set
     *
     * @return bool True if "brand" has been set, false if not
     */
    public function hasBrand() : bool
    {
        return isset($this->brand);
    }

    /**
     * Get a default "brand" value, if any is available
     *
     * @return string|null Default "brand" value or null if no default value is available
     */
    public function getDefaultBrand() : ?string
    {
        return null;
    }
}