<?php
/**
 * tp-mailer [A powerful and beautiful php mailer for All of ThinkPHP and Other PHP Framework based SwiftMailer]
 *
 * @author    yuan1994 <tianpian0805@gmail.com>
 * @link      https://github.com/yuan1994/tp-mailer
 * @copyright 2016 yuan1994 all rights reserved.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 */

namespace mailer\lib;

if (class_exists('\\think\\Config')) {
    class Config extends \think\Config
    {

    }
} elseif (function_exists('C')) {
    class Config extends \mailer\lib\tp3\Config
    {

    }
}
