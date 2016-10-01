<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Anniversary Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\AnniversaryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait AnniversaryTrait
{
    /**
     * Date of an anniversary
     *
     * @var string|null
     */
    protected $anniversary = null;

    /**
     * Set anniversary
     *
     * @param string $date Date of an anniversary
     *
     * @return void
     */
    public function setAnniversary($date)
    {
        $this->anniversary = (string) $date;
    }

    /**
     * Get anniversary
     *
     * If no "anniversary" value has been set, this method will
     * set and return a default "anniversary" value,
     * if any such value is available
     *
     * @see getDefaultAnniversary()
     *
     * @return string|null "anniversary" value or null if no "anniversary" value has been set
     */
    public function getAnniversary()
    {
        if (!$this->hasAnniversary() && $this->hasDefaultAnniversary()) {
            $this->setAnniversary($this->getDefaultAnniversary());
        }
        return $this->anniversary;
    }

    /**
     * Get a default "anniversary" value, if any is available
     *
     * @return string|null A default "anniversary" value or null if no default value is available
     */
    public function getDefaultAnniversary()
    {
        return null;
    }

    /**
     * Check if "anniversary" has been set
     *
     * @return bool True if "anniversary" value has been set, false if not
     */
    public function hasAnniversary()
    {
        return isset($this->anniversary);
    }

    /**
     * Check if a default "anniversary" is available or not
     *
     * @return bool True of a default "anniversary" value is available, false if not
     */
    public function hasDefaultAnniversary()
    {
        $default = $this->getDefaultAnniversary();
        return isset($default);
    }
}