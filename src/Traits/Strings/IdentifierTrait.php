<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Identifier Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IdentifierAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IdentifierTrait
{
    /**
     * Name or code that identifies a unique object, resource, class, component or thing
     *
     * @var string|null
     */
    protected $identifier = null;

    /**
     * Set identifier
     *
     * @param string|null $identifier Name or code that identifies a unique object, resource, class, component or thing
     *
     * @return self
     */
    public function setIdentifier(?string $identifier)
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
     * @return string|null identifier or null if no identifier has been set
     */
    public function getIdentifier() : ?string 
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
     * @return string|null Default "identifier" value or null if no default value is available
     */
    public function getDefaultIdentifier() : ?string
    {
        return null;
    }
}