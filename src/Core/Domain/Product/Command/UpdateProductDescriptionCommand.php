<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

declare(strict_types=1);

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

use PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;

/**
 * Updates product descriptions
 */
class UpdateProductDescriptionCommand
{
    /**
     * @var ProductId
     */
    private $productId;

    /**
     * @var string[]|null key value pairs where key is the id of language.
     *                    If its null then it will not be updated
     */
    private $localizedDescriptions;

    /**
     * @var string[]|null key value pairs where key is the id of language
     *                    If its null then it will not be updated
     */
    private $localizedShortDescriptions;

    /**
     * @param int $productId
     */
    public function __construct(int $productId)
    {
        $this->productId = new ProductId($productId);
    }

    /**
     * @return ProductId
     */
    public function getProductId(): ProductId
    {
        return $this->productId;
    }

    /**
     * @return string[]|null
     */
    public function getLocalizedDescriptions(): ?array
    {
        return $this->localizedDescriptions;
    }

    /**
     * @param string[] $localizedDescriptions
     *
     * @return UpdateProductDescriptionCommand
     */
    public function setLocalizedDescriptions(array $localizedDescriptions): UpdateProductDescriptionCommand
    {
        $this->localizedDescriptions = $localizedDescriptions;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getLocalizedShortDescriptions(): ?array
    {
        return $this->localizedShortDescriptions;
    }

    /**
     * @param string[] $localizedShortDescriptions
     *
     * @return UpdateProductDescriptionCommand
     */
    public function setLocalizedShortDescriptions(array $localizedShortDescriptions): UpdateProductDescriptionCommand
    {
        $this->localizedShortDescriptions = $localizedShortDescriptions;

        return $this;
    }
}
