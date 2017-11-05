<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Delivered At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DeliveredAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DeliveredAtTrait
{
    /**
     * Date of delivery
     *
     * @var string|null
     */
    protected $deliveredAt = null;

    /**
     * Set delivered at
     *
     * @param string|null $date Date of delivery
     *
     * @return self
     */
    public function setDeliveredAt(?string $date)
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
     * @return string|null delivered at or null if no delivered at has been set
     */
    public function getDeliveredAt() : ?string 
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
     * @return string|null Default "delivered at" value or null if no default value is available
     */
    public function getDefaultDeliveredAt() : ?string
    {
        return null;
    }
}