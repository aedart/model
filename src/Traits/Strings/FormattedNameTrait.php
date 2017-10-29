<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Formatted Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\FormattedNameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait FormattedNameTrait
{
    /**
     * Formatted name of someone or something
     *
     * @var string|null
     */
    protected $formattedName = null;

    /**
     * Set formatted name
     *
     * @param string|null $name Formatted name of someone or something
     *
     * @return self
     */
    public function setFormattedName(?string $name)
    {
        $this->formattedName = $name;

        return $this;
    }

    /**
     * Get formatted name
     *
     * If no "formatted name" value has been set, this method will
     * set and return a default "formatted name" value,
     * if any such value is available
     *
     * @see getDefaultFormattedName()
     *
     * @return string|null formatted name or null if no formatted name has been set
     */
    public function getFormattedName() : ?string 
    {
        if ( ! $this->hasFormattedName()) {
            $this->setFormattedName($this->getDefaultFormattedName());
        }
        return $this->formattedName;
    }

    /**
     * Check if "formatted name" has been set
     *
     * @return bool True if "formatted name" has been set, false if not
     */
    public function hasFormattedName() : bool
    {
        return isset($this->formattedName);
    }

    /**
     * Get a default "formatted name" value, if any is available
     *
     * @return string|null Default "formatted name" value or null if no default value is available
     */
    public function getDefaultFormattedName() : ?string
    {
        return null;
    }
}