<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Purchase Date Aware</h1>
 *
 * Component is aware of a int "purchase date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface PurchaseDateAware
{
    /**
     * Set purchase date
     *
     * @param int|null $date Date of planned purchase
     *
     * @return self
     */
    public function setPurchaseDate(?int $date);

    /**
     * Get purchase date
     *
     * If no "purchase date" value has been set, this method will
     * set and return a default "purchase date" value,
     * if any such value is available
     *
     * @see getDefaultPurchaseDate()
     *
     * @return int|null purchase date or null if no purchase date has been set
     */
    public function getPurchaseDate() : ?int ;

    /**
     * Check if "purchase date" has been set
     *
     * @return bool True if "purchase date" has been set, false if not
     */
    public function hasPurchaseDate() : bool;

    /**
     * Get a default "purchase date" value, if any is available
     *
     * @return int|null Default "purchase date" value or null if no default value is available
     */
    public function getDefaultPurchaseDate() : ?int;
}