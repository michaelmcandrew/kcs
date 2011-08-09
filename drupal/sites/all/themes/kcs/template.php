<?php
/**
* Override or insert PHPTemplate variables into the search_block_form template.
*
* @param $vars
*   A sequential array of variables to pass to the theme template.
* @param $hook
*   The name of the theme function being called (not used in this case.)
*/
// I used garland so you have to change garland to the name of your current theme
function garland_preprocess_search_block_form(&$vars, $hook) {
   
  // Removes the "Search this site" label from the form, leave blank if you don't want a label
  $vars['form']['search_block_form']['#title'] = t('');
   
  // default value for the textbox
  $vars['form']['search_block_form']['#value'] = t('Search...');
   
  //wrapper for the search box and button
  $vars['form']['search_block_form']['#prefix'] = '<div id = "searchwrapper"><div class ="searchbox">';
   
   
  // Add a custom class and placeholder text to the search box.
  $vars['form']['search_block_form']['#attributes'] = array('class' => 'NormalTextBox txtSearch',
                                                              'onfocus' => "if (this.value == 'Search...') {this.value = '';}",
                                                              'onblur' => "if (this.value == '') {this.value = 'Search...';}");
   
  // end of searchbox
  $vars['form']['search_block_form']['#suffix'] = '</div>';
   
  unset($vars['form']['search_block_form']['#printed']);
   
  // Rebuild the rendered version (search form only, rest remains unchanged)
  $vars['search']['search_block_form'] = drupal_render($vars['form']['search_block_form']);
   
  // I wrapped the submit button inside a div for styling
  $vars['form']['submit']['#prefix'] = '<div class = "searchbutton">';
  // input type for search button
  $vars['form']['submit']['#type'] = 'image_button';
  // path to the image you're going to use
  $vars['form']['submit']['#src'] = path_to_theme() . '/images/search-button.png';
  $vars['form']['submit']['#suffix'] = '</div></div>'; // end of searchbox class and search wrapper id
     
  // Rebuild the rendered version (submit button, rest remains unchanged)
  unset($vars['form']['submit']['#printed']);
  $vars['search']['submit'] = drupal_render($vars['form']['submit']);
  
  // Collect all form elements to make it easier to print the whole form.
  $vars['search_form'] = implode($vars['search']);
}
?>