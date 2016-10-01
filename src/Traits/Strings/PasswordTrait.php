<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Password Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PasswordAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PasswordTrait
{
    /**
     * Password
     *
     * @var string|null
     */
    protected $password = null;

    /**
     * Set password
     *
     * @param string $password Password
     *
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = (string) $password;
    }

    /**
     * Get password
     *
     * If no "password" value has been set, this method will
     * set and return a default "password" value,
     * if any such value is available
     *
     * @see getDefaultPassword()
     *
     * @return string|null "password" value or null if no "password" value has been set
     */
    public function getPassword()
    {
        if (!$this->hasPassword() && $this->hasDefaultPassword()) {
            $this->setPassword($this->getDefaultPassword());
        }
        return $this->password;
    }

    /**
     * Get a default "password" value, if any is available
     *
     * @return string|null A default "password" value or null if no default value is available
     */
    public function getDefaultPassword()
    {
        return null;
    }

    /**
     * Check if "password" has been set
     *
     * @return bool True if "password" value has been set, false if not
     */
    public function hasPassword()
    {
        return isset($this->password);
    }

    /**
     * Check if a default "password" is available or not
     *
     * @return bool True of a default "password" value is available, false if not
     */
    public function hasDefaultPassword()
    {
        $default = $this->getDefaultPassword();
        return isset($default);
    }
}