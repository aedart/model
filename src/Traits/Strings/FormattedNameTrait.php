<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $name Formatted name of someone or something
     *
     * @return void
     */
    public function setFormattedName($name)
    {
        $this->formattedName = (string) $name;
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
     * @return string|null "formatted name" value or null if no "formatted name" value has been set
     */
    public function getFormattedName()
    {
        if (!$this->hasFormattedName() && $this->hasDefaultFormattedName()) {
            $this->setFormattedName($this->getDefaultFormattedName());
        }
        return $this->formattedName;
    }

    /**
     * Get a default "formatted name" value, if any is available
     *
     * @return string|null A default "formatted name" value or null if no default value is available
     */
    public function getDefaultFormattedName()
    {
        return null;
    }

    /**
     * Check if "formatted name" has been set
     *
     * @return bool True if "formatted name" value has been set, false if not
     */
    public function hasFormattedName()
    {
        return isset($this->formattedName);
    }

    /**
     * Check if a default "formatted name" is available or not
     *
     * @return bool True of a default "formatted name" value is available, false if not
     */
    public function hasDefaultFormattedName()
    {
        $default = $this->getDefaultFormattedName();
        return isset($default);
    }
}