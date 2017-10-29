<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Wildcard Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\WildcardAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait WildcardTrait
{
    /**
     * Wildcard identifier
     *
     * @var string|null
     */
    protected $wildcard = null;

    /**
     * Set wildcard
     *
     * @param string|null $identifier Wildcard identifier
     *
     * @return self
     */
    public function setWildcard(?string $identifier)
    {
        $this->wildcard = $identifier;

        return $this;
    }

    /**
     * Get wildcard
     *
     * If no "wildcard" value has been set, this method will
     * set and return a default "wildcard" value,
     * if any such value is available
     *
     * @see getDefaultWildcard()
     *
     * @return string|null wildcard or null if no wildcard has been set
     */
    public function getWildcard() : ?string 
    {
        if ( ! $this->hasWildcard()) {
            $this->setWildcard($this->getDefaultWildcard());
        }
        return $this->wildcard;
    }

    /**
     * Check if "wildcard" has been set
     *
     * @return bool True if "wildcard" has been set, false if not
     */
    public function hasWildcard() : bool
    {
        return isset($this->wildcard);
    }

    /**
     * Get a default "wildcard" value, if any is available
     *
     * @return string|null Default "wildcard" value or null if no default value is available
     */
    public function getDefaultWildcard() : ?string
    {
        return null;
    }
}