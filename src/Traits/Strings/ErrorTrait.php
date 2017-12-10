<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Error Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ErrorAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ErrorTrait
{
    /**
     * Error name or identifier
     *
     * @var string|null
     */
    protected $error = null;

    /**
     * Set error
     *
     * @param string|null $identifier Error name or identifier
     *
     * @return self
     */
    public function setError(?string $identifier)
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
     * @return string|null error or null if no error has been set
     */
    public function getError() : ?string 
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
     * @return string|null Default "error" value or null if no default value is available
     */
    public function getDefaultError() : ?string
    {
        return null;
    }
}