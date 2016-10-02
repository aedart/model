<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $address Invoice Address. Can be formatted.
     *
     * @return void
     */
    public function setInvoiceAddress($address)
    {
        $this->invoiceAddress = (string) $address;
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
     * @return string|null "invoice address" value or null if no "invoice address" value has been set
     */
    public function getInvoiceAddress()
    {
        if (!$this->hasInvoiceAddress() && $this->hasDefaultInvoiceAddress()) {
            $this->setInvoiceAddress($this->getDefaultInvoiceAddress());
        }
        return $this->invoiceAddress;
    }

    /**
     * Get a default "invoice address" value, if any is available
     *
     * @return string|null A default "invoice address" value or null if no default value is available
     */
    public function getDefaultInvoiceAddress()
    {
        return null;
    }

    /**
     * Check if "invoice address" has been set
     *
     * @return bool True if "invoice address" value has been set, false if not
     */
    public function hasInvoiceAddress()
    {
        return isset($this->invoiceAddress);
    }

    /**
     * Check if a default "invoice address" is available or not
     *
     * @return bool True of a default "invoice address" value is available, false if not
     */
    public function hasDefaultInvoiceAddress()
    {
        $default = $this->getDefaultInvoiceAddress();
        return isset($default);
    }
}