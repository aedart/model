<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a company
     *
     * @var string|null
     */
    protected $company = null;

    /**
     * Set company
     *
     * @param string $name Name of a company
     *
     * @return void
     */
    public function setCompany($name)
    {
        $this->company = (string) $name;
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
     * @return string|null "company" value or null if no "company" value has been set
     */
    public function getCompany()
    {
        if (!$this->hasCompany() && $this->hasDefaultCompany()) {
            $this->setCompany($this->getDefaultCompany());
        }
        return $this->company;
    }

    /**
     * Get a default "company" value, if any is available
     *
     * @return string|null A default "company" value or null if no default value is available
     */
    public function getDefaultCompany()
    {
        return null;
    }

    /**
     * Check if "company" has been set
     *
     * @return bool True if "company" value has been set, false if not
     */
    public function hasCompany()
    {
        return isset($this->company);
    }

    /**
     * Check if a default "company" is available or not
     *
     * @return bool True of a default "company" value is available, false if not
     */
    public function hasDefaultCompany()
    {
        $default = $this->getDefaultCompany();
        return isset($default);
    }
}