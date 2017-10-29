<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Group Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\GroupAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait GroupTrait
{
    /**
     * Group identifier
     *
     * @var int|null
     */
    protected $group = null;

    /**
     * Set group
     *
     * @param int|null $identity Group identifier
     *
     * @return self
     */
    public function setGroup(?int $identity)
    {
        $this->group = $identity;

        return $this;
    }

    /**
     * Get group
     *
     * If no "group" value has been set, this method will
     * set and return a default "group" value,
     * if any such value is available
     *
     * @see getDefaultGroup()
     *
     * @return int|null group or null if no group has been set
     */
    public function getGroup() : ?int 
    {
        if ( ! $this->hasGroup()) {
            $this->setGroup($this->getDefaultGroup());
        }
        return $this->group;
    }

    /**
     * Check if "group" has been set
     *
     * @return bool True if "group" has been set, false if not
     */
    public function hasGroup() : bool
    {
        return isset($this->group);
    }

    /**
     * Get a default "group" value, if any is available
     *
     * @return int|null Default "group" value or null if no default value is available
     */
    public function getDefaultGroup() : ?int
    {
        return null;
    }
}