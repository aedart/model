<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Purchased At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\PurchasedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait PurchasedAtTrait
{
    /**
     * Date of when this component, entity or resource was purchased
     *
     * @var int|null
     */
    protected $purchasedAt = null;

    /**
     * Set purchased at
     *
     * @param int|null $date Date of when this component, entity or resource was purchased
     *
     * @return self
     */
    public function setPurchasedAt(?int $date)
    {
        $this->purchasedAt = $date;

        return $this;
    }

    /**
     * Get purchased at
     *
     * If no "purchased at" value has been set, this method will
     * set and return a default "purchased at" value,
     * if any such value is available
     *
     * @see getDefaultPurchasedAt()
     *
     * @return int|null purchased at or null if no purchased at has been set
     */
    public function getPurchasedAt() : ?int 
    {
        if ( ! $this->hasPurchasedAt()) {
            $this->setPurchasedAt($this->getDefaultPurchasedAt());
        }
        return $this->purchasedAt;
    }

    /**
     * Check if "purchased at" has been set
     *
     * @return bool True if "purchased at" has been set, false if not
     */
    public function hasPurchasedAt() : bool
    {
        return isset($this->purchasedAt);
    }

    /**
     * Get a default "purchased at" value, if any is available
     *
     * @return int|null Default "purchased at" value or null if no default value is available
     */
    public function getDefaultPurchasedAt() : ?int
    {
        return null;
    }
}