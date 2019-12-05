<?php

/**
 *
 * Flextype Page Var Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [var_set name="variable_name" value="variable value"]
$flextype['shortcodes']->addHandler('var_set', function (ShortcodeInterface $s) use ($flextype) {
    $flextype->registry->set('page_variable.' . $s->getParameter('name'), $s->getParameter('value'));
});

// Shortcode: [var_get name="variable_name"]
$flextype['shortcodes']->addHandler('var_get', function (ShortcodeInterface $s) use ($flextype) {
    return $flextype->registry->get('page_variable.' . $s->getParameter('name'));
});
