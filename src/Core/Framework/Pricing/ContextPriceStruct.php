<?php declare(strict_types=1);

namespace Shopware\Core\Framework\Pricing;

use Shopware\Core\Framework\ORM\Entity;

class ContextPriceStruct extends Entity
{
    /**
     * @var string
     */
    protected $currencyId;

    /**
     * @var string
     */
    protected $ruleId;

    /**
     * @var \Shopware\Core\Framework\Pricing\PriceStruct
     */
    protected $price;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getRuleId(): string
    {
        return $this->ruleId;
    }

    public function setRuleId(string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getPrice(): \Shopware\Core\Framework\Pricing\PriceStruct
    {
        return $this->price;
    }

    public function setPrice(\Shopware\Core\Framework\Pricing\PriceStruct $price): void
    {
        $this->price = $price;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
