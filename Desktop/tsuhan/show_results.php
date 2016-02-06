<?php

  $args['post_type'] = "jobs";
  $args['showposts'] = 16;
  $args['paged'] = $paged;
 
$the_query = new WP_Query( $args );
  ?>
  
<div class="jobList mbtm50">
	<ul>  
<?php
// The Loop

if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


		<li class="clearfix">
			<div class="jobList-left">
				<p><?php the_field('job_location_prefectures'); ?><?php if (get_field('job_location')): ?><br><?php echo post_custom('job_location'); ?><?php endif; ?></p>
			</div>
			<div class="jobList-right">
				<h2 class="name"><?php the_title(); ?></h2>
				<p class="txt">
					<?php echo mb_substr((post_custom('job_work')),0,65); ?>
				</p>
				<div class="job-btn-width clearfix">
					<div class="data">
						<p>職種：<?php the_field('job_category_01'); ?></p>
						<p><?php if (get_field('job_incom_row')): ?>年収：<?php echo post_custom('job_incom_row'); ?>万円<?php endif; ?><?php if (get_field('job_income_high')): ?>〜<?php echo post_custom('job_income_high'); ?>万円<?php endif; ?></p>
					</div>
					<p class="btn">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/img/page/btn_entry.png" width="200" height="60" alt="通販転職 詳細をみる" />
						</a>
					</p>
				</div>
			</div>
		</li>
	<?php

endwhile; ?>

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
				'mid_size' => 3,
				'current' => ($paged ? $paged : 1),
				'prev_text' => '«',
				'next_text' => '»',
			)); ?> 
<?php
else : echo 'お探しの記事が見つかりません。';
endif;
// Reset Post Data
//wp_reset_postdata();

?> 
</ul>
<?php /**
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
				'total' => $wp_query->max_num_pages,
				'mid_size' => 3,
				'current' => ($paged ? $paged : 1),
				'prev_text' => '«',
				'next_text' => '»',
			)); ?> 
			</div><!-- /.postListNav --> 
**/ ?>

</div> <!-- /.jobList -->