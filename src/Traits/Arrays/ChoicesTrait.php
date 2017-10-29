<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Arrays;

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
     * @param array|null $list Various choices that can be made
     *
     * @return self
     */
    public function setChoices(?array $list)
    {
        $this->choices = $list;

        return $this;
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
     * @return array|null choices or null if no choices has been set
     */
    public function getChoices() : ?array 
    {
        if ( ! $this->hasChoices()) {
            $this->setChoices($this->getDefaultChoices());
        }
        return $this->choices;
    }

    /**
     * Check if "choices" has been set
     *
     * @return bool True if "choices" has been set, false if not
     */
    public function hasChoices() : bool
    {
        return isset($this->choices);
    }

    /**
     * Get a default "choices" value, if any is available
     *
     * @return array|null Default "choices" value or null if no default value is available
     */
    public function getDefaultChoices() : ?array
    {
        return null;
    }
}