<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Gender Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\GenderAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait GenderTrait
{
    /**
     * Gender (sex) identity of a person, animal or something
     *
     * @var string|null
     */
    protected $gender = null;

    /**
     * Set gender
     *
     * @param string $identity Gender (sex) identity of a person, animal or something
     *
     * @return void
     */
    public function setGender($identity)
    {
        $this->gender = (string) $identity;
    }

    /**
     * Get gender
     *
     * If no "gender" value has been set, this method will
     * set and return a default "gender" value,
     * if any such value is available
     *
     * @see getDefaultGender()
     *
     * @return string|null "gender" value or null if no "gender" value has been set
     */
    public function getGender()
    {
        if (!$this->hasGender() && $this->hasDefaultGender()) {
            $this->setGender($this->getDefaultGender());
        }
        return $this->gender;
    }

    /**
     * Get a default "gender" value, if any is available
     *
     * @return string|null A default "gender" value or null if no default value is available
     */
    public function getDefaultGender()
    {
        return null;
    }

    /**
     * Check if "gender" has been set
     *
     * @return bool True if "gender" value has been set, false if not
     */
    public function hasGender()
    {
        return isset($this->gender);
    }

    /**
     * Check if a default "gender" is available or not
     *
     * @return bool True of a default "gender" value is available, false if not
     */
    public function hasDefaultGender()
    {
        $default = $this->getDefaultGender();
        return isset($default);
    }
}