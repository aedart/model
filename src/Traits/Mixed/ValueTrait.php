<?php
namespace Aedart\Model\Traits\Mixed;

/**
 * <h1>Value Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Mixed\ValueAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Mixed
 */
trait ValueTrait
{
    /**
     * The value of this component
     *
     * @var mixed|null
     */
    protected $value = null;

    /**
     * Set the given value
     *
     * @param mixed $value The value of this component
     *
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get the given value
     *
     * If no value has been set, this method will
     * set and return a default value, if any such
     * value is available
     *
     * @see getDefaultValue()
     *
     * @return mixed|null value or null if none value has been set
     */
    public function getValue()
    {
        if (!$this->hasValue() && $this->hasDefaultValue()) {
            $this->setValue($this->getDefaultValue());
        }
        return $this->value;
    }

    /**
     * Get a default value value, if any is available
     *
     * @return mixed|null A default value value or Null if no default value is available
     */
    public function getDefaultValue()
    {
        return null;
    }

    /**
     * Check if value has been set
     *
     * @return bool True if value has been set, false if not
     */
    public function hasValue()
    {
        return !is_null($this->value);
    }

    /**
     * Check if a default value is available or not
     *
     * @return bool True of a default value is available, false if not
     */
    public function hasDefaultValue()
    {
        return !is_null($this->getDefaultValue());
    }
}