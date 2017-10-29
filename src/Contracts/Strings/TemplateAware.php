<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $template Template or location of a template file
     *
     * @return self
     */
    public function setTemplate(?string $template);

    /**
     * Get template
     *
     * If no "template" value has been set, this method will
     * set and return a default "template" value,
     * if any such value is available
     *
     * @see getDefaultTemplate()
     *
     * @return string|null template or null if no template has been set
     */
    public function getTemplate() : ?string ;

    /**
     * Check if "template" has been set
     *
     * @return bool True if "template" has been set, false if not
     */
    public function hasTemplate() : bool;

    /**
     * Get a default "template" value, if any is available
     *
     * @return string|null Default "template" value or null if no default value is available
     */
    public function getDefaultTemplate() : ?string;
}