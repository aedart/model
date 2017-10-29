<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

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
     * Date of birth
     *
     * @var int|null
     */
    protected $birthdate = null;

    /**
     * Set birthdate
     *
     * @param int|null $date Date of birth
     *
     * @return self
     */
    public function setBirthdate(?int $date)
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
     * @return int|null birthdate or null if no birthdate has been set
     */
    public function getBirthdate() : ?int 
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
     * @return int|null Default "birthdate" value or null if no default value is available
     */
    public function getDefaultBirthdate() : ?int
    {
        return null;
    }
}