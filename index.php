<?php
  get_header();
  include get_template_directory()."/php/elements/el-constructor.php";

  if( is_page(2) ) : get_template_part('parts/section', 'number'); endif;
  if( is_page(2) ) : get_template_part('parts/section', 'vuz'); endif;
  get_template_part('parts/section', 'fishka');
  if( is_page(2) ) : get_template_part('parts/section', 'skills'); endif;
  get_template_part('parts/section', 'info');
  if( is_page(2) ) : get_template_part('parts/section', 'team'); endif;
  //get_template_part('parts/section', 'calc');
  if( is_page(2) ) : get_template_part('parts/section', 'steps'); endif;
  if( !is_page(2) ) : get_template_part('parts/section', 'rewiews'); endif;
  

  get_footer();
?>
