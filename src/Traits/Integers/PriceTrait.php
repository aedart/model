<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

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
     * Numeric price
     *
     * @var int|null
     */
    protected $price = null;

    /**
     * Set price
     *
     * @param int|null $amount Numeric price
     *
     * @return self
     */
    public function setPrice(?int $amount)
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
     * @return int|null price or null if no price has been set
     */
    public function getPrice() : ?int 
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
     * @return int|null Default "price" value or null if no default value is available
     */
    public function getDefaultPrice() : ?int
    {
        return null;
    }
}