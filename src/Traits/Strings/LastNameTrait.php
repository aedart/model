<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Last Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LastNameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LastNameTrait
{
    /**
     * Last Name (surname) or family name of a person
     *
     * @var string|null
     */
    protected $lastName = null;

    /**
     * Set last name
     *
     * @param string $name Last Name (surname) or family name of a person
     *
     * @return void
     */
    public function setLastName($name)
    {
        $this->lastName = (string) $name;
    }

    /**
     * Get last name
     *
     * If no "last name" value has been set, this method will
     * set and return a default "last name" value,
     * if any such value is available
     *
     * @see getDefaultLastName()
     *
     * @return string|null "last name" value or null if no "last name" value has been set
     */
    public function getLastName()
    {
        if (!$this->hasLastName() && $this->hasDefaultLastName()) {
            $this->setLastName($this->getDefaultLastName());
        }
        return $this->lastName;
    }

    /**
     * Get a default "last name" value, if any is available
     *
     * @return string|null A default "last name" value or null if no default value is available
     */
    public function getDefaultLastName()
    {
        return null;
    }

    /**
     * Check if "last name" has been set
     *
     * @return bool True if "last name" value has been set, false if not
     */
    public function hasLastName()
    {
        return isset($this->lastName);
    }

    /**
     * Check if a default "last name" is available or not
     *
     * @return bool True of a default "last name" value is available, false if not
     */
    public function hasDefaultLastName()
    {
        $default = $this->getDefaultLastName();
        return isset($default);
    }
}