<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Delivered At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\DeliveredAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait DeliveredAtTrait
{
    /**
     * Date of delivery
     *
     * @var int|null
     */
    protected $deliveredAt = null;

    /**
     * Set delivered at
     *
     * @param int|null $date Date of delivery
     *
     * @return self
     */
    public function setDeliveredAt(?int $date)
    {
        $this->deliveredAt = $date;

        return $this;
    }

    /**
     * Get delivered at
     *
     * If no "delivered at" value has been set, this method will
     * set and return a default "delivered at" value,
     * if any such value is available
     *
     * @see getDefaultDeliveredAt()
     *
     * @return int|null delivered at or null if no delivered at has been set
     */
    public function getDeliveredAt() : ?int 
    {
        if ( ! $this->hasDeliveredAt()) {
            $this->setDeliveredAt($this->getDefaultDeliveredAt());
        }
        return $this->deliveredAt;
    }

    /**
     * Check if "delivered at" has been set
     *
     * @return bool True if "delivered at" has been set, false if not
     */
    public function hasDeliveredAt() : bool
    {
        return isset($this->deliveredAt);
    }

    /**
     * Get a default "delivered at" value, if any is available
     *
     * @return int|null Default "delivered at" value or null if no default value is available
     */
    public function getDefaultDeliveredAt() : ?int
    {
        return null;
    }
}