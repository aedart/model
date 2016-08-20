<?php
namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Pattern Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PatternAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PatternTrait
{
    /**
     * A search or regex pattern
     *
     * @var string|null
     */
    protected $pattern = null;

    /**
     * Set the given pattern
     *
     * @param string $pattern A search or regex pattern
     *
     * @return void
     */
    public function setPattern($pattern)
    {
        $this->pattern = (string) $pattern;
    }

    /**
     * Get the given pattern
     *
     * If no pattern has been set, this method will
     * set and return a default pattern, if any such
     * value is available
     *
     * @see getDefaultPattern()
     *
     * @return string|null pattern or null if none pattern has been set
     */
    public function getPattern()
    {
        if (!$this->hasPattern() && $this->hasDefaultPattern()) {
            $this->setPattern($this->getDefaultPattern());
        }
        return $this->pattern;
    }

    /**
     * Get a default pattern value, if any is available
     *
     * @return string|null A default pattern value or Null if no default value is available
     */
    public function getDefaultPattern()
    {
        return null;
    }

    /**
     * Check if pattern has been set
     *
     * @return bool True if pattern has been set, false if not
     */
    public function hasPattern()
    {
        return !is_null($this->pattern);
    }

    /**
     * Check if a default pattern is available or not
     *
     * @return bool True of a default pattern is available, false if not
     */
    public function hasDefaultPattern()
    {
        return !is_null($this->getDefaultPattern());
    }
}