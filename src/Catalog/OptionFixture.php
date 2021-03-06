<?php
declare(strict_types=1);

namespace TddWizard\Fixtures\Catalog;

use Magento\Eav\Model\Entity\Attribute\Option as AttributeOption;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class OptionFixture
 */
class OptionFixture
{

    /**
     * @var string
     */
    private $attributeCode;

    /**
     * @var AttributeOption
     */
    private $option;

    /**
     * OptionFixture constructor.
     *
     * @param AttributeOption $option
     * @param string $attributeCode
     */
    public function __construct(AttributeOption $option, string $attributeCode)
    {
        $this->attributeCode = $attributeCode;
        $this->option = $option;
    }

    /**
     * Get the attribute code.
     *
     * @return string
     */
    public function getAttributeCode(): string
    {
        return $this->attributeCode;
    }

    /**
     * Get the option.
     *
     * @return AttributeOption
     */
    public function getOption(): AttributeOption
    {
        return $this->option;
    }

    /**
     * Rollback the option(s).
     *
     * @throws LocalizedException
     */
    public function rollback(): void
    {
        OptionFixtureRollback::create()->execute($this);
    }
}
