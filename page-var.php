<?php

/**
 *
 * Flextype Page Variables Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\{Event\Event, Registry\Registry};

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [var_set name="variable-name" value="variable value"]
    Entries::shortcode()->addHandler('var_set', function(ShortcodeInterface $s) {
        Registry::set('variables.page_var_'.$s->getParameter('name'), $s->getParameter('value'));
    });

    // Shortcode: [var_get name="variable-name"]
    Entries::shortcode()->addHandler('var_get', function(ShortcodeInterface $s) {
        return Registry::get('variables.page_var_'.$s->getParameter('name'));
    });
});

class Variables
{
    /**
     * Get page variable value
     *
     * echo Variables::get('variable-name');
     *
     * @access public
     * @param  string  $variable_name  Variable name
     * @return mixed
     */
    public static function get(string $variable_name)
    {
        return Registry::get('variables.page_var_'.$variable_name);
    }
}
