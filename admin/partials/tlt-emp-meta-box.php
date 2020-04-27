<?php

/**
 * Meta Box
 *
 * @link       https://profiles.wordpress.org/terjelundemotangen/
 * @since      1.0.0
 *
 * @package    Tlt_Emp
 * @subpackage Tlt_Emp/admin/partials
 */
?>

<?php

$event_contact_name = get_post_meta( get_the_ID(), '_event_contact', true );
$event_contact_phone = get_post_meta( get_the_ID(), '_event_contact_phone', true);
$event_contact_email = get_post_meta( get_the_ID(), '_event_contact_email', true);

wp_nonce_field( 'emp_nonce_check', 'emp_meta_box_nonce' );

?>

<div id="emp-meta-box">

  <p><label for="event-contact-meta-box"><?php echo __( 'Event contact name', 'tlt-emp' ); ?>:</label><br>
  <input type="text" name="event-contact-meta-box" id="event-contact-meta-box" value="<?php echo $event_contact_name; ?>" size="50"></p>

  <p><label for="event-contact-phone-meta-box"><?php echo __( 'Event contact phone', 'tlt-emp' ); ?>:</label><br>
  <input type="tel" name="event-contact-phone-meta-box" id="event-contact-phone-meta-box" value="<?php echo $event_contact_phone; ?>" size="15"></p>

  <p><label for="event-contact-email-meta-box"><?php echo __( 'Event contact email', 'tlt-emp' ); ?>:</label><br>
  <input type="email" name="event-contact-email-meta-box" id="event-contact-email-meta-box" value="<?php echo $event_contact_email; ?>" size="50"></p>

</div><!-- #emp-meta-box -->
