<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Discount Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DiscountAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DiscountTrait
{
    /**
     * Discount amount
     *
     * @var string|null
     */
    protected $discount = null;

    /**
     * Set discount
     *
     * @param string|null $amount Discount amount
     *
     * @return self
     */
    public function setDiscount(?string $amount)
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
     * @return string|null discount or null if no discount has been set
     */
    public function getDiscount() : ?string 
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
     * @return string|null Default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount() : ?string
    {
        return null;
    }
}