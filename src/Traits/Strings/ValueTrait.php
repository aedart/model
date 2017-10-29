<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Value
     *
     * @var string|null
     */
    protected $value = null;

    /**
     * Set value
     *
     * @param string|null $value Value
     *
     * @return self
     */
    public function setValue(?string $value)
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
     * @return string|null value or null if no value has been set
     */
    public function getValue() : ?string 
    {
        if ( ! $this->hasValue()) {
            $this->setValue($this->getDefaultValue());
        }
        return $this->value;
    }

    /**
     * Check if "value" has been set
     *
     * @return bool True if "value" has been set, false if not
     */
    public function hasValue() : bool
    {
        return isset($this->value);
    }

    /**
     * Get a default "value" value, if any is available
     *
     * @return string|null Default "value" value or null if no default value is available
     */
    public function getDefaultValue() : ?string
    {
        return null;
    }
}