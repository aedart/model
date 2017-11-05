<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Alias Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\AliasAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait AliasTrait
{
    /**
     * An alternate name of an item or component
     *
     * @var string|null
     */
    protected $alias = null;

    /**
     * Set alias
     *
     * @param string|null $name An alternate name of an item or component
     *
     * @return self
     */
    public function setAlias(?string $name)
    {
        $this->alias = $name;

        return $this;
    }

    /**
     * Get alias
     *
     * If no "alias" value has been set, this method will
     * set and return a default "alias" value,
     * if any such value is available
     *
     * @see getDefaultAlias()
     *
     * @return string|null alias or null if no alias has been set
     */
    public function getAlias() : ?string 
    {
        if ( ! $this->hasAlias()) {
            $this->setAlias($this->getDefaultAlias());
        }
        return $this->alias;
    }

    /**
     * Check if "alias" has been set
     *
     * @return bool True if "alias" has been set, false if not
     */
    public function hasAlias() : bool
    {
        return isset($this->alias);
    }

    /**
     * Get a default "alias" value, if any is available
     *
     * @return string|null Default "alias" value or null if no default value is available
     */
    public function getDefaultAlias() : ?string
    {
        return null;
    }
}