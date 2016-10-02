<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Class Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ClassAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ClassTrait
{
    /**
     * The class of something or perhaps a class path
     *
     * @var string|null
     */
    protected $class = null;

    /**
     * Set class
     *
     * @param string $class The class of something or perhaps a class path
     *
     * @return void
     */
    public function setClass($class)
    {
        $this->class = (string) $class;
    }

    /**
     * Get class
     *
     * If no "class" value has been set, this method will
     * set and return a default "class" value,
     * if any such value is available
     *
     * @see getDefaultClass()
     *
     * @return string|null "class" value or null if no "class" value has been set
     */
    public function getClass()
    {
        if (!$this->hasClass() && $this->hasDefaultClass()) {
            $this->setClass($this->getDefaultClass());
        }
        return $this->class;
    }

    /**
     * Get a default "class" value, if any is available
     *
     * @return string|null A default "class" value or null if no default value is available
     */
    public function getDefaultClass()
    {
        return null;
    }

    /**
     * Check if "class" has been set
     *
     * @return bool True if "class" value has been set, false if not
     */
    public function hasClass()
    {
        return isset($this->class);
    }

    /**
     * Check if a default "class" is available or not
     *
     * @return bool True of a default "class" value is available, false if not
     */
    public function hasDefaultClass()
    {
        $default = $this->getDefaultClass();
        return isset($default);
    }
}