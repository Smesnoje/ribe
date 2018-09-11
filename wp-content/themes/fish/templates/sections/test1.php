<div class="section" >
						<?php the_post_thumbnail_url( $size ); ?> 
						<div class="section_content">
							<div class="section_text">
								<h3 href="<?php the_permalink(); ?>" class="section_title"> 
									<?php the_title(); ?>
								</h3>
								<?php the_content(); ?>
								<h2><?php the_field('test_field'); ?></h2>
							</div>
						</div>
					</div>
