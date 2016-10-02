<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Tld Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TldAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TldTrait
{
    /**
     * Top Level Domain (TLD)
     *
     * @var string|null
     */
    protected $tld = null;

    /**
     * Set tld
     *
     * @param string $tld Top Level Domain (TLD)
     *
     * @return void
     */
    public function setTld($tld)
    {
        $this->tld = (string) $tld;
    }

    /**
     * Get tld
     *
     * If no "tld" value has been set, this method will
     * set and return a default "tld" value,
     * if any such value is available
     *
     * @see getDefaultTld()
     *
     * @return string|null "tld" value or null if no "tld" value has been set
     */
    public function getTld()
    {
        if (!$this->hasTld() && $this->hasDefaultTld()) {
            $this->setTld($this->getDefaultTld());
        }
        return $this->tld;
    }

    /**
     * Get a default "tld" value, if any is available
     *
     * @return string|null A default "tld" value or null if no default value is available
     */
    public function getDefaultTld()
    {
        return null;
    }

    /**
     * Check if "tld" has been set
     *
     * @return bool True if "tld" value has been set, false if not
     */
    public function hasTld()
    {
        return isset($this->tld);
    }

    /**
     * Check if a default "tld" is available or not
     *
     * @return bool True of a default "tld" value is available, false if not
     */
    public function hasDefaultTld()
    {
        $default = $this->getDefaultTld();
        return isset($default);
    }
}