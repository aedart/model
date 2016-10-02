<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Discount Trait</h1>
 *
 * @see \Aedart\Model\Contract\Integers\DiscountAware
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
     * @param int $amount Discount amount
     *
     * @return void
     */
    public function setDiscount($amount)
    {
        $this->discount = (int) $amount;
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
     * @return int|null "discount" value or null if no "discount" value has been set
     */
    public function getDiscount()
    {
        if (!$this->hasDiscount() && $this->hasDefaultDiscount()) {
            $this->setDiscount($this->getDefaultDiscount());
        }
        return $this->discount;
    }

    /**
     * Get a default "discount" value, if any is available
     *
     * @return int|null A default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount()
    {
        return null;
    }

    /**
     * Check if "discount" has been set
     *
     * @return bool True if "discount" value has been set, false if not
     */
    public function hasDiscount()
    {
        return isset($this->discount);
    }

    /**
     * Check if a default "discount" is available or not
     *
     * @return bool True of a default "discount" value is available, false if not
     */
    public function hasDefaultDiscount()
    {
        $default = $this->getDefaultDiscount();
        return isset($default);
    }
}