<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Iban Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IbanAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IbanTrait
{
    /**
     * International Bank Account Number (IBAN)
     *
     * @var string|null
     */
    protected $iban = null;

    /**
     * Set iban
     *
     * @param string $number International Bank Account Number (IBAN)
     *
     * @return void
     */
    public function setIban($number)
    {
        $this->iban = (string) $number;
    }

    /**
     * Get iban
     *
     * If no "iban" value has been set, this method will
     * set and return a default "iban" value,
     * if any such value is available
     *
     * @see getDefaultIban()
     *
     * @return string|null "iban" value or null if no "iban" value has been set
     */
    public function getIban()
    {
        if (!$this->hasIban() && $this->hasDefaultIban()) {
            $this->setIban($this->getDefaultIban());
        }
        return $this->iban;
    }

    /**
     * Get a default "iban" value, if any is available
     *
     * @return string|null A default "iban" value or null if no default value is available
     */
    public function getDefaultIban()
    {
        return null;
    }

    /**
     * Check if "iban" has been set
     *
     * @return bool True if "iban" value has been set, false if not
     */
    public function hasIban()
    {
        return isset($this->iban);
    }

    /**
     * Check if a default "iban" is available or not
     *
     * @return bool True of a default "iban" value is available, false if not
     */
    public function hasDefaultIban()
    {
        $default = $this->getDefaultIban();
        return isset($default);
    }
}