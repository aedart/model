<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Middle Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\MiddleNameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait MiddleNameTrait
{
    /**
     * Middle Name or names of a person
     *
     * @var string|null
     */
    protected $middleName = null;

    /**
     * Set middle name
     *
     * @param string|null $name Middle Name or names of a person
     *
     * @return self
     */
    public function setMiddleName(?string $name)
    {
        $this->middleName = $name;

        return $this;
    }

    /**
     * Get middle name
     *
     * If no "middle name" value has been set, this method will
     * set and return a default "middle name" value,
     * if any such value is available
     *
     * @see getDefaultMiddleName()
     *
     * @return string|null middle name or null if no middle name has been set
     */
    public function getMiddleName() : ?string 
    {
        if ( ! $this->hasMiddleName()) {
            $this->setMiddleName($this->getDefaultMiddleName());
        }
        return $this->middleName;
    }

    /**
     * Check if "middle name" has been set
     *
     * @return bool True if "middle name" has been set, false if not
     */
    public function hasMiddleName() : bool
    {
        return isset($this->middleName);
    }

    /**
     * Get a default "middle name" value, if any is available
     *
     * @return string|null Default "middle name" value or null if no default value is available
     */
    public function getDefaultMiddleName() : ?string
    {
        return null;
    }
}