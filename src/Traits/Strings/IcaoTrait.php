<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Icao Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IcaoAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IcaoTrait
{
    /**
     * International Civil Aviation Organization code
     *
     * @var string|null
     */
    protected $icao = null;

    /**
     * Set icao
     *
     * @param string|null $code International Civil Aviation Organization code
     *
     * @return self
     */
    public function setIcao(?string $code)
    {
        $this->icao = $code;

        return $this;
    }

    /**
     * Get icao
     *
     * If no "icao" value has been set, this method will
     * set and return a default "icao" value,
     * if any such value is available
     *
     * @see getDefaultIcao()
     *
     * @return string|null icao or null if no icao has been set
     */
    public function getIcao() : ?string 
    {
        if ( ! $this->hasIcao()) {
            $this->setIcao($this->getDefaultIcao());
        }
        return $this->icao;
    }

    /**
     * Check if "icao" has been set
     *
     * @return bool True if "icao" has been set, false if not
     */
    public function hasIcao() : bool
    {
        return isset($this->icao);
    }

    /**
     * Get a default "icao" value, if any is available
     *
     * @return string|null Default "icao" value or null if no default value is available
     */
    public function getDefaultIcao() : ?string
    {
        return null;
    }
}