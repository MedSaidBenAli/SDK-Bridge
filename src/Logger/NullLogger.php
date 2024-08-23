<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * PHP version 5.6+
 *
 * @category  BridgeSDK
 * @package   Ecommercebridgesdk
 * @author    202-ecommerce <tech@202-ecommerce.com>
 * @copyright 2022 (c) 202-ecommerce
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link      https://docs.bridgeapi.io/
 */

namespace Logger;

use Psr\Log\LoggerInterface;

class NullLogger implements LoggerInterface
{
    public function emergency(string|\Stringable $message, array $context = []): void
    {
    }

    public function alert(string|\Stringable $message, array $context = []): void
    {
    }

    public function critical(string|\Stringable $message, array $context = []): void
    {
    }

    public function error(string|\Stringable $message, array $context = []): void
    {
    }

    public function warning(string|\Stringable $message, array $context = []): void
    {
    }

    public function notice(string|\Stringable $message, array $context = []): void
    {
    }

    public function info(string|\Stringable $message, array $context = []): void
    {
    }

    public function debug(string|\Stringable $message, array $context = []): void
    {
    }

    public function log($level, string|\Stringable $message, array $context = []): void
    {
    }
}
