<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $email Email
     *
     * @return self
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;

        return $this;
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
     * @return string|null email or null if no email has been set
     */
    public function getEmail() : ?string 
    {
        if ( ! $this->hasEmail()) {
            $this->setEmail($this->getDefaultEmail());
        }
        return $this->email;
    }

    /**
     * Check if "email" has been set
     *
     * @return bool True if "email" has been set, false if not
     */
    public function hasEmail() : bool
    {
        return isset($this->email);
    }

    /**
     * Get a default "email" value, if any is available
     *
     * @return string|null Default "email" value or null if no default value is available
     */
    public function getDefaultEmail() : ?string
    {
        return null;
    }
}