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

$_SESSION['counter'] = 0;
unset($_SESSION['s_job_location']);
unset($_SESSION['s_job_category']);
unset($_SESSION['s_job_income']);
unset($x,$y,$z);

?>


<?php get_header(); ?>
	
	<div class="main-all-width clearfix">
		<div class="main-contents">
			

<div class="search-box">

<div class="search-box-title page-tit">
JOB SEARCH <span>求人検索</span>
</div>
<div class="search-box-contents">
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
<select name="job_location" style="background-color: #ffffff;box-shadow: 1px 1px 1px 1px #737373;width: 140%;">
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
<option value = "埼玉県">埼玉県</option>
<option value = "千葉県">千葉県</option>
<option value = "東京都">東京都</option>
<option value = "神奈川県">神奈川県</option>
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



 <div class="job-list-all">

	<?php include( TEMPLATEPATH . '/parts-jobslist.php' ); ?>

</div>
 
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>