<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $name Middle Name or names of a person
     *
     * @return void
     */
    public function setMiddleName($name)
    {
        $this->middleName = (string) $name;
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
     * @return string|null "middle name" value or null if no "middle name" value has been set
     */
    public function getMiddleName()
    {
        if (!$this->hasMiddleName() && $this->hasDefaultMiddleName()) {
            $this->setMiddleName($this->getDefaultMiddleName());
        }
        return $this->middleName;
    }

    /**
     * Get a default "middle name" value, if any is available
     *
     * @return string|null A default "middle name" value or null if no default value is available
     */
    public function getDefaultMiddleName()
    {
        return null;
    }

    /**
     * Check if "middle name" has been set
     *
     * @return bool True if "middle name" value has been set, false if not
     */
    public function hasMiddleName()
    {
        return isset($this->middleName);
    }

    /**
     * Check if a default "middle name" is available or not
     *
     * @return bool True of a default "middle name" value is available, false if not
     */
    public function hasDefaultMiddleName()
    {
        $default = $this->getDefaultMiddleName();
        return isset($default);
    }
}