<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Price Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PriceAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PriceTrait
{
    /**
     * Formatted price
     *
     * @var string|null
     */
    protected $price = null;

    /**
     * Set price
     *
     * @param string $price Formatted price
     *
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = (string) $price;
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
     * @return string|null "price" value or null if no "price" value has been set
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
     * @return string|null A default "price" value or null if no default value is available
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