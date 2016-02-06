<?php
/*
Template Name: Job Search Page Template(Front Page Only)
Author: Odysseus Ambut
Version: 1.0
Website: http://www.web-mech.net'
Description: This is a page template for Search Box (Front Page Only)
*/
?>
<?php
include("listvalues.php");

?>
<?php get_header(); ?>
	<div class="smp-pankuzu top100">
		<div class="pankuzu-list">
			<ul>
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display_list();
			    }?>
			</ul>
		</div>
	</div>

	<h1 class="page-tit"><?php the_title(); ?></h1>
	
	<div class="trend-main">
		<h2 class="service-main-tit">～独自案件・非公開求人多数～</h2>
		<p class="trend-main-dtl">長年通販業界で蓄積したノウハウと多数の通販企業とのお取引実績がある弊社だからこそご紹介できる独自案件・非公開求人を取り揃えております。あなたの経験とスキルを活かせるお仕事をご紹介いたします。</p>
	</div>
	
	
<h1 class="page-tit">JOB SEARCH <span>求人検索</span></h1>	
<div class="search-box">


<div class="search-box-contents">

<!-- <div class="search-box-title page-tit">
JOB SEACH <span>案件検索</span>
</div> -->

<table class="search-box-table">
<tr>
<th>勤務地</th>
<th>職種</th>
<th>最低年収</th>
<th></th>
</tr>
<tr>
<td>
<form role="search" method="get" action="<?php bloginfo('url'); ?>/search-results/">
<select name="job_location" style="background-color: #ffffff;box-shadow: 1px 1px 1px 1px #737373;width: 150%;">
<option value="">ALL</option>
<option value = "北海道">北海道</option>
<option value = "青森県">青森県</option>
<option value = "岩手県">岩手県</option>
<option value = "宮城県">宮城県</option>
<option value = "秋田県">秋田県</option>
<option value = "山形県">山形県</option>
<option value = "福島県">福島県</option>
<option value = "茨城県">茨城県</option>
<option value = "栃木県">栃木県</option>
<option value = "群馬県">群馬県</option>
<option value = "埼玉">埼玉県</option>
<option value = "千葉">千葉県</option>
<option value = "東京">東京都</option>
<option value = "神奈川">神奈川県</option>
<option value = "新潟県">新潟県</option>
<option value = "富山県">富山県</option>
<option value = "石川県">石川県</option>
<option value = "福井県">福井県</option>
<option value = "山梨県">山梨県</option>
<option value = "長野県">長野県</option>
<option value = "岐阜県">岐阜県</option>
<option value = "静岡県">静岡県</option>
<option value = "愛知県">愛知県</option>
<option value = "三重県">三重県</option>
<option value = "滋賀県">滋賀県</option>
<option value = "京都府">京都府</option>
<option value = "大阪府">大阪府</option>
<option value = "兵庫県">兵庫県</option>
<option value = "奈良県">奈良県</option>
<option value = "和歌山県">和歌山県</option>
<option value = "鳥取県">鳥取県</option>
<option value = "島根県">島根県</option>
<option value = "岡山県">岡山県</option>
<option value = "広島県">広島県</option>
<option value = "山口県">山口県</option>
<option value = "徳島県">徳島県</option>
<option value = "香川県">香川県</option>
<option value = "愛媛県">愛媛県</option>
<option value = "高知県">高知県</option>
<option value = "福岡県">福岡県</option>
<option value = "佐賀県">佐賀県</option>
<option value = "長崎県">長崎県</option>
<option value = "熊本県">熊本県</option>
<option value = "大分県">大分県</option>
<option value = "宮崎県">宮崎県</option>
<option value = "鹿児島県">鹿児島県</option>
<option value = "沖縄県">沖縄県</option>
</select>

