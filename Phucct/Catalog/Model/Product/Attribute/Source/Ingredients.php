<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 06/08/2021
 * Time: 17:31
 */

namespace Phucct\Catalog\Model\Product\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
use Magento\Catalog\Model\Config;

class Ingredients extends AbstractSource
{
    const INGREDIENTS = 'ingredients';

    /** @var Config  */
    protected $catalogConfig;

    /**
     * Ingredients constructor.
     * @param Config $catalogConfig
     */
    public function __construct(Config $catalogConfig)
    {
        $this->catalogConfig = $catalogConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        $attribute = $this->catalogConfig->getAttribute(4, self::INGREDIENTS);

        return $attribute->getSource()->getAllOptions();
    }
}
