
<section class='regenerate rta_hidden'>
  <div class='container two-panel-wrap'>

    <div class="rta_progress two-panel-wrap">
      <div class="images rta_thumbnail_view rta_panel_off">
          <h5><?php _e('Regenerated image:','regenerate-thumbnails-advanced'); ?></h5>
          <div class='thumbnail'> <img src="" alt=""> </div>
      </div>
        <div class='rta_progress_view rta_panel_off'>
          <svg class="CircularProgressbar" viewBox="0 0 100 100">
              <path class="CircularProgressbar-trail" d="
                  M 50,50
                  m 0,-46
                  a 46,46 0 1 1 0,92
                  a 46,46 0 1 1 0,-92
                  " stroke-width="8" fill-opacity="0">
              </path>
              <path class="CircularProgressbar-path" d="
                  M 50,50
                  m 0,-46
                  a 46,46 0 1 1 0,92
                  a 46,46 0 1 1 0,-92
                  " stroke-width="8" fill-opacity="0" style="stroke-dasharray: 289.027px, 289.027px; stroke-dashoffset: 289.027px;">
              </path>
              <text class="CircularProgressbar-text" x="50" y="50">0%</text>
              <text class="progress-count" x="50" y="70"><tspan class='current'>0</tspan> / <tspan class='total'>0</tspan></text>
          </svg>
          <button class='button stop-process' disabled><?php _e('Stop Process', 'regenerate-thumbnails-advanced') ?></button>
       </div>
    </div>

    <div class="rta_status_box">
        <div class="rta_notices rta_panel_off">
            <ul class="statuslist">
            </ul>
        </div>
        <div class="rta_wait_loader rta_panel_off" >
          <span class='dashicons dashicons-update'>&nbsp;</span>
          <div>
          <h4><?php _e('Starting Process', 'regenerate-thumbnails-advanced'); ?></h4>
          <?php _e('Please wait...','regenerate-thumbnails-advanced'); ?>
          </div>
        </div>

    </div>



    <?php
  		#wp_nonce_field('enable-media-replace');
      $plugins = get_plugins();
      $spInstalled = isset($plugins['shortpixel-image-optimiser/wp-shortpixel.php']);
      $spActive = is_plugin_active('shortpixel-image-optimiser/wp-shortpixel.php');

  	?>

    <div class='rta_success_box rta_hidden'>
        <div class='modal-close'><span class='dashicons dashicons-no'>&nbsp;</span></div>
        <h3 class='header'><?php _e('Done!', 'regenerate-thumbnails-advanced'); ?></h3>
        <p><?php _e('Regenerate Thumbnails Advanced is done with your task', 'regenerate-thumbnails-advanced'); ?></p>

        <div class='shortpixel'>
          <?php if (! $spInstalled): ?>
          <h3 class="">
    				<a href="https://shortpixel.com/otp/af/TFXUHHC28044" target="_blank">
    					<?php echo esc_html__("Optimize your images with ShortPixel, get +50% credits!", "enable-media-replace"); ?>
    				</a>
    			</h3>
    			<div class="">
    				<a href="https://shortpixel.com/otp/af/TFXUHHC28044" target="_blank">
    					<img src="https://optimizingmattersblog.files.wordpress.com/2016/10/shortpixel.png">
    				</a>
    			</div>
    			<p>
    				<?php echo esc_html__("Get more Google love by compressing your site's images! Check out how much ShortPixel can save your site and get +50% credits when signing up as an Enable Media Replace user! Forever!", "enable-media-replace"); ?>
    			</p>
    			<div class=""><div>
    					<a class="button button-primary" id="shortpixel-image-optimiser-info" href="https://shortpixel.com/otp/af/TFXUHHC28044" target="_blank">
    						<?php echo esc_html__("More info", "enable-media-replace"); ?></p>
    					</a>
    				</div>
    			</div>
          <?php endif; ?>
          <?php if ($spInstalled && $spActive): ?>
           <p class='gotobulk'><?php printf(__('Thumbnails successfully regenerated. <strong>Go to %s ShortPixel Bulk page %s to optimize the updated thumbnails.</strong>'), '<a href="' . admin_url('upload.php?page=wp-short-pixel-bulk') . '">', '</a>'); ?></p>
         <?php elseif($spInstalled):
           $path = 'shortpixel-image-optimiser/wp-shortpixel.php';
           $activate_url = wp_nonce_url(admin_url('plugins.php?action=activate&plugin='.$path), 'activate-plugin_'.$path);
           ?>
           <p class='gotobulk'><strong><?php printf(__('%s Activate ShortPixel %s to optimize your newly generated thumbnails.'), '<a href="' . $activate_url . '">', '</a>'); ?></strong></p>
         <?php endif; ?>
        </div>
    </div>

  </div>  <!-- container -->
</section>