</td>
<td>
<select name="job_category" style="background-color: #ffffff;box-shadow: 1px 1px 1px 1px #737373;width: 80%;">
<option value="">ALL</option>
<option value = "ECサイト運営">ECサイト運営</option>
<option value = "WEBマーケティング">WEBマーケティング</option>
<option value = "WEBデザイナー">WEBデザイナー</option>
<option value = "マーケティング">マーケティング </option>
<option value = "商品企画・開発">商品企画・開発 </option>
<option value = "コールセンター">コールセンター</option>
<option value = "営業">営業</option>
<option value = "バックオフィス">バックオフィス</option>
<option value = "MD・バイヤー">MD・バイヤー</option>
<option value = "その他">その他</option>
</select>
</td>

<td>
<select name="job_income" style="background-color: #ffffff;box-shadow: 1px 1px 1px 1px #737373;width: 80%;">
<option value="">ALL</option>
<option value = "200万以上">200万以上</option>
<option value = "300万以上">300万以上</option>
<option value = "400万以上">400万以上</option>
<option value = "500万以上">500万以上</option>
<option value = "600万以上">600万以上</option>
</select>
</td>
<td>
<button type="submit" value="search">
<span>検索</span>
<i>></i>
</button>
</form>
</td>
</tr>
</table>
</div>
</div>


	</div>
	
	</div>
	
	<div class="pickup-sub-tit margin-50">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/top/top-8-tit.png" alt="通販転職　注目案件はこちら">
	</div>
	
	
<!-- Results Starts Here -->

<?php

  $args['post_type'] = "jobs";
 // $args['showposts'] = 10;
  $args['posts_per_page'] = 3;
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
				<span class="new-job-area" style="background: rgb(214,176,0);">
						<?php the_field('job_location_prefectures'); ?><?php if (get_field('job_location')): ?><br><?php echo post_custom('job_location'); ?><?php endif; ?>
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
					<p><?php if (get_field('job_incom_row')): ?>年収：<?php echo post_custom('job_incom_row'); ?>万円<?php endif; ?><?php if (get_field('job_income_high')): ?>〜<?php echo post_custom('job_income_high'); ?>万円<?php endif; ?></p>
				</div>
				<div class="t-center mbtm50">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/job/job-3-btn.png" alt="通販転職の求人案件をもっと見る">
					</a>
				</div>
			</li>

<?php

endwhile;
endif;
// Reset Post Data
wp_reset_postdata();
?> 
</ul> 
</div> <!-- /.jobList -->
			
	<div class="date-brd clearfix">
		<div class="top-new-job-tit-right">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/top/top-12borderpng.png" width="216" height="71" alt="通販転職求人案件はこちら">
				<?php /* ループ開始 */
					query_posts(
						array(
				    		'post_type' => 'jobs',
				    		'posts_per_page' => 1,
				    		'orderby' => 'date',
				    		'order' => 'DESC'
				        )
					);
					if (have_posts()) : while (have_posts()) : the_post();
				?>
			<div class="top-new-job-tit-right-date">
				<?php the_time('Y.m.d'); ?>更新
			</div>
			<?php endwhile; else: /* ↓エントリーが存在しない場合 */ ?>
			<?php endif; /* ループ終了 */ ?>
		</div>
	</div>


	<div class="new-job-list">
		<ul>
<?php /* ループ開始 */
	
  $args['post_type'] = "jobs";
  $args['posts_per_page'] = 12;
  $args['paged'] = $paged;
 
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<li>
				<div class="new-job-tit">
					<span class="new-job-area">
						<?php the_field('job_location_prefectures'); ?><?php if (get_field('job_location')): ?><br><?php echo post_custom('job_location'); ?><?php endif; ?>
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
					<p><?php if (get_field('job_incom_row')): ?>年収：<?php echo post_custom('job_incom_row'); ?>万円<?php endif; ?><?php if (get_field('job_income_high')): ?>〜<?php echo post_custom('job_income_high'); ?>万円<?php endif; ?></p>
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
		<?php else: ?>
		<?php endif; /* ループ終了 */ ?>
		<?php wp_reset_query(); /* クエリをリセット */ ?>
		</ul>
	</div>

<?php get_footer(); ?>