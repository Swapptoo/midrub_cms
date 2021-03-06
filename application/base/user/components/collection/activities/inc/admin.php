<?php
/**
 * Admin Inc
 *
 * PHP Version 7.3
 *
 * This files contains the hooks for
 * the User component from the admin Panel
 *
 * @category Social
 * @package  Midrub
 * @author   Scrisoft <asksyn@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License
 * @link     https://www.midrub.com/
 */

 // Define the constants
defined('BASEPATH') OR exit('No direct script access allowed');

// Get codeigniter object instance
$CI = &get_instance();

/**
 * The public method set_user_component_options registers options for Admin's
 * 
 * @since 0.0.7.9
 */
set_user_component_options(
    'activities',
    array (
            
        array (
            'type' => 'checkbox_input',
            'slug' => 'component_activities_enable',
            'label' => $CI->lang->line('enable_component'),
            'label_description' => $CI->lang->line('if_is_enabled')
        )
        
    )

);
