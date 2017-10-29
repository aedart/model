<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Template or location of a template file
     *
     * @var string|null
     */
    protected $template = null;

    /**
     * Set template
     *
     * @param string|null $template Template or location of a template file
     *
     * @return self
     */
    public function setTemplate(?string $template)
    {
        $this->template = $template;

        return $this;
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
     * @return string|null template or null if no template has been set
     */
    public function getTemplate() : ?string 
    {
        if ( ! $this->hasTemplate()) {
            $this->setTemplate($this->getDefaultTemplate());
        }
        return $this->template;
    }

    /**
     * Check if "template" has been set
     *
     * @return bool True if "template" has been set, false if not
     */
    public function hasTemplate() : bool
    {
        return isset($this->template);
    }

    /**
     * Get a default "template" value, if any is available
     *
     * @return string|null Default "template" value or null if no default value is available
     */
    public function getDefaultTemplate() : ?string
    {
        return null;
    }
}