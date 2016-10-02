<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a role or the role that someone or something has
     *
     * @var string|null
     */
    protected $role = null;

    /**
     * Set role
     *
     * @param string $name Name of a role or the role that someone or something has
     *
     * @return void
     */
    public function setRole($name)
    {
        $this->role = (string) $name;
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
     * @return string|null "role" value or null if no "role" value has been set
     */
    public function getRole()
    {
        if (!$this->hasRole() && $this->hasDefaultRole()) {
            $this->setRole($this->getDefaultRole());
        }
        return $this->role;
    }

    /**
     * Get a default "role" value, if any is available
     *
     * @return string|null A default "role" value or null if no default value is available
     */
    public function getDefaultRole()
    {
        return null;
    }

    /**
     * Check if "role" has been set
     *
     * @return bool True if "role" value has been set, false if not
     */
    public function hasRole()
    {
        return isset($this->role);
    }

    /**
     * Check if a default "role" is available or not
     *
     * @return bool True of a default "role" value is available, false if not
     */
    public function hasDefaultRole()
    {
        $default = $this->getDefaultRole();
        return isset($default);
    }
}