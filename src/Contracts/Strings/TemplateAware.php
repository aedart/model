<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Template Aware</h1>
 *
 * Component is aware of a string "template" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TemplateAware
{
    /**
     * Set template
     *
     * @param string $path Location of a template file
     *
     * @return void
     */
    public function setTemplate($path);

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
    public function getTemplate();

    /**
     * Get a default "template" value, if any is available
     *
     * @return string|null A default "template" value or null if no default value is available
     */
    public function getDefaultTemplate();

    /**
     * Check if "template" has been set
     *
     * @return bool True if "template" value has been set, false if not
     */
    public function hasTemplate();

    /**
     * Check if a default "template" is available or not
     *
     * @return bool True of a default "template" value is available, false if not
     */
    public function hasDefaultTemplate();
}