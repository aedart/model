<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $kind The kind of object this represents, e.g. human, organisation, group, individual...etc
     *
     * @return self
     */
    public function setKind(?string $kind)
    {
        $this->kind = $kind;

        return $this;
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
     * @return string|null kind or null if no kind has been set
     */
    public function getKind() : ?string 
    {
        if ( ! $this->hasKind()) {
            $this->setKind($this->getDefaultKind());
        }
        return $this->kind;
    }

    /**
     * Check if "kind" has been set
     *
     * @return bool True if "kind" has been set, false if not
     */
    public function hasKind() : bool
    {
        return isset($this->kind);
    }

    /**
     * Get a default "kind" value, if any is available
     *
     * @return string|null Default "kind" value or null if no default value is available
     */
    public function getDefaultKind() : ?string
    {
        return null;
    }
}