<?php namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Price Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\PriceAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait PriceTrait
{
    /**
     * Price of something
     *
     * @var float|null
     */
    protected $price = null;

    /**
     * Set price
     *
     * @param float $price Price of something
     *
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = (float) $price;
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
     * @return float|null "price" value or null if no "price" value has been set
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
     * @return float|null A default "price" value or null if no default value is available
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