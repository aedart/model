<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Discount Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\DiscountAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait DiscountTrait
{
    /**
     * Discount amount
     *
     * @var int|null
     */
    protected $discount = null;

    /**
     * Set discount
     *
     * @param int|null $amount Discount amount
     *
     * @return self
     */
    public function setDiscount(?int $amount)
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
     * @return int|null discount or null if no discount has been set
     */
    public function getDiscount() : ?int 
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
     * @return int|null Default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount() : ?int
    {
        return null;
    }
}