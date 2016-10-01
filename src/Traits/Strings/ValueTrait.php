<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Value Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ValueAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ValueTrait
{
    /**
     * The value of this component
     *
     * @var string|null
     */
    protected $value = null;

    /**
     * Set value
     *
     * @param string $value The value of this component
     *
     * @return void
     */
    public function setValue($value)
    {
        $this->value = (string) $value;
    }

    /**
     * Get value
     *
     * If no "value" value has been set, this method will
     * set and return a default "value" value,
     * if any such value is available
     *
     * @see getDefaultValue()
     *
     * @return string|null "value" value or null if no "value" value has been set
     */
    public function getValue()
    {
        if (!$this->hasValue() && $this->hasDefaultValue()) {
            $this->setValue($this->getDefaultValue());
        }
        return $this->value;
    }

    /**
     * Get a default "value" value, if any is available
     *
     * @return string|null A default "value" value or null if no default value is available
     */
    public function getDefaultValue()
    {
        return null;
    }

    /**
     * Check if "value" has been set
     *
     * @return bool True if "value" value has been set, false if not
     */
    public function hasValue()
    {
        return isset($this->value);
    }

    /**
     * Check if a default "value" is available or not
     *
     * @return bool True of a default "value" value is available, false if not
     */
    public function hasDefaultValue()
    {
        $default = $this->getDefaultValue();
        return isset($default);
    }
}