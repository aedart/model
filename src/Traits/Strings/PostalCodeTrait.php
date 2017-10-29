<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Postal Code Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PostalCodeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PostalCodeTrait
{
    /**
     * Numeric or Alphanumeric postal code (zip code)
     *
     * @var string|null
     */
    protected $postalCode = null;

    /**
     * Set postal code
     *
     * @param string|null $code Numeric or Alphanumeric postal code (zip code)
     *
     * @return self
     */
    public function setPostalCode(?string $code)
    {
        $this->postalCode = $code;

        return $this;
    }

    /**
     * Get postal code
     *
     * If no "postal code" value has been set, this method will
     * set and return a default "postal code" value,
     * if any such value is available
     *
     * @see getDefaultPostalCode()
     *
     * @return string|null postal code or null if no postal code has been set
     */
    public function getPostalCode() : ?string 
    {
        if ( ! $this->hasPostalCode()) {
            $this->setPostalCode($this->getDefaultPostalCode());
        }
        return $this->postalCode;
    }

    /**
     * Check if "postal code" has been set
     *
     * @return bool True if "postal code" has been set, false if not
     */
    public function hasPostalCode() : bool
    {
        return isset($this->postalCode);
    }

    /**
     * Get a default "postal code" value, if any is available
     *
     * @return string|null Default "postal code" value or null if no default value is available
     */
    public function getDefaultPostalCode() : ?string
    {
        return null;
    }
}