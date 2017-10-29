<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Vat Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\VatAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait VatTrait
{
    /**
     * Value Added Tac (VAT), formatted amount or rate
     *
     * @var string|null
     */
    protected $vat = null;

    /**
     * Set vat
     *
     * @param string|null $amount Value Added Tac (VAT), formatted amount or rate
     *
     * @return self
     */
    public function setVat(?string $amount)
    {
        $this->vat = $amount;

        return $this;
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
     * @return string|null vat or null if no vat has been set
     */
    public function getVat() : ?string 
    {
        if ( ! $this->hasVat()) {
            $this->setVat($this->getDefaultVat());
        }
        return $this->vat;
    }

    /**
     * Check if "vat" has been set
     *
     * @return bool True if "vat" has been set, false if not
     */
    public function hasVat() : bool
    {
        return isset($this->vat);
    }

    /**
     * Get a default "vat" value, if any is available
     *
     * @return string|null Default "vat" value or null if no default value is available
     */
    public function getDefaultVat() : ?string
    {
        return null;
    }
}