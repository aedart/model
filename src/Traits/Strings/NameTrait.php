<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\NameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait NameTrait
{
    /**
     * Name
     *
     * @var string|null
     */
    protected $name = null;

    /**
     * Set name
     *
     * @param string|null $name Name
     *
     * @return self
     */
    public function setName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * If no "name" value has been set, this method will
     * set and return a default "name" value,
     * if any such value is available
     *
     * @see getDefaultName()
     *
     * @return string|null name or null if no name has been set
     */
    public function getName() : ?string 
    {
        if ( ! $this->hasName()) {
            $this->setName($this->getDefaultName());
        }
        return $this->name;
    }

    /**
     * Check if "name" has been set
     *
     * @return bool True if "name" has been set, false if not
     */
    public function hasName() : bool
    {
        return isset($this->name);
    }

    /**
     * Get a default "name" value, if any is available
     *
     * @return string|null Default "name" value or null if no default value is available
     */
    public function getDefaultName() : ?string
    {
        return null;
    }
}