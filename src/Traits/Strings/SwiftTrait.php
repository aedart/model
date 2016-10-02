<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $code ISO-9362 Swift Code
     *
     * @return void
     */
    public function setSwift($code)
    {
        $this->swift = (string) $code;
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
     * @return string|null "swift" value or null if no "swift" value has been set
     */
    public function getSwift()
    {
        if (!$this->hasSwift() && $this->hasDefaultSwift()) {
            $this->setSwift($this->getDefaultSwift());
        }
        return $this->swift;
    }

    /**
     * Get a default "swift" value, if any is available
     *
     * @return string|null A default "swift" value or null if no default value is available
     */
    public function getDefaultSwift()
    {
        return null;
    }

    /**
     * Check if "swift" has been set
     *
     * @return bool True if "swift" value has been set, false if not
     */
    public function hasSwift()
    {
        return isset($this->swift);
    }

    /**
     * Check if a default "swift" is available or not
     *
     * @return bool True of a default "swift" value is available, false if not
     */
    public function hasDefaultSwift()
    {
        $default = $this->getDefaultSwift();
        return isset($default);
    }
}