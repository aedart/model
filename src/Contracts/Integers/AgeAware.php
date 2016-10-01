<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Age Aware</h1>
 *
 * Components implementing this interface are aware of a someone's or somethings age,
 * stated in numeric value... Depending upon context, age can be days, months,
 * years, and so on.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface AgeAware
{
    /**
     * Set age
     *
     * @param int $age Age of someone or something
     *
     * @return void
     */
    public function setAge($age);

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
    public function getAge();

    /**
     * Get a default "age" value, if any is available
     *
     * @return int|null A default "age" value or null if no default value is available
     */
    public function getDefaultAge();

    /**
     * Check if "age" has been set
     *
     * @return bool True if "age" value has been set, false if not
     */
    public function hasAge();

    /**
     * Check if a default "age" is available or not
     *
     * @return bool True of a default "age" value is available, false if not
     */
    public function hasDefaultAge();
}