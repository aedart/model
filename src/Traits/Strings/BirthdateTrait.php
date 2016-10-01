<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $date Date of birth
     *
     * @return void
     */
    public function setBirthdate($date)
    {
        $this->birthdate = (string) $date;
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
     * @return string|null "birthdate" value or null if no "birthdate" value has been set
     */
    public function getBirthdate()
    {
        if (!$this->hasBirthdate() && $this->hasDefaultBirthdate()) {
            $this->setBirthdate($this->getDefaultBirthdate());
        }
        return $this->birthdate;
    }

    /**
     * Get a default "birthdate" value, if any is available
     *
     * @return string|null A default "birthdate" value or null if no default value is available
     */
    public function getDefaultBirthdate()
    {
        return null;
    }

    /**
     * Check if "birthdate" has been set
     *
     * @return bool True if "birthdate" value has been set, false if not
     */
    public function hasBirthdate()
    {
        return isset($this->birthdate);
    }

    /**
     * Check if a default "birthdate" is available or not
     *
     * @return bool True of a default "birthdate" value is available, false if not
     */
    public function hasDefaultBirthdate()
    {
        $default = $this->getDefaultBirthdate();
        return isset($default);
    }
}