<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>X Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\XAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait XTrait
{
    /**
     * Co-ordinate or value
     *
     * @var int|null
     */
    protected $x = null;

    /**
     * Set x
     *
     * @param int|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setX(?int $value)
    {
        $this->x = $value;

        return $this;
    }

    /**
     * Get x
     *
     * If no "x" value has been set, this method will
     * set and return a default "x" value,
     * if any such value is available
     *
     * @see getDefaultX()
     *
     * @return int|null x or null if no x has been set
     */
    public function getX() : ?int 
    {
        if ( ! $this->hasX()) {
            $this->setX($this->getDefaultX());
        }
        return $this->x;
    }

    /**
     * Check if "x" has been set
     *
     * @return bool True if "x" has been set, false if not
     */
    public function hasX() : bool
    {
        return isset($this->x);
    }

    /**
     * Get a default "x" value, if any is available
     *
     * @return int|null Default "x" value or null if no default value is available
     */
    public function getDefaultX() : ?int
    {
        return null;
    }
}