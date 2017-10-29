<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

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
     * @param int|null $age Age of someone or something
     *
     * @return self
     */
    public function setAge(?int $age)
    {
        $this->age = $age;

        return $this;
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
     * @return int|null age or null if no age has been set
     */
    public function getAge() : ?int 
    {
        if ( ! $this->hasAge()) {
            $this->setAge($this->getDefaultAge());
        }
        return $this->age;
    }

    /**
     * Check if "age" has been set
     *
     * @return bool True if "age" has been set, false if not
     */
    public function hasAge() : bool
    {
        return isset($this->age);
    }

    /**
     * Get a default "age" value, if any is available
     *
     * @return int|null Default "age" value or null if no default value is available
     */
    public function getDefaultAge() : ?int
    {
        return null;
    }
}