<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $name First name (given name) or forename of a person
     *
     * @return self
     */
    public function setFirstName(?string $name)
    {
        $this->firstName = $name;

        return $this;
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
     * @return string|null first name or null if no first name has been set
     */
    public function getFirstName() : ?string 
    {
        if ( ! $this->hasFirstName()) {
            $this->setFirstName($this->getDefaultFirstName());
        }
        return $this->firstName;
    }

    /**
     * Check if "first name" has been set
     *
     * @return bool True if "first name" has been set, false if not
     */
    public function hasFirstName() : bool
    {
        return isset($this->firstName);
    }

    /**
     * Get a default "first name" value, if any is available
     *
     * @return string|null Default "first name" value or null if no default value is available
     */
    public function getDefaultFirstName() : ?string
    {
        return null;
    }
}