<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Age Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\AgeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait AgeTrait {

    /**
     * Age
     *
     * @var int|null
     */
    protected $age = null;

    /**
     * Set the given age
     *
     * @param int $age Age
     *
     * @return void
     */
    public function setAge($age) {
        $this->age = (int) $age;
    }

    /**
     * Get the given age
     *
     * If no age has been set, this method will
     * set and return a default age, if any such
     * value is available
     *
     * @see getDefaultAge()
     *
     * @return int|null age or null if none age has been set
     */
    public function getAge() {
        if (!$this->hasAge() && $this->hasDefaultAge()) {
            $this->setAge($this->getDefaultAge());
        }
        return $this->age;
    }

    /**
     * Get a default age value, if any is available
     *
     * @return int|null A default age value or Null if no default value is available
     */
    public function getDefaultAge() {
        return null;
    }

    /**
     * Check if age has been set
     *
     * @return bool True if age has been set, false if not
     */
    public function hasAge() {
        if (!is_null($this->age)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default age is available or not
     *
     * @return bool True of a default age is available, false if not
     */
    public function hasDefaultAge() {
        if (!is_null($this->getDefaultAge())) {
            return true;
        }
        return false;
    }
}