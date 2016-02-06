<?php

  $args['post_type'] = "jobs";
 // $args['showposts'] = 10;
  $args['paged'] = $paged;
 
$the_query = new WP_Query( $args );
  ?>
  
<div class="new-job-list">
	<ul>  
	
<?php
// The Loop

if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


			<li>
				<div class="new-job-tit">
					<span class="new-job-area">
						<?php echo post_custom('job_location_prefectures'); ?>
					</span>
					<span class="font-smp" style="padding-left: 20px;">
						<?php the_title(); ?>
					</span>
				</div>
				<div class="mbtm50">
					<h3><?php echo mb_substr((post_custom('job_work')),0,65); ?></h3>
				</div>
				<div class="job-ids">
					<p>職種：<?php the_field('job_category_01'); ?></p>
					<p>年収：<?php echo post_custom('job_incom_row'); ?>万円 ~ <?php echo post_custom('job_income_high'); ?>万円</p>
				</div>
				<div class="t-center mbtm50">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/job/job-3-btn.png" alt="通販転職の求人案件をもっと見る">
					</a>
				</div>
			</li>
		<?php endwhile; ?>
		<div class="postListNav clr">
			<?php global $wp_rewrite;
			$paginate_base = get_pagenum_link(1);
			if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
				$paginate_format = '';
				$paginate_base = add_query_arg('paged','%#%');
			}
			else{
				$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
				user_trailingslashit('page/%#%/','paged');;
				$paginate_base .= '%_%';
			}
			echo paginate_links(array(
				'base' => $paginate_base,
				'format' => $paginate_format,
				'total' => $the_query->max_num_pages,
				'mid_size' => 2,
				'current' => ($paged ? $paged : 1),
				'prev_text' => '«',
				'next_text' => '»',
			)); ?>
		</div><!-- /.postListNav -->
		<?php else: echo '<p style="text-align:center">お探しの記事が見つかりません。</p>';?>
		<?php endif; /* ループ終了 */ ?>
		<?php wp_reset_query(); /* クエリをリセット */ ?>
		</ul>
</div> <!-- /.jobList -->