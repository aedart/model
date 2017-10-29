<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $name Label name
     *
     * @return self
     */
    public function setLabel(?string $name)
    {
        $this->label = $name;

        return $this;
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
     * @return string|null label or null if no label has been set
     */
    public function getLabel() : ?string 
    {
        if ( ! $this->hasLabel()) {
            $this->setLabel($this->getDefaultLabel());
        }
        return $this->label;
    }

    /**
     * Check if "label" has been set
     *
     * @return bool True if "label" has been set, false if not
     */
    public function hasLabel() : bool
    {
        return isset($this->label);
    }

    /**
     * Get a default "label" value, if any is available
     *
     * @return string|null Default "label" value or null if no default value is available
     */
    public function getDefaultLabel() : ?string
    {
        return null;
    }
}