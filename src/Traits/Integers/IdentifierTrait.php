<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Identifier Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\IdentifierAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait IdentifierTrait
{
    /**
     * Name or code that identifies a unique object, resource, class, component or thing
     *
     * @var int|null
     */
    protected $identifier = null;

    /**
     * Set identifier
     *
     * @param int|null $identifier Name or code that identifies a unique object, resource, class, component or thing
     *
     * @return self
     */
    public function setIdentifier(?int $identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * If no "identifier" value has been set, this method will
     * set and return a default "identifier" value,
     * if any such value is available
     *
     * @see getDefaultIdentifier()
     *
     * @return int|null identifier or null if no identifier has been set
     */
    public function getIdentifier() : ?int 
    {
        if ( ! $this->hasIdentifier()) {
            $this->setIdentifier($this->getDefaultIdentifier());
        }
        return $this->identifier;
    }

    /**
     * Check if "identifier" has been set
     *
     * @return bool True if "identifier" has been set, false if not
     */
    public function hasIdentifier() : bool
    {
        return isset($this->identifier);
    }

    /**
     * Get a default "identifier" value, if any is available
     *
     * @return int|null Default "identifier" value or null if no default value is available
     */
    public function getDefaultIdentifier() : ?int
    {
        return null;
    }
}