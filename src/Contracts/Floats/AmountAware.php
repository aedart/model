<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Amount Aware</h1>
 *
 * Component is aware of a float "amount" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface AmountAware
{
    /**
     * Set amount
     *
     * @param float|null $amount The quantity of something
     *
     * @return self
     */
    public function setAmount(?float $amount);

    /**
     * Get amount
     *
     * If no "amount" value has been set, this method will
     * set and return a default "amount" value,
     * if any such value is available
     *
     * @see getDefaultAmount()
     *
     * @return float|null amount or null if no amount has been set
     */
    public function getAmount() : ?float ;

    /**
     * Check if "amount" has been set
     *
     * @return bool True if "amount" has been set, false if not
     */
    public function hasAmount() : bool;

    /**
     * Get a default "amount" value, if any is available
     *
     * @return float|null Default "amount" value or null if no default value is available
     */
    public function getDefaultAmount() : ?float;
}