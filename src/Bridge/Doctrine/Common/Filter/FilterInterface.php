<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Bridge\Doctrine\Common\Filter;

use ApiPlatform\Core\Api\FilterInterface as BaseFilterInterface;

/**
 * Doctrine filter interface.
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
interface FilterInterface extends BaseFilterInterface
{
    /**
     * For autowiring the property helper in annotation filters.
     */
    public static function getPropertyHelperServiceName(): string;
}
