<?php namespace Aedart\Model\Traits\Arrays;

/**
 * <h1>Choices Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Arrays\ChoicesAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
trait ChoicesTrait
{
    /**
     * Various choices that can be made
     *
     * @var array|null
     */
    protected $choices = null;

    /**
     * Set the given choices
     *
     * @param array $list Various choices that can be made
     *
     * @return void
     */
    public function setChoices(array $list)
    {
        $this->choices = $list;
    }

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
    public function getChoices()
    {
        if (!$this->hasChoices() && $this->hasDefaultChoices()) {
            $this->setChoices($this->getDefaultChoices());
        }
        return $this->choices;
    }

    /**
     * Get a default choices value, if any is available
     *
     * @return array|null A default choices value or Null if no default value is available
     */
    public function getDefaultChoices()
    {
        return null;
    }

    /**
     * Check if choices has been set
     *
     * @return bool True if choices has been set, false if not
     */
    public function hasChoices()
    {
        return !is_null($this->choices);
    }

    /**
     * Check if a default choices is available or not
     *
     * @return bool True of a default choices is available, false if not
     */
    public function hasDefaultChoices()
    {
        return !is_null($this->getDefaultChoices());
    }
}