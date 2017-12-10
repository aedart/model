<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Purchased At Aware</h1>
 *
 * Component is aware of a int "purchased at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface PurchasedAtAware
{
    /**
     * Set purchased at
     *
     * @param int|null $date Date of when this component, entity or resource was purchased
     *
     * @return self
     */
    public function setPurchasedAt(?int $date);

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
    public function getPurchasedAt() : ?int ;

    /**
     * Check if "purchased at" has been set
     *
     * @return bool True if "purchased at" has been set, false if not
     */
    public function hasPurchasedAt() : bool;

    /**
     * Get a default "purchased at" value, if any is available
     *
     * @return int|null Default "purchased at" value or null if no default value is available
     */
    public function getDefaultPurchasedAt() : ?int;
}