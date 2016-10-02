<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Company Aware</h1>
 *
 * Component is aware of a string "company" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CompanyAware
{
    /**
     * Set company
     *
     * @param string $name Name of a company
     *
     * @return void
     */
    public function setCompany($name);

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
    public function getCompany();

    /**
     * Get a default "company" value, if any is available
     *
     * @return string|null A default "company" value or null if no default value is available
     */
    public function getDefaultCompany();

    /**
     * Check if "company" has been set
     *
     * @return bool True if "company" value has been set, false if not
     */
    public function hasCompany();

    /**
     * Check if a default "company" is available or not
     *
     * @return bool True of a default "company" value is available, false if not
     */
    public function hasDefaultCompany();
}