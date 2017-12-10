<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Error Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\ErrorAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait ErrorTrait
{
    /**
     * Error name or identifier
     *
     * @var int|null
     */
    protected $error = null;

    /**
     * Set error
     *
     * @param int|null $identifier Error name or identifier
     *
     * @return self
     */
    public function setError(?int $identifier)
    {
        $this->error = $identifier;

        return $this;
    }

    /**
     * Get error
     *
     * If no "error" value has been set, this method will
     * set and return a default "error" value,
     * if any such value is available
     *
     * @see getDefaultError()
     *
     * @return int|null error or null if no error has been set
     */
    public function getError() : ?int 
    {
        if ( ! $this->hasError()) {
            $this->setError($this->getDefaultError());
        }
        return $this->error;
    }

    /**
     * Check if "error" has been set
     *
     * @return bool True if "error" has been set, false if not
     */
    public function hasError() : bool
    {
        return isset($this->error);
    }

    /**
     * Get a default "error" value, if any is available
     *
     * @return int|null Default "error" value or null if no default value is available
     */
    public function getDefaultError() : ?int
    {
        return null;
    }
}