<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Role Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\RoleAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait RoleTrait
{
    /**
     * Name or identifier of role
     *
     * @var string|null
     */
    protected $role = null;

    /**
     * Set role
     *
     * @param string|null $identifier Name or identifier of role
     *
     * @return self
     */
    public function setRole(?string $identifier)
    {
        $this->role = $identifier;

        return $this;
    }

    /**
     * Get role
     *
     * If no "role" value has been set, this method will
     * set and return a default "role" value,
     * if any such value is available
     *
     * @see getDefaultRole()
     *
     * @return string|null role or null if no role has been set
     */
    public function getRole() : ?string 
    {
        if ( ! $this->hasRole()) {
            $this->setRole($this->getDefaultRole());
        }
        return $this->role;
    }

    /**
     * Check if "role" has been set
     *
     * @return bool True if "role" has been set, false if not
     */
    public function hasRole() : bool
    {
        return isset($this->role);
    }

    /**
     * Get a default "role" value, if any is available
     *
     * @return string|null Default "role" value or null if no default value is available
     */
    public function getDefaultRole() : ?string
    {
        return null;
    }
}