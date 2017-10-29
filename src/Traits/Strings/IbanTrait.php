<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $number International Bank Account Number (IBAN)
     *
     * @return self
     */
    public function setIban(?string $number)
    {
        $this->iban = $number;

        return $this;
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
     * @return string|null iban or null if no iban has been set
     */
    public function getIban() : ?string 
    {
        if ( ! $this->hasIban()) {
            $this->setIban($this->getDefaultIban());
        }
        return $this->iban;
    }

    /**
     * Check if "iban" has been set
     *
     * @return bool True if "iban" has been set, false if not
     */
    public function hasIban() : bool
    {
        return isset($this->iban);
    }

    /**
     * Get a default "iban" value, if any is available
     *
     * @return string|null Default "iban" value or null if no default value is available
     */
    public function getDefaultIban() : ?string
    {
        return null;
    }
}