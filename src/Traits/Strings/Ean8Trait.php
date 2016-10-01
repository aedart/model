<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $ean8 International Article Number (EAN), 8-digit
     *
     * @return void
     */
    public function setEan8($ean8)
    {
        $this->ean8 = (string) $ean8;
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
     * @return string|null "ean8" value or null if no "ean8" value has been set
     */
    public function getEan8()
    {
        if (!$this->hasEan8() && $this->hasDefaultEan8()) {
            $this->setEan8($this->getDefaultEan8());
        }
        return $this->ean8;
    }

    /**
     * Get a default "ean8" value, if any is available
     *
     * @return string|null A default "ean8" value or null if no default value is available
     */
    public function getDefaultEan8()
    {
        return null;
    }

    /**
     * Check if "ean8" has been set
     *
     * @return bool True if "ean8" value has been set, false if not
     */
    public function hasEan8()
    {
        return isset($this->ean8);
    }

    /**
     * Check if a default "ean8" is available or not
     *
     * @return bool True of a default "ean8" value is available, false if not
     */
    public function hasDefaultEan8()
    {
        $default = $this->getDefaultEan8();
        return isset($default);
    }
}