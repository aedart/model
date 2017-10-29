<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Discount Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\DiscountAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait DiscountTrait
{
    /**
     * Discount amount
     *
     * @var float|null
     */
    protected $discount = null;

    /**
     * Set discount
     *
     * @param float|null $amount Discount amount
     *
     * @return self
     */
    public function setDiscount(?float $amount)
    {
        $this->discount = $amount;

        return $this;
    }

    /**
     * Get discount
     *
     * If no "discount" value has been set, this method will
     * set and return a default "discount" value,
     * if any such value is available
     *
     * @see getDefaultDiscount()
     *
     * @return float|null discount or null if no discount has been set
     */
    public function getDiscount() : ?float 
    {
        if ( ! $this->hasDiscount()) {
            $this->setDiscount($this->getDefaultDiscount());
        }
        return $this->discount;
    }

    /**
     * Check if "discount" has been set
     *
     * @return bool True if "discount" has been set, false if not
     */
    public function hasDiscount() : bool
    {
        return isset($this->discount);
    }

    /**
     * Get a default "discount" value, if any is available
     *
     * @return float|null Default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount() : ?float
    {
        return null;
    }
}