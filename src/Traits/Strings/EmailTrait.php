<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Email Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\EmailAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait EmailTrait
{
    /**
     * Email
     *
     * @var string|null
     */
    protected $email = null;

    /**
     * Set email
     *
     * @param string $email Email
     *
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = (string) $email;
    }

    /**
     * Get email
     *
     * If no "email" value has been set, this method will
     * set and return a default "email" value,
     * if any such value is available
     *
     * @see getDefaultEmail()
     *
     * @return string|null "email" value or null if no "email" value has been set
     */
    public function getEmail()
    {
        if (!$this->hasEmail() && $this->hasDefaultEmail()) {
            $this->setEmail($this->getDefaultEmail());
        }
        return $this->email;
    }

    /**
     * Get a default "email" value, if any is available
     *
     * @return string|null A default "email" value or null if no default value is available
     */
    public function getDefaultEmail()
    {
        return null;
    }

    /**
     * Check if "email" has been set
     *
     * @return bool True if "email" value has been set, false if not
     */
    public function hasEmail()
    {
        return isset($this->email);
    }

    /**
     * Check if a default "email" is available or not
     *
     * @return bool True of a default "email" value is available, false if not
     */
    public function hasDefaultEmail()
    {
        $default = $this->getDefaultEmail();
        return isset($default);
    }
}