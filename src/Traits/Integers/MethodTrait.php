<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Method Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\MethodAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait MethodTrait
{
    /**
     * Name of method or other identifier
     *
     * @var int|null
     */
    protected $method = null;

    /**
     * Set method
     *
     * @param int|null $identifier Name of method or other identifier
     *
     * @return self
     */
    public function setMethod(?int $identifier)
    {
        $this->method = $identifier;

        return $this;
    }

    /**
     * Get method
     *
     * If no "method" value has been set, this method will
     * set and return a default "method" value,
     * if any such value is available
     *
     * @see getDefaultMethod()
     *
     * @return int|null method or null if no method has been set
     */
    public function getMethod() : ?int 
    {
        if ( ! $this->hasMethod()) {
            $this->setMethod($this->getDefaultMethod());
        }
        return $this->method;
    }

    /**
     * Check if "method" has been set
     *
     * @return bool True if "method" has been set, false if not
     */
    public function hasMethod() : bool
    {
        return isset($this->method);
    }

    /**
     * Get a default "method" value, if any is available
     *
     * @return int|null Default "method" value or null if no default value is available
     */
    public function getDefaultMethod() : ?int
    {
        return null;
    }
}