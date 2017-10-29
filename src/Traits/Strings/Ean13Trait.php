<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Ean13 Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\Ean13Aware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait Ean13Trait
{
    /**
     * International Article Number (EAN), 13-digit
     *
     * @var string|null
     */
    protected $ean13 = null;

    /**
     * Set ean13
     *
     * @param string|null $ean13 International Article Number (EAN), 13-digit
     *
     * @return self
     */
    public function setEan13(?string $ean13)
    {
        $this->ean13 = $ean13;

        return $this;
    }

    /**
     * Get ean13
     *
     * If no "ean13" value has been set, this method will
     * set and return a default "ean13" value,
     * if any such value is available
     *
     * @see getDefaultEan13()
     *
     * @return string|null ean13 or null if no ean13 has been set
     */
    public function getEan13() : ?string 
    {
        if ( ! $this->hasEan13()) {
            $this->setEan13($this->getDefaultEan13());
        }
        return $this->ean13;
    }

    /**
     * Check if "ean13" has been set
     *
     * @return bool True if "ean13" has been set, false if not
     */
    public function hasEan13() : bool
    {
        return isset($this->ean13);
    }

    /**
     * Get a default "ean13" value, if any is available
     *
     * @return string|null Default "ean13" value or null if no default value is available
     */
    public function getDefaultEan13() : ?string
    {
        return null;
    }
}