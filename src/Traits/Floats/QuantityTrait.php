<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Quantity Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\QuantityAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait QuantityTrait
{
    /**
     * The quantity of something
     *
     * @var float|null
     */
    protected $quantity = null;

    /**
     * Set quantity
     *
     * @param float|null $quantity The quantity of something
     *
     * @return self
     */
    public function setQuantity(?float $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * If no "quantity" value has been set, this method will
     * set and return a default "quantity" value,
     * if any such value is available
     *
     * @see getDefaultQuantity()
     *
     * @return float|null quantity or null if no quantity has been set
     */
    public function getQuantity() : ?float 
    {
        if ( ! $this->hasQuantity()) {
            $this->setQuantity($this->getDefaultQuantity());
        }
        return $this->quantity;
    }

    /**
     * Check if "quantity" has been set
     *
     * @return bool True if "quantity" has been set, false if not
     */
    public function hasQuantity() : bool
    {
        return isset($this->quantity);
    }

    /**
     * Get a default "quantity" value, if any is available
     *
     * @return float|null Default "quantity" value or null if no default value is available
     */
    public function getDefaultQuantity() : ?float
    {
        return null;
    }
}