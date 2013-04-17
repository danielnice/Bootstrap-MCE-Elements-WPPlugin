<?php
/*
Plugin Name: Bootstrap MCE Elements
Plugin URI: http://parachuteapplications.com
Description: Adds Bootstrap insert button to MCE editor
Author: Daniel Nice
Version: 1.0.0
Author URI: http://danielnice.com
*/

// Create Admin Page
add_action('admin_init', 'plugin_admin_init');
function plugin_admin_init(){
  register_setting( 'bootstrap_mce_options', 'bootstrap_mce_options', 'bootstrap_mce_options_validate' ); //Create Validation
  add_settings_section('plugin_main', 'Tiny MCE Settings', 'plugin_section_text', 'bootstrap_mce_page'); //Add Section
  add_settings_field('plugin_checkbox_mce_csscheck', 'Include Default Bootstrap CSS in Wordpress Editor', 'plugin_checkbox_mce_csscheck', 'bootstrap_mce_page', 'plugin_main'); //Add Field to Section 
  add_settings_field('plugin_checkbox_template_csscheck', 'Include Default Bootstrap CSS in Frontend Template', 'plugin_checkbox_template_csscheck', 'bootstrap_mce_page', 'plugin_main'); //Add Field to Section 
}

//Create Description
function plugin_section_text() {
  echo '<p>Please select from the options below</p>';
}

//Create Field Functions
  //Checkbox
  function plugin_checkbox_mce_csscheck() {
    $options = get_option('bootstrap_mce_options');
    $checked = $options['mce_csscheck'];
    echo "<input id='plugin_checkbox_mce_csscheck' type='checkbox' name='bootstrap_mce_options[mce_csscheck]' value='checked' class='code' " . $checked . " />";
  }
  //Checkbox
  function plugin_checkbox_template_csscheck() {
    $options = get_option('bootstrap_mce_options');
    $checked = $options['template_csscheck'];
    echo "<input id='plugin_checkbox_template_csscheck' type='checkbox' name='bootstrap_mce_options[template_csscheck]' value='checked' class='code' " . $checked . " />";
  }

// Validation Function
function bootstrap_mce_options_validate($input) {
  $newinput['mce_csscheck'] = $input['mce_csscheck'];
  $newinput['template_csscheck'] = $input['template_csscheck'];
  return $newinput;
}

// Options Page Function
function bootstrap_mce_options_page() {
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"><br></div>
  <h2>Bootstrap MCE Settings</h2>
  <form action="options.php" method="post">
    <?php settings_fields('bootstrap_mce_options'); ?>
    <?php do_settings_sections('bootstrap_mce_page'); ?>
    <p class="submit">
      <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
    </p>
  </form>
</div>
<?php }

//Add Options Menu
add_action('admin_menu', 'plugin_admin_add_page');
function plugin_admin_add_page() {
  add_options_page('Bootstrap MCE Settings', 'Bootstrap MCE', 'manage_options', 'bootstrap-mce-settings', 'bootstrap_mce_options_page');
}

//Include TinyMCE CSS if Option is Selected
$bootstrap_mce_options = get_option('bootstrap_mce_options');
$mce_csscheck = $bootstrap_mce_options['mce_csscheck'];
if($mce_csscheck === 'checked') {
  //Add Editor CSS
  add_filter('mce_css', 'bootstrap_mce_editor_style');  
  function bootstrap_mce_editor_style($mce_css) {  
    if ( ! empty( $mce_css ) ) {
      $mce_css .= ',';
      $mce_css .= plugins_url( 'assets/display.css', __FILE__ );
      return $mce_css;
    } 
  } 
}

//Include Template CSS if Option is Selected
$template_csscheck = $bootstrap_mce_options['template_csscheck'];
if($template_csscheck === 'checked') {
  add_action( 'wp_enqueue_scripts', 'bootstrap_mce_template_style' );
  function bootstrap_mce_template_style() {
      $css = plugins_url( 'assets/display.css', __FILE__ );
      wp_register_style( 'bootstrap-mce-buttons-style', $css );
      wp_enqueue_style( 'bootstrap-mce-buttons-style' );
  }
}

//Register Buttons in TinyMCE Wordpress
function register_button( $buttons ) {
   array_push( $buttons, "|", "bootstrapbuttons" );
   return $buttons;
}
function add_plugin( $plugin_array ) {
   $plugin_array['bootstrapbuttons'] = plugins_url( 'assets/mce-popup.js', __FILE__ );
   return $plugin_array;
}
function add_bootstrap_mce_buttons() {

   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }

   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_plugin' );
      add_filter( 'mce_buttons', 'register_button' );
   }

}
add_action('init', 'add_bootstrap_mce_buttons');


?>
