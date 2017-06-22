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

//style and js customizations
add_action('wp_head','mod_head_ssp');

function mod_head_ssp() {?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<script src='//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.js'></script>
<script src='http://www.afterecon.com/wp-content/plugins/jv_afterecon_ssp_v1_150324/list.js' type='text/javascript'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.5.1/katex.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.5.1/katex.min.js"></script>
<?php
}

add_action('wp_footer','mod_foot_ssp');
function mod_foot_ssp() {?>
<style>
  a:hover {
	text-decoration: underline;
  }
  
  .fadeimg {
	  opacity: .7;
	}
  
  .fadeimg:hover {
	  opacity: 1;
	}
  #container {
	max-width: 75%;
  }
  .reddit-voting .unstyled {
    padding: 0;
  }
  #post-5565.page .reddit-voting {
    display: none;
  }
  div#theChampTabs-0 div._2pi8 div._5lm5._2pi3._3-8y {
    display: none !important;
    visibility: hidden !important;
  }
</style>

<script>
/* Google Analytics goes here */
</script>

<script>
  'use strict'
	/*
  //if(window.location.href.slice(-3) == '\random' || 'random\\') //todo then display random post or page
  if($('.reddit-voting').length > 1) {
    $('.reddit-voting')[0].remove();
  }
  
  if ($('body').hasClass('single-post')) {
    $('.read-more')[0].remove();
	}*/
</script>
<?php
}
?>