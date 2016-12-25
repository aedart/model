<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Anniversary Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\AnniversaryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait AnniversaryTrait
{
    /**
     * Date of anniversary - UNIX timestamp
     *
     * @var int|null
     */
    protected $anniversary = null;

    /**
     * Set anniversary
     *
     * @param int $date Date of anniversary - UNIX timestamp
     *
     * @return void
     */
    public function setAnniversary($date)
    {
        $this->anniversary = (int) $date;
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
     * @return int|null "anniversary" value or null if no "anniversary" value has been set
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
     * @return int|null A default "anniversary" value or null if no default value is available
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