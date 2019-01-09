<?php 
/**
* My Theme Custom Meta
* http://docs.layerswp.com/how-to-add-custom-fields-to-posts-and-pages/
**/
add_action( 'save_post', 'smhthmc_toc_save_data' );
add_action( 'add_meta_boxes', 'smhthmc_add_meta_box' );



// Add The Meta Box
function smhthmc_add_meta_box() {
 
      add_meta_box(
         'smhthmc_meta_toc',
         __( 'TOC', 'smhthmc' ),
         'smhthmc_meta_box_callback',
         'egitimler'
      );      
  }

/*
* Create Meta Callback - Prints the box content.
* @param WP_Post $post The object for the current post/page.
*/
function smhthmc_meta_box_callback( $post ) {

   global $post;
 
   // Add an nonce field so we can check for it later.
   wp_nonce_field( 'smhthmc_toc_save_data', 'smhthmc_toc_meta_box_nonce' );
    
   /*
   * Use get_post_meta() to retrieve an existing value
   * from the database and use the value for the form.
   */
    

   $toc = get_post_meta( $post->ID, '_toc_value_key', true );

   
   /* Add WP Editor as replacement of textarea */
   echo '<p>';
   echo '<label for="smhthmc_toc_field" >'.__('TOC', 'smhthmc').'</label> ';
   wp_editor( $toc, '_toc_value_key', array(
      'wpautop'       => false,
      'media_buttons' => false,
      'teeny'         => true,
      'tinymce' => true
   ) );
   echo '</p>';
    
   }

//Save The Meta

function smhthmc_toc_save_data( $post_id ) {
	
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'smhthmc_toc_meta_box_nonce' ] ) ) {
	   if( ! wp_verify_nonce($_POST[ 'smhthmc_toc_meta_box_nonce' ], 'smhthmc_toc_save_data')) {
         return;
      }
   
      if( defined('DOING_AUTOSAVE' ) && DOING_AUTOSAVE) {
         return;
      }
   
      if( ! current_user_can('edit_post', $post_id)) {
         return;
      }
   
      if( ! isset($_POST[ '_toc_value_key' ])) {
         return;
      }
   }
   
   if( isset( $_POST[ '_toc_value_key' ] ) ) {
      update_post_meta( $post_id, '_toc_value_key', sanitize_text_field( $_POST[ '_toc_value_key' ] ) );
      }
   

/*    $my_data= $_POST[ '_toc_value_key' ] ;

   update_post_meta( $post_id,' _toc_value_key', $my_data); */
	
}

	


/**
* My Theme Custom Meta
* http://docs.layerswp.com/how-to-add-custom-fields-to-posts-and-pages/
**/
 
// Add The Meta Box
 
//Add The Callback
   //Build the form with Layers_Form_Elements
 
//Save The Meta