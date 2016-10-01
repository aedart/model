<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Kind Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\KindAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait KindTrait
{
    /**
     * The kind of object this represents, e.g. human, organisation, group, individual...etc
     *
     * @var string|null
     */
    protected $kind = null;

    /**
     * Set kind
     *
     * @param string $kind The kind of object this represents, e.g. human, organisation, group, individual...etc
     *
     * @return void
     */
    public function setKind($kind)
    {
        $this->kind = (string) $kind;
    }

    /**
     * Get kind
     *
     * If no "kind" value has been set, this method will
     * set and return a default "kind" value,
     * if any such value is available
     *
     * @see getDefaultKind()
     *
     * @return string|null "kind" value or null if no "kind" value has been set
     */
    public function getKind()
    {
        if (!$this->hasKind() && $this->hasDefaultKind()) {
            $this->setKind($this->getDefaultKind());
        }
        return $this->kind;
    }

    /**
     * Get a default "kind" value, if any is available
     *
     * @return string|null A default "kind" value or null if no default value is available
     */
    public function getDefaultKind()
    {
        return null;
    }

    /**
     * Check if "kind" has been set
     *
     * @return bool True if "kind" value has been set, false if not
     */
    public function hasKind()
    {
        return isset($this->kind);
    }

    /**
     * Check if a default "kind" is available or not
     *
     * @return bool True of a default "kind" value is available, false if not
     */
    public function hasDefaultKind()
    {
        $default = $this->getDefaultKind();
        return isset($default);
    }
}