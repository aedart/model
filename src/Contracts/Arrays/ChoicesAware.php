<?php namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Choices Aware</h1>
 *
 * Component is aware of a list of choices that
 * can be made, proposed or asked for.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
interface ChoicesAware
{
    /**
     * Set the given choices
     *
     * @param array $list Various choices that can be made
     *
     * @return void
     */
    public function setChoices(array $list);

    /**
     * Get the given choices
     *
     * If no choices has been set, this method will
     * set and return a default choices, if any such
     * value is available
     *
     * @see getDefaultChoices()
     *
     * @return array|null choices or null if none choices has been set
     */
    public function getChoices();

    /**
     * Get a default choices value, if any is available
     *
     * @return array|null A default choices value or Null if no default value is available
     */
    public function getDefaultChoices();

    /**
     * Check if choices has been set
     *
     * @return bool True if choices has been set, false if not
     */
    public function hasChoices();

    /**
     * Check if a default choices is available or not
     *
     * @return bool True of a default choices is available, false if not
     */
    public function hasDefaultChoices();
}