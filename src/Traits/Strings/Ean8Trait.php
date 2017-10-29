<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Ean8 Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\Ean8Aware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait Ean8Trait
{
    /**
     * International Article Number (EAN), 8-digit
     *
     * @var string|null
     */
    protected $ean8 = null;

    /**
     * Set ean8
     *
     * @param string|null $ean8 International Article Number (EAN), 8-digit
     *
     * @return self
     */
    public function setEan8(?string $ean8)
    {
        $this->ean8 = $ean8;

        return $this;
    }

    /**
     * Get ean8
     *
     * If no "ean8" value has been set, this method will
     * set and return a default "ean8" value,
     * if any such value is available
     *
     * @see getDefaultEan8()
     *
     * @return string|null ean8 or null if no ean8 has been set
     */
    public function getEan8() : ?string 
    {
        if ( ! $this->hasEan8()) {
            $this->setEan8($this->getDefaultEan8());
        }
        return $this->ean8;
    }

    /**
     * Check if "ean8" has been set
     *
     * @return bool True if "ean8" has been set, false if not
     */
    public function hasEan8() : bool
    {
        return isset($this->ean8);
    }

    /**
     * Get a default "ean8" value, if any is available
     *
     * @return string|null Default "ean8" value or null if no default value is available
     */
    public function getDefaultEan8() : ?string
    {
        return null;
    }
}