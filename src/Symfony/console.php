<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Symfony\Component\Console\Helper;

if (extension_loaded('Swoole') && SWOOKE_VERSION_ID < 40810) {
    /**
     * 修复使用 Symfony 6 时，因为 Swoole Hook 不支持纳秒级别的问题.
     */
    function stream_select(?array &$r, ?array &$w, ?array &$e, ?int $sec, ?int $mesc = null)
    {
        return \stream_select($r, $w, $e, $sec, max(1000, $mesc));
    }
}
