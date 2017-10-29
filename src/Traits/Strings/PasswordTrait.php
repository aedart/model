<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $password Password
     *
     * @return self
     */
    public function setPassword(?string $password)
    {
        $this->password = $password;

        return $this;
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
     * @return string|null password or null if no password has been set
     */
    public function getPassword() : ?string 
    {
        if ( ! $this->hasPassword()) {
            $this->setPassword($this->getDefaultPassword());
        }
        return $this->password;
    }

    /**
     * Check if "password" has been set
     *
     * @return bool True if "password" has been set, false if not
     */
    public function hasPassword() : bool
    {
        return isset($this->password);
    }

    /**
     * Get a default "password" value, if any is available
     *
     * @return string|null Default "password" value or null if no default value is available
     */
    public function getDefaultPassword() : ?string
    {
        return null;
    }
}