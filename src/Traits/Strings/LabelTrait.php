<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Label Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LabelAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LabelTrait
{
    /**
     * Label name
     *
     * @var string|null
     */
    protected $label = null;

    /**
     * Set label
     *
     * @param string $name Label name
     *
     * @return void
     */
    public function setLabel($name)
    {
        $this->label = (string) $name;
    }

    /**
     * Get label
     *
     * If no "label" value has been set, this method will
     * set and return a default "label" value,
     * if any such value is available
     *
     * @see getDefaultLabel()
     *
     * @return string|null "label" value or null if no "label" value has been set
     */
    public function getLabel()
    {
        if (!$this->hasLabel() && $this->hasDefaultLabel()) {
            $this->setLabel($this->getDefaultLabel());
        }
        return $this->label;
    }

    /**
     * Get a default "label" value, if any is available
     *
     * @return string|null A default "label" value or null if no default value is available
     */
    public function getDefaultLabel()
    {
        return null;
    }

    /**
     * Check if "label" has been set
     *
     * @return bool True if "label" value has been set, false if not
     */
    public function hasLabel()
    {
        return isset($this->label);
    }

    /**
     * Check if a default "label" is available or not
     *
     * @return bool True of a default "label" value is available, false if not
     */
    public function hasDefaultLabel()
    {
        $default = $this->getDefaultLabel();
        return isset($default);
    }
}