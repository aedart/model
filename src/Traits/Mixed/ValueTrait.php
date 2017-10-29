<?php
declare(strict_types=1);

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
     * Set value
     *
     * @param mixed $value The value of this component
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
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
     * @return mixed|null "value" value or null if no "value" value has been set
     */
    public function getValue()
    {
        if ( ! $this->hasValue()) {
            $this->setValue($this->getDefaultValue());
        }
        return $this->value;
    }

    /**
     * Check if "value" has been set
     *
     * @return bool True if "value" value has been set, false if not
     */
    public function hasValue() : bool
    {
        return isset($this->value);
    }

    /**
     * Get a default "value" value, if any is available
     *
     * @return mixed|null A default "value" value or null if no default value is available
     */
    public function getDefaultValue()
    {
        return null;
    }
}