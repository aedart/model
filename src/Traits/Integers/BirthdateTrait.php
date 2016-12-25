<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Birthdate Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\BirthdateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait BirthdateTrait
{
    /**
     * Date of birth - UNIX timestamp
     *
     * @var int|null
     */
    protected $birthdate = null;

    /**
     * Set birthdate
     *
     * @param int $date Date of birth - UNIX timestamp
     *
     * @return void
     */
    public function setBirthdate($date)
    {
        $this->birthdate = (int) $date;
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
     * @return int|null "birthdate" value or null if no "birthdate" value has been set
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
     * @return int|null A default "birthdate" value or null if no default value is available
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