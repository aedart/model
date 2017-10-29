<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Id Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\IdAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait IdTrait
{
    /**
     * Unique identifier
     *
     * @var int|null
     */
    protected $id = null;

    /**
     * Set id
     *
     * @param int|null $identifier Unique identifier
     *
     * @return self
     */
    public function setId(?int $identifier)
    {
        $this->id = $identifier;

        return $this;
    }

    /**
     * Get id
     *
     * If no "id" value has been set, this method will
     * set and return a default "id" value,
     * if any such value is available
     *
     * @see getDefaultId()
     *
     * @return int|null id or null if no id has been set
     */
    public function getId() : ?int 
    {
        if ( ! $this->hasId()) {
            $this->setId($this->getDefaultId());
        }
        return $this->id;
    }

    /**
     * Check if "id" has been set
     *
     * @return bool True if "id" has been set, false if not
     */
    public function hasId() : bool
    {
        return isset($this->id);
    }

    /**
     * Get a default "id" value, if any is available
     *
     * @return int|null Default "id" value or null if no default value is available
     */
    public function getDefaultId() : ?int
    {
        return null;
    }
}