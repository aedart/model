<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Company Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CompanyAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CompanyTrait
{
    /**
     * Name of company
     *
     * @var string|null
     */
    protected $company = null;

    /**
     * Set company
     *
     * @param string|null $name Name of company
     *
     * @return self
     */
    public function setCompany(?string $name)
    {
        $this->company = $name;

        return $this;
    }

    /**
     * Get company
     *
     * If no "company" value has been set, this method will
     * set and return a default "company" value,
     * if any such value is available
     *
     * @see getDefaultCompany()
     *
     * @return string|null company or null if no company has been set
     */
    public function getCompany() : ?string 
    {
        if ( ! $this->hasCompany()) {
            $this->setCompany($this->getDefaultCompany());
        }
        return $this->company;
    }

    /**
     * Check if "company" has been set
     *
     * @return bool True if "company" has been set, false if not
     */
    public function hasCompany() : bool
    {
        return isset($this->company);
    }

    /**
     * Get a default "company" value, if any is available
     *
     * @return string|null Default "company" value or null if no default value is available
     */
    public function getDefaultCompany() : ?string
    {
        return null;
    }
}