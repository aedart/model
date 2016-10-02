<?php namespace Aedart\Model\Contracts\Floats;

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
     * @param float $value Value Added Tax (VAT), amount or rate
     *
     * @return void
     */
    public function setVat($value);

    /**
     * Get vat
     *
     * If no "vat" value has been set, this method will
     * set and return a default "vat" value,
     * if any such value is available
     *
     * @see getDefaultVat()
     *
     * @return float|null "vat" value or null if no "vat" value has been set
     */
    public function getVat();

    /**
     * Get a default "vat" value, if any is available
     *
     * @return float|null A default "vat" value or null if no default value is available
     */
    public function getDefaultVat();

    /**
     * Check if "vat" has been set
     *
     * @return bool True if "vat" value has been set, false if not
     */
    public function hasVat();

    /**
     * Check if a default "vat" is available or not
     *
     * @return bool True of a default "vat" value is available, false if not
     */
    public function hasDefaultVat();
}