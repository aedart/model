<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Birthdate Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\BirthdateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait BirthdateTrait
{
    /**
     * Date of birth
     *
     * @var string|null
     */
    protected $birthdate = null;

    /**
     * Set birthdate
     *
     * @param string|null $date Date of birth
     *
     * @return self
     */
    public function setBirthdate(?string $date)
    {
        $this->birthdate = $date;

        return $this;
    }

    /**
     * Get birthdate
     *
     * If no "birthdate" value has been set, this method will
     * set and return a default "birthdate" value,
     * if any such value is available
     *
     * @see getDefaultBirthdate()
     *
     * @return string|null birthdate or null if no birthdate has been set
     */
    public function getBirthdate() : ?string 
    {
        if ( ! $this->hasBirthdate()) {
            $this->setBirthdate($this->getDefaultBirthdate());
        }
        return $this->birthdate;
    }

    /**
     * Check if "birthdate" has been set
     *
     * @return bool True if "birthdate" has been set, false if not
     */
    public function hasBirthdate() : bool
    {
        return isset($this->birthdate);
    }

    /**
     * Get a default "birthdate" value, if any is available
     *
     * @return string|null Default "birthdate" value or null if no default value is available
     */
    public function getDefaultBirthdate() : ?string
    {
        return null;
    }
}