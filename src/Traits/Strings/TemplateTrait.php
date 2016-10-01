<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Template Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TemplateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TemplateTrait
{
    /**
     * Location of a template file
     *
     * @var string|null
     */
    protected $template = null;

    /**
     * Set template
     *
     * @param string $path Location of a template file
     *
     * @return void
     */
    public function setTemplate($path)
    {
        $this->template = (string) $path;
    }

    /**
     * Get template
     *
     * If no "template" value has been set, this method will
     * set and return a default "template" value,
     * if any such value is available
     *
     * @see getDefaultTemplate()
     *
     * @return string|null "template" value or null if no "template" value has been set
     */
    public function getTemplate()
    {
        if (!$this->hasTemplate() && $this->hasDefaultTemplate()) {
            $this->setTemplate($this->getDefaultTemplate());
        }
        return $this->template;
    }

    /**
     * Get a default "template" value, if any is available
     *
     * @return string|null A default "template" value or null if no default value is available
     */
    public function getDefaultTemplate()
    {
        return null;
    }

    /**
     * Check if "template" has been set
     *
     * @return bool True if "template" value has been set, false if not
     */
    public function hasTemplate()
    {
        return isset($this->template);
    }

    /**
     * Check if a default "template" is available or not
     *
     * @return bool True of a default "template" value is available, false if not
     */
    public function hasDefaultTemplate()
    {
        $default = $this->getDefaultTemplate();
        return isset($default);
    }
}