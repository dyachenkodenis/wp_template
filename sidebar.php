<?php
/**
* Wordpress Theme
* @version     1.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
* @package WordPress
* @subpackage Wordpress Theme
* @since Wordpress Theme 1.0
*/
if (!defined('ABSPATH')) { die(); }
?>
<aside>
    <?php
    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')):
    ?>
    <?php endif; ?>
</aside>