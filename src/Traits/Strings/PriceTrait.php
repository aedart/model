<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Numeric price
     *
     * @var string|null
     */
    protected $price = null;

    /**
     * Set price
     *
     * @param string|null $amount Numeric price
     *
     * @return self
     */
    public function setPrice(?string $amount)
    {
        $this->price = $amount;

        return $this;
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
     * @return string|null price or null if no price has been set
     */
    public function getPrice() : ?string 
    {
        if ( ! $this->hasPrice()) {
            $this->setPrice($this->getDefaultPrice());
        }
        return $this->price;
    }

    /**
     * Check if "price" has been set
     *
     * @return bool True if "price" has been set, false if not
     */
    public function hasPrice() : bool
    {
        return isset($this->price);
    }

    /**
     * Get a default "price" value, if any is available
     *
     * @return string|null Default "price" value or null if no default value is available
     */
    public function getDefaultPrice() : ?string
    {
        return null;
    }
}