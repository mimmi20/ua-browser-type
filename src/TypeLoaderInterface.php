<?php
/**
 * This file is part of the ua-browser-type package.
 *
 * Copyright (c) 2015-2020, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);
namespace UaBrowserType;

use BrowserDetector\Loader\LoaderInterface;

interface TypeLoaderInterface extends LoaderInterface
{
    /**
     * @param string $key
     *
     * @throws \BrowserDetector\Loader\NotFoundException
     *
     * @return \UaBrowserType\TypeInterface
     */
    public function load(string $key): TypeInterface;
}
