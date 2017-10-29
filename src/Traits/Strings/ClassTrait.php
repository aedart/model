<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $class The class of something or perhaps a class path
     *
     * @return self
     */
    public function setClass(?string $class)
    {
        $this->class = $class;

        return $this;
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
     * @return string|null class or null if no class has been set
     */
    public function getClass() : ?string 
    {
        if ( ! $this->hasClass()) {
            $this->setClass($this->getDefaultClass());
        }
        return $this->class;
    }

    /**
     * Check if "class" has been set
     *
     * @return bool True if "class" has been set, false if not
     */
    public function hasClass() : bool
    {
        return isset($this->class);
    }

    /**
     * Get a default "class" value, if any is available
     *
     * @return string|null Default "class" value or null if no default value is available
     */
    public function getDefaultClass() : ?string
    {
        return null;
    }
}