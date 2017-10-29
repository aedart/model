<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Identifier to be used as username
     *
     * @var string|null
     */
    protected $username = null;

    /**
     * Set username
     *
     * @param string|null $identifier Identifier to be used as username
     *
     * @return self
     */
    public function setUsername(?string $identifier)
    {
        $this->username = $identifier;

        return $this;
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
     * @return string|null username or null if no username has been set
     */
    public function getUsername() : ?string 
    {
        if ( ! $this->hasUsername()) {
            $this->setUsername($this->getDefaultUsername());
        }
        return $this->username;
    }

    /**
     * Check if "username" has been set
     *
     * @return bool True if "username" has been set, false if not
     */
    public function hasUsername() : bool
    {
        return isset($this->username);
    }

    /**
     * Get a default "username" value, if any is available
     *
     * @return string|null Default "username" value or null if no default value is available
     */
    public function getDefaultUsername() : ?string
    {
        return null;
    }
}