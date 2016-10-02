<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Price Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\PriceAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait PriceTrait
{
    /**
     * Price of something stated in smallest units, e.g. cents
     *
     * @var int|null
     */
    protected $price = null;

    /**
     * Set price
     *
     * @param int $price Price of something stated in smallest units, e.g. cents
     *
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = (int) $price;
    }

    /**
     * Get price
     *
     * If no "price" value has been set, this method will
     * set and return a default "price" value,
     * if any such value is available
     *
     * @see getDefaultPrice()
     *
     * @return int|null "price" value or null if no "price" value has been set
     */
    public function getPrice()
    {
        if (!$this->hasPrice() && $this->hasDefaultPrice()) {
            $this->setPrice($this->getDefaultPrice());
        }
        return $this->price;
    }

    /**
     * Get a default "price" value, if any is available
     *
     * @return int|null A default "price" value or null if no default value is available
     */
    public function getDefaultPrice()
    {
        return null;
    }

    /**
     * Check if "price" has been set
     *
     * @return bool True if "price" value has been set, false if not
     */
    public function hasPrice()
    {
        return isset($this->price);
    }

    /**
     * Check if a default "price" is available or not
     *
     * @return bool True of a default "price" value is available, false if not
     */
    public function hasDefaultPrice()
    {
        $default = $this->getDefaultPrice();
        return isset($default);
    }
}