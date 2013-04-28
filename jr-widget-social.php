<?php
/**
 * Social Network Icons Widget Class
 */
class jr_social_widget extends WP_Widget {
 
    function jr_social_widget() {
        parent::WP_Widget(false, $name = 'Social Networks'); 
    }
 
    function widget($args, $instance) { 
        extract( $args );
        $facebook    = $instance['facebook'];
        $youtube    = $instance['youtube'];
        $googleplus    = $instance['googleplus'];
        $twitter    = $instance['twitter'];
        $linkedin    = $instance['linkedin'];
        $pinterest    = $instance['pinterest'];
        ?>
                  <?php 
                  if ( $facebook )
                        echo '<a target="_blank" href="'.$facebook.'" class="widget-social ico-facebook"></a>'; 
                  if ( $youtube )
                        echo '<a target="_blank" href="'.$youtube.'" class="widget-social ico-youtube"></a>'; 
                  if ( $googleplus )
                        echo '<a target="_blank" href="'.$googleplus.'" class="widget-social ico-googleplus"></a>'; 
                  if ( $twitter )
                        echo '<a target="_blank" href="'.$twitter.'" class="widget-social ico-twitter"></a>'; 
                  if ( $linkedin )
                        echo '<a target="_blank" href="'.$linkedin.'" class="widget-social ico-linkedin"></a>'; 
                  if ( $pinterest )
                        echo '<a target="_blank" href="'.$pinterest.'" class="widget-social ico-pinterest"></a>'; ?>
        <?php
    }

    function update($new_instance, $old_instance) {   
    $instance = $old_instance;
    $instance['facebook'] = strip_tags($new_instance['facebook']);
    $instance['youtube'] = strip_tags($new_instance['youtube']);
    $instance['googleplus'] = strip_tags($new_instance['googleplus']);
    $instance['twitter'] = strip_tags($new_instance['twitter']);
    $instance['linkedin'] = strip_tags($new_instance['linkedin']);
    $instance['pinterest'] = strip_tags($new_instance['pinterest']);
        return $instance;
    }
 
    function form($instance) {  
        $facebook     = esc_attr($instance['facebook']);
        $youtube     = esc_attr($instance['youtube']);
        $googleplus     = esc_attr($instance['googleplus']);
        $twitter    = esc_attr($instance['twitter']);
        $linkedin    = esc_attr($instance['linkedin']);
        $pinterest    = esc_attr($instance['pinterest']);
        ?>
         <p>Please place your public profile URL in below.  If it's blank, the icon will not show.</p>
         <p>
          <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
         </p>
         <p>
          <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('YouTube:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo $youtube; ?>" />
         </p>
         <p>
          <label for="<?php echo $this->get_field_id('googleplus'); ?>"><?php _e('Google+:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text" value="<?php echo $googleplus; ?>" />
         </p>
         <p>
          <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
         </p>
         <p>
          <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIN:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
         </p>
         <p>
          <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo $pinterest; ?>" />
         </p>
        <?php 
    }
 
} // end class jr_social_widget
add_action('widgets_init', create_function('', 'return register_widget("jr_social_widget");'));