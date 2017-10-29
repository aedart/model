<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $ean International Article Number (EAN)
     *
     * @return self
     */
    public function setEan(?string $ean)
    {
        $this->ean = $ean;

        return $this;
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
     * @return string|null ean or null if no ean has been set
     */
    public function getEan() : ?string 
    {
        if ( ! $this->hasEan()) {
            $this->setEan($this->getDefaultEan());
        }
        return $this->ean;
    }

    /**
     * Check if "ean" has been set
     *
     * @return bool True if "ean" has been set, false if not
     */
    public function hasEan() : bool
    {
        return isset($this->ean);
    }

    /**
     * Get a default "ean" value, if any is available
     *
     * @return string|null Default "ean" value or null if no default value is available
     */
    public function getDefaultEan() : ?string
    {
        return null;
    }
}