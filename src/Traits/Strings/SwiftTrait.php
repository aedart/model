<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Swift Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\SwiftAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait SwiftTrait
{
    /**
     * ISO-9362 Swift Code
     *
     * @var string|null
     */
    protected $swift = null;

    /**
     * Set swift
     *
     * @param string|null $code ISO-9362 Swift Code
     *
     * @return self
     */
    public function setSwift(?string $code)
    {
        $this->swift = $code;

        return $this;
    }

    /**
     * Get swift
     *
     * If no "swift" value has been set, this method will
     * set and return a default "swift" value,
     * if any such value is available
     *
     * @see getDefaultSwift()
     *
     * @return string|null swift or null if no swift has been set
     */
    public function getSwift() : ?string 
    {
        if ( ! $this->hasSwift()) {
            $this->setSwift($this->getDefaultSwift());
        }
        return $this->swift;
    }

    /**
     * Check if "swift" has been set
     *
     * @return bool True if "swift" has been set, false if not
     */
    public function hasSwift() : bool
    {
        return isset($this->swift);
    }

    /**
     * Get a default "swift" value, if any is available
     *
     * @return string|null Default "swift" value or null if no default value is available
     */
    public function getDefaultSwift() : ?string
    {
        return null;
    }
}