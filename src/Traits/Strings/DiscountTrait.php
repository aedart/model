<?php namespace Aedart\Model\Traits\Strings;

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
     * Formatted discount
     *
     * @var string|null
     */
    protected $discount = null;

    /**
     * Set discount
     *
     * @param string $amount Formatted discount
     *
     * @return void
     */
    public function setDiscount($amount)
    {
        $this->discount = (string) $amount;
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
     * @return string|null "discount" value or null if no "discount" value has been set
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
     * @return string|null A default "discount" value or null if no default value is available
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