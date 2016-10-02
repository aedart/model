<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $code Numeric or Alphanumeric postal code (zip code)
     *
     * @return void
     */
    public function setPostalCode($code)
    {
        $this->postalCode = (string) $code;
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
     * @return string|null "postal code" value or null if no "postal code" value has been set
     */
    public function getPostalCode()
    {
        if (!$this->hasPostalCode() && $this->hasDefaultPostalCode()) {
            $this->setPostalCode($this->getDefaultPostalCode());
        }
        return $this->postalCode;
    }

    /**
     * Get a default "postal code" value, if any is available
     *
     * @return string|null A default "postal code" value or null if no default value is available
     */
    public function getDefaultPostalCode()
    {
        return null;
    }

    /**
     * Check if "postal code" has been set
     *
     * @return bool True if "postal code" value has been set, false if not
     */
    public function hasPostalCode()
    {
        return isset($this->postalCode);
    }

    /**
     * Check if a default "postal code" is available or not
     *
     * @return bool True of a default "postal code" value is available, false if not
     */
    public function hasDefaultPostalCode()
    {
        $default = $this->getDefaultPostalCode();
        return isset($default);
    }
}