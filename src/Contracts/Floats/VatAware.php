<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Vat Aware</h1>
 *
 * Component is aware of a float "vat" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface VatAware
{
    /**
     * Set vat
     *
     * @param float|null $amount Value Added Tac (VAT), formatted amount or rate
     *
     * @return self
     */
    public function setVat(?float $amount);

    /**
     * Get vat
     *
     * If no "vat" value has been set, this method will
     * set and return a default "vat" value,
     * if any such value is available
     *
     * @see getDefaultVat()
     *
     * @return float|null vat or null if no vat has been set
     */
    public function getVat() : ?float ;

    /**
     * Check if "vat" has been set
     *
     * @return bool True if "vat" has been set, false if not
     */
    public function hasVat() : bool;

    /**
     * Get a default "vat" value, if any is available
     *
     * @return float|null Default "vat" value or null if no default value is available
     */
    public function getDefaultVat() : ?float;
}