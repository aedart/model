<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Invoice Address Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\InvoiceAddressAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait InvoiceAddressTrait
{
    /**
     * Invoice Address. Can be formatted.
     *
     * @var string|null
     */
    protected $invoiceAddress = null;

    /**
     * Set invoice address
     *
     * @param string|null $address Invoice Address. Can be formatted.
     *
     * @return self
     */
    public function setInvoiceAddress(?string $address)
    {
        $this->invoiceAddress = $address;

        return $this;
    }

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
    public function getInvoiceAddress() : ?string 
    {
        if ( ! $this->hasInvoiceAddress()) {
            $this->setInvoiceAddress($this->getDefaultInvoiceAddress());
        }
        return $this->invoiceAddress;
    }

    /**
     * Check if "invoice address" has been set
     *
     * @return bool True if "invoice address" has been set, false if not
     */
    public function hasInvoiceAddress() : bool
    {
        return isset($this->invoiceAddress);
    }

    /**
     * Get a default "invoice address" value, if any is available
     *
     * @return string|null Default "invoice address" value or null if no default value is available
     */
    public function getDefaultInvoiceAddress() : ?string
    {
        return null;
    }
}