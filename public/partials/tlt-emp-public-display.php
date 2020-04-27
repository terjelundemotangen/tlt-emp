<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://profiles.wordpress.org/terjelundemotangen/
 * @since      1.0.0
 *
 * @package    Tlt_Emp
 * @subpackage Tlt_Emp/public/partials
 */

 $cordelo_event_contact = get_post_meta( get_the_ID(), '_event_contact', true );
 $cordelo_event_contact_phone = get_post_meta( get_the_ID(), '_event_contact_phone', true );
 $cordelo_event_contact_email = get_post_meta( get_the_ID(), '_event_contact_email', true );

?>

<div class="tribe-events-meta-group tribe-events-meta-group-contact">
  <h2 class="tribe-events-single-section-title"><?php _e( 'Primary contact', 'tlt-emp' ); ?></h2>
  <p><?php echo get_post_meta( get_the_ID(), '_event_contact', true ); ?><br>
  <span class="contact-phone"> <?php echo get_post_meta( get_the_ID(), '_event_contact_phone', true ); ?></span><br>
  <span class="contact-email"> <a href="mailto:<?php echo get_post_meta( get_the_ID(), '_event_contact_email', true ); ?>"><?php echo get_post_meta( get_the_ID(), '_event_contact_email', true ); ?></a></span>
  </p>
</div>
