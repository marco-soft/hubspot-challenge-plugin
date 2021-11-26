<?php
/**
 * Plugin Name: Hubspot Challenge
 * Plugin URI: https://www.hubspot.com
 * Description: Hubspot challenge for Spark Digital. Add [hubspot_challenge] to whatever page or post.
 * Version: 0.1
 * Text Domain: hubspot-challenge
 * Author: Marco Garofalo
 * Author URI: https://www.hubspot.com
 */
 



function integrate($content) {
	$content .= '<div class="my-container">
					<div class="my-wrap">				
					<div class="data">
						<h1>Schedule a demo</h1>
						<p class="description">See how brightweel can help you manage attendance, collect tuition and communicate with families all in one place.</p>
						<ul class="benefits">
							<li><b>Save each staff member up to 20 hours a month</b>, focusing their time on students, not busywork</li>
							<li><b>Centralize messaging, newsletters, and billing</b> to ensure families never miss important updates and ensure you get paid on time</li>
							<li><b>Stay safe and COVID-19 compilant</b> with contactless check-in, healt checks, and room ratio tracking</li>
						</ul>
					</div>
					<div class="data"><script charset="utf-8" type="text/javascript"src="https:/js.hsforms.net/forms/v2.js"></script>
						<script>
							hbspt.forms.create({
								region: "na1",
								portalId: "2716595",
								formId: "7ce26e6b-c41c-46b1-acf5-879dedf86f87",
								cssClass: "myHspt",
								errorClass: "myHsptError",
								submitButtonClass: "myHsptSubmit",
								onFormSubmitted: function(e){
									Swal.fire({
									icon: "success",
									title: "Form submitted successfully!",
									showConfirmButton: false,
									timer: 1500
									})
								}
							});
							</script>
						</div>
					</div>
				</div>';
	 
	
	// Return the content
	return $content; 
	 
	}
	
	wp_register_script('hsforms', 'https://js.hsforms.net/forms/v2.js');
	wp_register_script('sweetalert', 'https://cdn.jsdelivr.net/npm/sweetalert2@11');
	wp_register_style ( 'mystyle', plugins_url ( 'css/style.css', __FILE__ ) );
	
	wp_enqueue_script('hsforms'); 
	wp_enqueue_script('sweetalert'); 
	wp_enqueue_style('mysample');
	
	add_shortcode('hubspot_challenge', 'integrate'); 