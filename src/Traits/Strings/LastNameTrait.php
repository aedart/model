<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $name Last Name (surname) or family name of a person
     *
     * @return self
     */
    public function setLastName(?string $name)
    {
        $this->lastName = $name;

        return $this;
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
     * @return string|null last name or null if no last name has been set
     */
    public function getLastName() : ?string 
    {
        if ( ! $this->hasLastName()) {
            $this->setLastName($this->getDefaultLastName());
        }
        return $this->lastName;
    }

    /**
     * Check if "last name" has been set
     *
     * @return bool True if "last name" has been set, false if not
     */
    public function hasLastName() : bool
    {
        return isset($this->lastName);
    }

    /**
     * Get a default "last name" value, if any is available
     *
     * @return string|null Default "last name" value or null if no default value is available
     */
    public function getDefaultLastName() : ?string
    {
        return null;
    }
}