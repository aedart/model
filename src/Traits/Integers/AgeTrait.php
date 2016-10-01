<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Age Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\AgeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait AgeTrait
{
    /**
     * Age of someone or something
     *
     * @var int|null
     */
    protected $age = null;

    /**
     * Set age
     *
     * @param int $age Age of someone or something
     *
     * @return void
     */
    public function setAge($age)
    {
        $this->age = (int) $age;
    }

    /**
     * Get age
     *
     * If no "age" value has been set, this method will
     * set and return a default "age" value,
     * if any such value is available
     *
     * @see getDefaultAge()
     *
     * @return int|null "age" value or null if no "age" value has been set
     */
    public function getAge()
    {
        if (!$this->hasAge() && $this->hasDefaultAge()) {
            $this->setAge($this->getDefaultAge());
        }
        return $this->age;
    }

    /**
     * Get a default "age" value, if any is available
     *
     * @return int|null A default "age" value or null if no default value is available
     */
    public function getDefaultAge()
    {
        return null;
    }

    /**
     * Check if "age" has been set
     *
     * @return bool True if "age" value has been set, false if not
     */
    public function hasAge()
    {
        return isset($this->age);
    }

    /**
     * Check if a default "age" is available or not
     *
     * @return bool True of a default "age" value is available, false if not
     */
    public function hasDefaultAge()
    {
        $default = $this->getDefaultAge();
        return isset($default);
    }
}