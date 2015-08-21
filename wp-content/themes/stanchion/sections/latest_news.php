<!--<?php 

	$zerif_total_posts = get_option('posts_per_page'); 
	
	if( !empty($zerif_total_posts) && ($zerif_total_posts > 0) ):
	
		echo '<section class="latest-news" id="howwethink">';
		
			echo '<div class="container">';

				echo '<div class="clear"></div>';
				
				echo '<div id="carousel-homepage-latestnews" class="carousel slide" data-ride="carousel">';					
					
					echo '<div class="carousel-inner" role="listbox">';

						$zerif_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $zerif_total_posts, 'order' => 'DESC','ignore_sticky_posts' => true ) );

						$newSlideActive = '<div class="item active">';
						$newSlide 		= '<div class="item">';
						$newSlideClose 	= '<div class="clear"></div></div>';
						$i_latest_posts= 0;
						
						while ( $zerif_latest_loop->have_posts() ) : $zerif_latest_loop->the_post();

							$i_latest_posts++;

							if ( !wp_is_mobile() ){

									if($i_latest_posts == 1){
										echo $newSlideActive;
									}
									else if($i_latest_posts % 4 == 1){
										echo $newSlide;
									}
								
									echo '<div class="col-sm-3 latestnews-box">';

										echo '<div class="latestnews-img">';
										
											echo '<a href="'.get_permalink().'" title="'.get_the_title().'">';

												if ( has_post_thumbnail() ) :
													the_post_thumbnail();
												else:
													echo '<img src="'.esc_url( get_template_directory_uri() ).'/images/blank-latestposts.png">';
												endif; 

											echo '</a>';
											
										echo '</div>';

										echo '<div class="latesnews-content">';

											echo '<h5 class="latestnews-title"><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h5>';

											the_excerpt();

										echo '</div>';

									echo '</div>';

									if($i_latest_posts % 4 == 0){
										echo $newSlideClose;
									}

							} else {

								if( $i_latest_posts == 1 ) $active = 'active'; else $active = ''; 
		
								echo '<div class="item '.$active.'">';
									echo '<div class="col-md-3 latestnews-box">';
										echo '<div class="latestnews-img">';
											echo '<a href="'.get_permalink().'" title="'.get_the_title().'">';
												if ( has_post_thumbnail() ) :
													the_post_thumbnail();
												else:
													echo '<img src="'.esc_url( get_template_directory_uri() ).'/images/blank-latestposts.png">';
												endif; 
											echo '</a>';
										echo '</div>';
										echo '<div class="latesnews-content">';
											echo '<h5 class="latestnews-title"><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h5>';
											the_excerpt();
										echo '</div>';
									echo '</div>';
								echo '</div>';
							}
						
						endwhile;

						if ( !wp_is_mobile() ) {

							// if there are less than 10 posts
							if($i_latest_posts % 4!=0){
								echo $newSlideClose;
							}

						}

						wp_reset_postdata(); 
						
					echo '</div>';

					/* Controls */
					echo '<a class="left carousel-control" href="#carousel-homepage-latestnews" role="button" data-slide="prev">';
						echo '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>';
						echo '<span class="sr-only">'.__('Previous','zerif-lite').'</span>';
					echo '</a>';
					echo '<a class="right carousel-control" href="#carousel-homepage-latestnews" role="button" data-slide="next">';
						echo '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>';
						echo '<span class="sr-only">'.__('Next','zerif-lite').'</span>';
					echo '</a>';
				echo '</div>';

			echo '</div>';
		echo '</section>';

endif; ?>-->


<div class="blog-container">  
  <div class="col-md-9 list-item-container">
    <ul class="blog-unordered-list">
      <?php // Display blog posts on any page @ http://m0n.co/l
		    $temp = $wp_query; $wp_query= null;
		    $wp_query = new WP_Query(); 
        $wp_query->query('showposts=7&tag=white-paper' . '&paged='.$paged);
		    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li class="blog-list-item">
        <a href=""
          <?php the_permalink(); ?>" title="Read more">
          <?php the_post_thumbnail(); ?>
        </a>
        <div class="col-md-9 post-text">
          <h5>
            <?php the_title(); ?>
          </h5>
          <?php the_excerpt(); ?>
        </div>
      </li>
      <!--<div>
        <a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?>
          <?php the_post_thumbnail(); ?>
      
          <h6>Hello this thing</h6>
        </a>
      </div>-->
      <?php endwhile; ?>
    </ul>
  </div>
  <div class="col-md-3 list-item-container">
    <aside id="archives" class="widget">
      <h1 class="widget-title">
        <?php _e( 'Archives', 'zerif-lite' ); ?>
      </h1>
      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </aside>
  </div>
  
  <?php if ($paged > 1) { ?>

  <nav id="nav-posts">
    <div class="prev">
      <?php next_posts_link('&laquo; Previous Posts'); ?>
    </div>
    <div class="next">
      <?php previous_posts_link('Newer Posts &raquo;'); ?>
    </div>
  </nav>
  <?php } else { ?>
  <!--<nav id="nav-posts">
    <div class="prev">
      <?php next_posts_link('&laquo; Previous Posts'); ?>
    </div>
  </nav>-->
  <?php } ?>
  <?php wp_reset_postdata(); ?>
  
</div>

