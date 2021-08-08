<?php
/**
 * Created by PhpStorm.
 * User: chutienphuc
 * Date: 08/08/2021
 * Time: 17:57
 */

namespace Phucct\Catalog\Plugin\Magento\Catalog\Ui\DataProvider\Product\Form\Modifier;

class Ingredients
{
    /**
     * @param $subject
     * @param $result
     * @return mixed
     */
    public function afterModifyMeta($subject, $result)
    {
        if (isset($result['product-details']['children']['container_ingredients'])) {
            $result['product-details']['children']['container_ingredients']['children']['ingredients']['arguments']['data']['config']['visible'] = false;
        }

        return $result;
    }
}
