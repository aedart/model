<?php
declare(strict_types=1);

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
     * Some kind of a pattern, e.g. search or regex
     *
     * @var string|null
     */
    protected $pattern = null;

    /**
     * Set pattern
     *
     * @param string|null $pattern Some kind of a pattern, e.g. search or regex
     *
     * @return self
     */
    public function setPattern(?string $pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * Get pattern
     *
     * If no "pattern" value has been set, this method will
     * set and return a default "pattern" value,
     * if any such value is available
     *
     * @see getDefaultPattern()
     *
     * @return string|null pattern or null if no pattern has been set
     */
    public function getPattern() : ?string 
    {
        if ( ! $this->hasPattern()) {
            $this->setPattern($this->getDefaultPattern());
        }
        return $this->pattern;
    }

    /**
     * Check if "pattern" has been set
     *
     * @return bool True if "pattern" has been set, false if not
     */
    public function hasPattern() : bool
    {
        return isset($this->pattern);
    }

    /**
     * Get a default "pattern" value, if any is available
     *
     * @return string|null Default "pattern" value or null if no default value is available
     */
    public function getDefaultPattern() : ?string
    {
        return null;
    }
}