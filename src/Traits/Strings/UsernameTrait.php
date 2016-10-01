<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Username Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\UsernameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait UsernameTrait
{
    /**
     * Identifier to be used as a username
     *
     * @var string|null
     */
    protected $username = null;

    /**
     * Set username
     *
     * @param string $identifier Identifier to be used as a username
     *
     * @return void
     */
    public function setUsername($identifier)
    {
        $this->username = (string) $identifier;
    }

    /**
     * Get username
     *
     * If no "username" value has been set, this method will
     * set and return a default "username" value,
     * if any such value is available
     *
     * @see getDefaultUsername()
     *
     * @return string|null "username" value or null if no "username" value has been set
     */
    public function getUsername()
    {
        if (!$this->hasUsername() && $this->hasDefaultUsername()) {
            $this->setUsername($this->getDefaultUsername());
        }
        return $this->username;
    }

    /**
     * Get a default "username" value, if any is available
     *
     * @return string|null A default "username" value or null if no default value is available
     */
    public function getDefaultUsername()
    {
        return null;
    }

    /**
     * Check if "username" has been set
     *
     * @return bool True if "username" value has been set, false if not
     */
    public function hasUsername()
    {
        return isset($this->username);
    }

    /**
     * Check if a default "username" is available or not
     *
     * @return bool True of a default "username" value is available, false if not
     */
    public function hasDefaultUsername()
    {
        $default = $this->getDefaultUsername();
        return isset($default);
    }
}