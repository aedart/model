<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Type Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\TypeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait TypeTrait
{
    /**
     * Type identifier
     *
     * @var int|null
     */
    protected $type = null;

    /**
     * Set type
     *
     * @param int|null $identifier Type identifier
     *
     * @return self
     */
    public function setType(?int $identifier)
    {
        $this->type = $identifier;

        return $this;
    }

    /**
     * Get type
     *
     * If no "type" value has been set, this method will
     * set and return a default "type" value,
     * if any such value is available
     *
     * @see getDefaultType()
     *
     * @return int|null type or null if no type has been set
     */
    public function getType() : ?int 
    {
        if ( ! $this->hasType()) {
            $this->setType($this->getDefaultType());
        }
        return $this->type;
    }

    /**
     * Check if "type" has been set
     *
     * @return bool True if "type" has been set, false if not
     */
    public function hasType() : bool
    {
        return isset($this->type);
    }

    /**
     * Get a default "type" value, if any is available
     *
     * @return int|null Default "type" value or null if no default value is available
     */
    public function getDefaultType() : ?int
    {
        return null;
    }
}