<?php
/**
* Plugin Name: Afterecon Site-Specific Plugin
* Plugin URI: 
* Description: Style and more
* Version: 0.2
* Author: John Vandivier
* Author URI:
* License: MIT Open Source.
*/

include_once(dirname(__FILE__) . '/data_demo.php');

add_action('wp_footer','mod_foot_ssp');
function mod_foot_ssp() {

  /* ref: https://stackoverflow.com/a/20717674/3931488 */
  $url = "https://raw.githubusercontent.com/Vandivier/site-materials/master/public/index.html";
  $gethtml = file_get_contents($url);
  echo $gethtml; //output the content in the page...but should I be putting this in wp_footer?

?>
<script>
/* Google Analytics */
</script>
<?php
}
?>