<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Brand Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\BrandAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait BrandTrait
{
    /**
     * Name or identifier of a brand that is associated with a product or service
     *
     * @var int|null
     */
    protected $brand = null;

    /**
     * Set brand
     *
     * @param int|null $identifier Name or identifier of a brand that is associated with a product or service
     *
     * @return self
     */
    public function setBrand(?int $identifier)
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
     * @return int|null brand or null if no brand has been set
     */
    public function getBrand() : ?int 
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
     * @return int|null Default "brand" value or null if no default value is available
     */
    public function getDefaultBrand() : ?int
    {
        return null;
    }
}