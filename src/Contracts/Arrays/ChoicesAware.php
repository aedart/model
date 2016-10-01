<?php namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Choices Aware</h1>
 *
 * Component is aware of a list of choices that
 * can be made, proposed or asked for.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface ChoicesAware
{
    /**
     * Set choices
     *
     * @param array $list Various choices that can be made
     *
     * @return void
     */
    public function setChoices(array $list);

    /**
     * Get choices
     *
     * If no "choices" value has been set, this method will
     * set and return a default "choices" value,
     * if any such value is available
     *
     * @see getDefaultChoices()
     *
     * @return array|null "choices" value or null if no "choices" value has been set
     */
    public function getChoices();

    /**
     * Get a default "choices" value, if any is available
     *
     * @return array|null A default "choices" value or null if no default value is available
     */
    public function getDefaultChoices();

    /**
     * Check if "choices" has been set
     *
     * @return bool True if "choices" value has been set, false if not
     */
    public function hasChoices();

    /**
     * Check if a default "choices" is available or not
     *
     * @return bool True of a default "choices" value is available, false if not
     */
    public function hasDefaultChoices();
}