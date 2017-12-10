<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Quantity Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\QuantityAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait QuantityTrait
{
    /**
     * The quantity of something
     *
     * @var int|null
     */
    protected $quantity = null;

    /**
     * Set quantity
     *
     * @param int|null $quantity The quantity of something
     *
     * @return self
     */
    public function setQuantity(?int $quantity)
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
     * @return int|null quantity or null if no quantity has been set
     */
    public function getQuantity() : ?int 
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
     * @return int|null Default "quantity" value or null if no default value is available
     */
    public function getDefaultQuantity() : ?int
    {
        return null;
    }
}