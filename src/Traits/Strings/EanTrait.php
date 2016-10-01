<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Ean Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\EanAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait EanTrait
{
    /**
     * International Article Number (EAN)
     *
     * @var string|null
     */
    protected $ean = null;

    /**
     * Set ean
     *
     * @param string $ean International Article Number (EAN)
     *
     * @return void
     */
    public function setEan($ean)
    {
        $this->ean = (string) $ean;
    }

    /**
     * Get ean
     *
     * If no "ean" value has been set, this method will
     * set and return a default "ean" value,
     * if any such value is available
     *
     * @see getDefaultEan()
     *
     * @return string|null "ean" value or null if no "ean" value has been set
     */
    public function getEan()
    {
        if (!$this->hasEan() && $this->hasDefaultEan()) {
            $this->setEan($this->getDefaultEan());
        }
        return $this->ean;
    }

    /**
     * Get a default "ean" value, if any is available
     *
     * @return string|null A default "ean" value or null if no default value is available
     */
    public function getDefaultEan()
    {
        return null;
    }

    /**
     * Check if "ean" has been set
     *
     * @return bool True if "ean" value has been set, false if not
     */
    public function hasEan()
    {
        return isset($this->ean);
    }

    /**
     * Check if a default "ean" is available or not
     *
     * @return bool True of a default "ean" value is available, false if not
     */
    public function hasDefaultEan()
    {
        $default = $this->getDefaultEan();
        return isset($default);
    }
}