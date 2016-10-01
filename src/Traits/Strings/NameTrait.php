<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\NameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait NameTrait
{
    /**
     * Name
     *
     * @var string|null
     */
    protected $name = null;

    /**
     * Set name
     *
     * @param string $name Name
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = (string) $name;
    }

    /**
     * Get name
     *
     * If no "name" value has been set, this method will
     * set and return a default "name" value,
     * if any such value is available
     *
     * @see getDefaultName()
     *
     * @return string|null "name" value or null if no "name" value has been set
     */
    public function getName()
    {
        if (!$this->hasName() && $this->hasDefaultName()) {
            $this->setName($this->getDefaultName());
        }
        return $this->name;
    }

    /**
     * Get a default "name" value, if any is available
     *
     * @return string|null A default "name" value or null if no default value is available
     */
    public function getDefaultName()
    {
        return null;
    }

    /**
     * Check if "name" has been set
     *
     * @return bool True if "name" value has been set, false if not
     */
    public function hasName()
    {
        return isset($this->name);
    }

    /**
     * Check if a default "name" is available or not
     *
     * @return bool True of a default "name" value is available, false if not
     */
    public function hasDefaultName()
    {
        $default = $this->getDefaultName();
        return isset($default);
    }
}