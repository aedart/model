<?php namespace Aedart\Model\Contracts\Strings;


/**
 * <h1>Template Aware</h1>
 *
 * Component is able to specify and get a path to some kind of
 * a template file.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface TemplateAware {

    /**
     * Set the given template
     *
     * @param string $path Template - location of some kind of a template file
     *
     * @return void
     */
    public function setTemplate($path);

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
    public function getTemplate();

    /**
     * Get a default template value, if any is available
     *
     * @return string|null A default template value or Null if no default value is available
     */
    public function getDefaultTemplate();

    /**
     * Check if template has been set
     *
     * @return bool True if template has been set, false if not
     */
    public function hasTemplate();

    /**
     * Check if a default template is available or not
     *
     * @return bool True of a default template is available, false if not
     */
    public function hasDefaultTemplate();
}