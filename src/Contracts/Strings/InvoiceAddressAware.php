<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Invoice Address Aware</h1>
 *
 * Component is aware of a string "invoice address" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface InvoiceAddressAware
{
    /**
     * Set invoice address
     *
     * @param string $address Invoice Address. Can be formatted.
     *
     * @return void
     */
    public function setInvoiceAddress($address);

    /**
     * Get invoice address
     *
     * If no "invoice address" value has been set, this method will
     * set and return a default "invoice address" value,
     * if any such value is available
     *
     * @see getDefaultInvoiceAddress()
     *
     * @return string|null "invoice address" value or null if no "invoice address" value has been set
     */
    public function getInvoiceAddress();

    /**
     * Get a default "invoice address" value, if any is available
     *
     * @return string|null A default "invoice address" value or null if no default value is available
     */
    public function getDefaultInvoiceAddress();

    /**
     * Check if "invoice address" has been set
     *
     * @return bool True if "invoice address" value has been set, false if not
     */
    public function hasInvoiceAddress();

    /**
     * Check if a default "invoice address" is available or not
     *
     * @return bool True of a default "invoice address" value is available, false if not
     */
    public function hasDefaultInvoiceAddress();
}