<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Age Aware</h1>
 *
 * Component is aware of a int "age" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface AgeAware
{
    /**
     * Set age
     *
     * @param int|null $age Age of someone or something
     *
     * @return self
     */
    public function setAge(?int $age);

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
    public function getAge() : ?int ;

    /**
     * Check if "age" has been set
     *
     * @return bool True if "age" has been set, false if not
     */
    public function hasAge() : bool;

    /**
     * Get a default "age" value, if any is available
     *
     * @return int|null Default "age" value or null if no default value is available
     */
    public function getDefaultAge() : ?int;
}