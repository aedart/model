<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Username Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\UsernameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait UsernameTrait {

    /**
     * Username
     *
     * @var string|null
     */
    protected $username = null;

    /**
     * Set the given username
     *
     * @param string $identifier Username
     *
     * @return void
     */
    public function setUsername($identifier) {
        $this->username = (string) $identifier;
    }

    /**
     * Get the given username
     *
     * If no username has been set, this method will
     * set and return a default username, if any such
     * value is available
     *
     * @see getDefaultUsername()
     *
     * @return string|null username or null if none username has been set
     */
    public function getUsername() {
        if (!$this->hasUsername() && $this->hasDefaultUsername()) {
            $this->setUsername($this->getDefaultUsername());
        }
        return $this->username;
    }

    /**
     * Get a default username value, if any is available
     *
     * @return string|null A default username value or Null if no default value is available
     */
    public function getDefaultUsername() {
        return null;
    }

    /**
     * Check if username has been set
     *
     * @return bool True if username has been set, false if not
     */
    public function hasUsername() {
        if (!is_null($this->username)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default username is available or not
     *
     * @return bool True of a default username is available, false if not
     */
    public function hasDefaultUsername() {
        if (!is_null($this->getDefaultUsername())) {
            return true;
        }
        return false;
    }
}