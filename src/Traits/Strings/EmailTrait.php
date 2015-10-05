<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Email Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\EmailAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait EmailTrait {

    /**
     * Email
     *
     * @var string|null
     */
    protected $email = null;

    /**
     * Set the given email
     *
     * @param string $email Email
     *
     * @return void
     */
    public function setEmail($email) {
        $this->email = (string) $email;
    }

    /**
     * Get the given email
     *
     * If no email has been set, this method will
     * set and return a default email, if any such
     * value is available
     *
     * @see getDefaultEmail()
     *
     * @return string|null email or null if none email has been set
     */
    public function getEmail() {
        if (!$this->hasEmail() && $this->hasDefaultEmail()) {
            $this->setEmail($this->getDefaultEmail());
        }
        return $this->email;
    }

    /**
     * Get a default email value, if any is available
     *
     * @return string|null A default email value or Null if no default value is available
     */
    public function getDefaultEmail() {
        return null;
    }

    /**
     * Check if email has been set
     *
     * @return bool True if email has been set, false if not
     */
    public function hasEmail() {
        if (!is_null($this->email)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default email is available or not
     *
     * @return bool True of a default email is available, false if not
     */
    public function hasDefaultEmail() {
        if (!is_null($this->getDefaultEmail())) {
            return true;
        }
        return false;
    }
}