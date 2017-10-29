<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Phone Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PhoneAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PhoneTrait
{
    /**
     * Phone number
     *
     * @var string|null
     */
    protected $phone = null;

    /**
     * Set phone
     *
     * @param string|null $number Phone number
     *
     * @return self
     */
    public function setPhone(?string $number)
    {
        $this->phone = $number;

        return $this;
    }

    /**
     * Get phone
     *
     * If no "phone" value has been set, this method will
     * set and return a default "phone" value,
     * if any such value is available
     *
     * @see getDefaultPhone()
     *
     * @return string|null phone or null if no phone has been set
     */
    public function getPhone() : ?string 
    {
        if ( ! $this->hasPhone()) {
            $this->setPhone($this->getDefaultPhone());
        }
        return $this->phone;
    }

    /**
     * Check if "phone" has been set
     *
     * @return bool True if "phone" has been set, false if not
     */
    public function hasPhone() : bool
    {
        return isset($this->phone);
    }

    /**
     * Get a default "phone" value, if any is available
     *
     * @return string|null Default "phone" value or null if no default value is available
     */
    public function getDefaultPhone() : ?string
    {
        return null;
    }
}