<?php namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Vat Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\VatAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait VatTrait
{
    /**
     * Value Added Tax (VAT), amount or rate
     *
     * @var float|null
     */
    protected $vat = null;

    /**
     * Set vat
     *
     * @param float $value Value Added Tax (VAT), amount or rate
     *
     * @return void
     */
    public function setVat($value)
    {
        $this->vat = (float) $value;
    }

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
    public function getVat()
    {
        if (!$this->hasVat() && $this->hasDefaultVat()) {
            $this->setVat($this->getDefaultVat());
        }
        return $this->vat;
    }

    /**
     * Get a default "vat" value, if any is available
     *
     * @return float|null A default "vat" value or null if no default value is available
     */
    public function getDefaultVat()
    {
        return null;
    }

    /**
     * Check if "vat" has been set
     *
     * @return bool True if "vat" value has been set, false if not
     */
    public function hasVat()
    {
        return isset($this->vat);
    }

    /**
     * Check if a default "vat" is available or not
     *
     * @return bool True of a default "vat" value is available, false if not
     */
    public function hasDefaultVat()
    {
        $default = $this->getDefaultVat();
        return isset($default);
    }
}