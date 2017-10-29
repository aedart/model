<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $address Invoice Address. Can be formatted.
     *
     * @return self
     */
    public function setInvoiceAddress(?string $address);

    /**
     * Get invoice address
     *
     * If no "invoice address" value has been set, this method will
     * set and return a default "invoice address" value,
     * if any such value is available
     *
     * @see getDefaultInvoiceAddress()
     *
     * @return string|null invoice address or null if no invoice address has been set
     */
    public function getInvoiceAddress() : ?string ;

    /**
     * Check if "invoice address" has been set
     *
     * @return bool True if "invoice address" has been set, false if not
     */
    public function hasInvoiceAddress() : bool;

    /**
     * Get a default "invoice address" value, if any is available
     *
     * @return string|null Default "invoice address" value or null if no default value is available
     */
    public function getDefaultInvoiceAddress() : ?string;
}