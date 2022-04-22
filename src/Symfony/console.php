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

function stream_select(&$r, &$w, &$e, $sec, $mesc)
{
    return \stream_select($r, $w, $e, $sec, max(1000, $mesc));
}
