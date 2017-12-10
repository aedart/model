<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Amount Aware</h1>
 *
 * Component is aware of a int "amount" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface AmountAware
{
    /**
     * Set amount
     *
     * @param int|null $amount The quantity of something
     *
     * @return self
     */
    public function setAmount(?int $amount);

    /**
     * Get amount
     *
     * If no "amount" value has been set, this method will
     * set and return a default "amount" value,
     * if any such value is available
     *
     * @see getDefaultAmount()
     *
     * @return int|null amount or null if no amount has been set
     */
    public function getAmount() : ?int ;

    /**
     * Check if "amount" has been set
     *
     * @return bool True if "amount" has been set, false if not
     */
    public function hasAmount() : bool;

    /**
     * Get a default "amount" value, if any is available
     *
     * @return int|null Default "amount" value or null if no default value is available
     */
    public function getDefaultAmount() : ?int;
}