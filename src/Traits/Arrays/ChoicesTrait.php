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
     * Set choices
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
    public function getChoices()
    {
        if (!$this->hasChoices() && $this->hasDefaultChoices()) {
            $this->setChoices($this->getDefaultChoices());
        }
        return $this->choices;
    }

    /**
     * Get a default "choices" value, if any is available
     *
     * @return array|null A default "choices" value or null if no default value is available
     */
    public function getDefaultChoices()
    {
        return null;
    }

    /**
     * Check if "choices" has been set
     *
     * @return bool True if "choices" value has been set, false if not
     */
    public function hasChoices()
    {
        return isset($this->choices);
    }

    /**
     * Check if a default "choices" is available or not
     *
     * @return bool True of a default "choices" value is available, false if not
     */
    public function hasDefaultChoices()
    {
        $default = $this->getDefaultChoices();
        return isset($default);
    }
}