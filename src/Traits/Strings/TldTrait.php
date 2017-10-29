<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $tld Top Level Domain (TLD)
     *
     * @return self
     */
    public function setTld(?string $tld)
    {
        $this->tld = $tld;

        return $this;
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
     * @return string|null tld or null if no tld has been set
     */
    public function getTld() : ?string 
    {
        if ( ! $this->hasTld()) {
            $this->setTld($this->getDefaultTld());
        }
        return $this->tld;
    }

    /**
     * Check if "tld" has been set
     *
     * @return bool True if "tld" has been set, false if not
     */
    public function hasTld() : bool
    {
        return isset($this->tld);
    }

    /**
     * Get a default "tld" value, if any is available
     *
     * @return string|null Default "tld" value or null if no default value is available
     */
    public function getDefaultTld() : ?string
    {
        return null;
    }
}