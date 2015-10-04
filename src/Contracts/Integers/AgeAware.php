<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Age Aware</h1>
 *
 * Components implementing this interface are aware of a someone's or somethings age,
 * stated in numeric value... Depending upon context, age can be days, months,
 * years, and so on.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
interface AgeAware {

    /**
     * Set the given age
     *
     * @param int $age Age
     *
     * @return void
     */
    public function setAge($age);

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
    public function getAge();

    /**
     * Get a default age value, if any is available
     *
     * @return int|null A default age value or Null if no default value is available
     */
    public function getDefaultAge();

    /**
     * Check if age has been set
     *
     * @return bool True if age has been set, false if not
     */
    public function hasAge();

    /**
     * Check if a default age is available or not
     *
     * @return bool True of a default age is available, false if not
     */
    public function hasDefaultAge();
}