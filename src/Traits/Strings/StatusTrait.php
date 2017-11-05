<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Status Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\StatusAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait StatusTrait
{
    /**
     * Situation of progress, classification, or civil status
     *
     * @var string|null
     */
    protected $status = null;

    /**
     * Set status
     *
     * @param string|null $status Situation of progress, classification, or civil status
     *
     * @return self
     */
    public function setStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * If no "status" value has been set, this method will
     * set and return a default "status" value,
     * if any such value is available
     *
     * @see getDefaultStatus()
     *
     * @return string|null status or null if no status has been set
     */
    public function getStatus() : ?string 
    {
        if ( ! $this->hasStatus()) {
            $this->setStatus($this->getDefaultStatus());
        }
        return $this->status;
    }

    /**
     * Check if "status" has been set
     *
     * @return bool True if "status" has been set, false if not
     */
    public function hasStatus() : bool
    {
        return isset($this->status);
    }

    /**
     * Get a default "status" value, if any is available
     *
     * @return string|null Default "status" value or null if no default value is available
     */
    public function getDefaultStatus() : ?string
    {
        return null;
    }
}