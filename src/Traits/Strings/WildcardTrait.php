<?php namespace Aedart\Model\Traits\Strings;

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
     * A wildcard identifier
     *
     * @var string|null
     */
    protected $wildcard = null;

    /**
     * Set wildcard
     *
     * @param string $identifier A wildcard identifier
     *
     * @return void
     */
    public function setWildcard($identifier)
    {
        $this->wildcard = (string) $identifier;
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
     * @return string|null "wildcard" value or null if no "wildcard" value has been set
     */
    public function getWildcard()
    {
        if (!$this->hasWildcard() && $this->hasDefaultWildcard()) {
            $this->setWildcard($this->getDefaultWildcard());
        }
        return $this->wildcard;
    }

    /**
     * Get a default "wildcard" value, if any is available
     *
     * @return string|null A default "wildcard" value or null if no default value is available
     */
    public function getDefaultWildcard()
    {
        return null;
    }

    /**
     * Check if "wildcard" has been set
     *
     * @return bool True if "wildcard" value has been set, false if not
     */
    public function hasWildcard()
    {
        return isset($this->wildcard);
    }

    /**
     * Check if a default "wildcard" is available or not
     *
     * @return bool True of a default "wildcard" value is available, false if not
     */
    public function hasDefaultWildcard()
    {
        $default = $this->getDefaultWildcard();
        return isset($default);
    }
}