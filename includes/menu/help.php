<div class="wrap">
	<?php echo "<h2>".__(testimonial_plugin_name.' Help')."</h2>";

	
	
	?>
    <br />



    <div class="para-settings">
        <ul class="tab-nav"> 
            <li nav="1" class="nav1 active">Help & Upgrade</li>
        </ul> <!-- tab-nav end -->  
        
		<ul class="box">
        
            <li style="display: block;" class="box1 tab-box active">
<div class="option-box">
                    <p class="option-title">Need Help ?</p>
                    <p class="option-info">Feel free to contact with any issue for this plugin, Ask any question via forum <a href="<?php echo testimonial_qa_url; ?>"><?php echo testimonial_qa_url; ?></a> <strong style="color:#139b50;">(free)</strong><br />
                    
                    
                    

    <?php


    if(testimonial_customer_type=="free")
        {
    
            echo 'You are using <strong> '.testimonial_customer_type.' version  '.testimonial_plugin_version.'</strong> of <strong>'.testimonial_plugin_name.'</strong>, To get more feature you could try our premium version. ';
            
            echo '<br /><a href="'.testimonial_pro_url.'">'.testimonial_pro_url.'</a>';
            
        }
    else
        {
    
            echo 'Thanks for using <strong> premium version  '.testimonial_plugin_version.'</strong> of <strong>'.testimonial_plugin_name.'</strong> ';	
            
            
        }
    
     ?>       

           
                    
                    
                    
                    </p>
                    
                    
                    
                </div>
                
                
				<div class="option-box">
                    <p class="option-title">Submit Reviews...</p>
                    <p class="option-info">We are working hard to build some awesome plugins for you and spend thousand hour for plugins. we wish your three(3) minute by submitting five star reviews at wordpress.org. if you have any issue please submit at forum.</p>
                	<img class="testimonial-pro-pricing" src="<?php echo testimonial_plugin_url."css/five-star.png";?>" /><br />
                    <a target="_blank" href="<?php echo testimonial_wp_reviews; ?>">
                		<?php echo testimonial_wp_reviews; ?>
               		</a>
                    
                    
                    
                </div>
                
				<div class="option-box">
                    <p class="option-title">Please Share</p>
                    <p class="option-info">If you like this plugin please share with your social share network.</p>
                    <?php
                    
						echo testimonial_share_plugin();
					?>
                </div>

                
            </li>        
        
        
    
    </div>

        
</div> <!-- wrap end -->