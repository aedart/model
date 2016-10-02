<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $number Phone number
     *
     * @return void
     */
    public function setPhone($number)
    {
        $this->phone = (string) $number;
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
     * @return string|null "phone" value or null if no "phone" value has been set
     */
    public function getPhone()
    {
        if (!$this->hasPhone() && $this->hasDefaultPhone()) {
            $this->setPhone($this->getDefaultPhone());
        }
        return $this->phone;
    }

    /**
     * Get a default "phone" value, if any is available
     *
     * @return string|null A default "phone" value or null if no default value is available
     */
    public function getDefaultPhone()
    {
        return null;
    }

    /**
     * Check if "phone" has been set
     *
     * @return bool True if "phone" value has been set, false if not
     */
    public function hasPhone()
    {
        return isset($this->phone);
    }

    /**
     * Check if a default "phone" is available or not
     *
     * @return bool True of a default "phone" value is available, false if not
     */
    public function hasDefaultPhone()
    {
        $default = $this->getDefaultPhone();
        return isset($default);
    }
}