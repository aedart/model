<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Template Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TemplateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TemplateTrait {

    /**
     * Template - location of some kind of a template file
     *
     * @var string|null
     */
    protected $template = null;

    /**
     * Set the given template
     *
     * @param string $path Template - location of some kind of a template file
     *
     * @return void
     */
    public function setTemplate($path) {
        $this->template = (string) $path;
    }

    /**
     * Get the given template
     *
     * If no template has been set, this method will
     * set and return a default template, if any such
     * value is available
     *
     * @see getDefaultTemplate()
     *
     * @return string|null template or null if none template has been set
     */
    public function getTemplate() {
        if (!$this->hasTemplate() && $this->hasDefaultTemplate()) {
            $this->setTemplate($this->getDefaultTemplate());
        }
        return $this->template;
    }

    /**
     * Get a default template value, if any is available
     *
     * @return string|null A default template value or Null if no default value is available
     */
    public function getDefaultTemplate() {
        return null;
    }

    /**
     * Check if template has been set
     *
     * @return bool True if template has been set, false if not
     */
    public function hasTemplate() {
        return !is_null($this->template);
    }

    /**
     * Check if a default template is available or not
     *
     * @return bool True of a default template is available, false if not
     */
    public function hasDefaultTemplate() {
        return !is_null($this->getDefaultTemplate());
    }
}