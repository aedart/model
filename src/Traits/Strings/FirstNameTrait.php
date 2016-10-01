<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>First Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\FirstNameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait FirstNameTrait
{
    /**
     * First name (given name) or forename of a person
     *
     * @var string|null
     */
    protected $firstName = null;

    /**
     * Set first name
     *
     * @param string $name First name (given name) or forename of a person
     *
     * @return void
     */
    public function setFirstName($name)
    {
        $this->firstName = (string) $name;
    }

    /**
     * Get first name
     *
     * If no "first name" value has been set, this method will
     * set and return a default "first name" value,
     * if any such value is available
     *
     * @see getDefaultFirstName()
     *
     * @return string|null "first name" value or null if no "first name" value has been set
     */
    public function getFirstName()
    {
        if (!$this->hasFirstName() && $this->hasDefaultFirstName()) {
            $this->setFirstName($this->getDefaultFirstName());
        }
        return $this->firstName;
    }

    /**
     * Get a default "first name" value, if any is available
     *
     * @return string|null A default "first name" value or null if no default value is available
     */
    public function getDefaultFirstName()
    {
        return null;
    }

    /**
     * Check if "first name" has been set
     *
     * @return bool True if "first name" value has been set, false if not
     */
    public function hasFirstName()
    {
        return isset($this->firstName);
    }

    /**
     * Check if a default "first name" is available or not
     *
     * @return bool True of a default "first name" value is available, false if not
     */
    public function hasDefaultFirstName()
    {
        $default = $this->getDefaultFirstName();
        return isset($default);
    }
}