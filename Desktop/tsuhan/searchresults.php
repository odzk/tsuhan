<?php
/*
Template Name: Search Result Page Template(Experimental)
Author: Odysseus Ambut
Version: 1.0
Website: http://www.web-mech.net'
Description: This is a page template for Search Box
*/
?>

<?php get_header(); ?>


<?php if (!session_id())

session_start(); 

$x = $_GET['job_location'];
$y = $_GET['job_category'];
$z = $_GET['job_income'];

$_SESSION['s_job_location'] = $x;
$_SESSION['s_job_category'] = $y;
$_SESSION['s_job_income'] = $z;

if(empty($x)) { $x = $_SESSION['s_job_location'];}
if(empty($y)) { $y = $_SESSION['s_job_category'];}
if(empty($z)) { $z = $_SESSION['s_job_income'];}
if($x == 'ALL') { $x = '';}
if($y == 'ALL') { $y = '';}
if($z == 'ALL') { $z = '';}


?>

<?php
include("listvalues.php");

?>

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
<option value="ALL" <?php if(($x) == 'ALL') { echo 'selected'; }?> >ALL</option>
<option value = "北海道" <?php if(($x) == '北海道') { echo 'selected'; }?> >北海道</option>
<option value = "青森県" <?php if(($x) == '青森県') { echo 'selected';} ?> >青森県</option>
<option value = "岩手県" <?php if(($x) == '岩手県') { echo 'selected';} ?> >岩手県</option>
<option value = "宮城県" <?php if(($x) == '宮城県') { echo 'selected';} ?> >宮城県</option>
<option value = "秋田県" <?php if(($x) == '秋田県') { echo 'selected';} ?> >秋田県</option>
<option value = "山形県" <?php if(($x) == '山形県') { echo 'selected';} ?> >山形県</option>
<option value = "福島県" <?php if(($x) == '福島県') { echo 'selected';} ?> >福島県</option>
<option value = "茨城県" <?php if(($x) == '茨城県') { echo 'selected'; }?> >茨城県</option>
<option value = "栃木県" <?php if(($x) == '栃木県') { echo 'selected';} ?> >栃木県</option>
<option value = "群馬県" <?php if(($x) == '群馬県') { echo 'selected';} ?> >群馬県</option>
<option value = "埼玉県" <?php if(($x) == '埼玉県') { echo 'selected';} ?> >埼玉県</option>
<option value = "千葉県" <?php if(($x) == '千葉県') { echo 'selected';} ?> >千葉県</option>
<option value = "東京都" <?php if(($x) == '東京都') { echo 'selected';} ?> >東京都</option>
<option value = "神奈川県" <?php if(($x) == '神奈川県') { echo 'selected';} ?> >神奈川県</option>
<option value = "新潟県" <?php if(($x) == '新潟県') { echo 'selected'; }?> >新潟県</option>
<option value = "富山県" <?php if(($x) == '富山県') { echo 'selected';} ?> >富山県</option>
<option value = "石川県" <?php if(($x) == '石川県') { echo 'selected';} ?> >石川県</option>
<option value = "福井県" <?php if(($x) == '福井県') { echo 'selected';} ?> >福井県</option>
<option value = "山梨県" <?php if(($x) == '山梨県') { echo 'selected';} ?> >山梨県</option>
<option value = "長野県" <?php if(($x) == '長野県') { echo 'selected';} ?> >長野県</option>
<option value = "岐阜県" <?php if(($x) == '岐阜県') { echo 'selected';} ?> >岐阜県</option>
<option value = "静岡県" <?php if(($x) == '静岡県') { echo 'selected'; }?> >静岡県</option>
<option value = "愛知県" <?php if(($x) == '愛知県') { echo 'selected';} ?> >愛知県</option>
<option value = "三重県" <?php if(($x) == '三重県') { echo 'selected';} ?> >三重県</option>
<option value = "滋賀県" <?php if(($x) == '滋賀県') { echo 'selected';} ?> >滋賀県</option>
<option value = "京都府" <?php if(($x) == '京都府') { echo 'selected';} ?> >京都府</option>
<option value = "大阪府" <?php if(($x) == '大阪府') { echo 'selected';} ?> >大阪府</option>
<option value = "兵庫県" <?php if(($x) == '兵庫県') { echo 'selected';} ?> >兵庫県</option>
<option value = "奈良県" <?php if(($x) == '奈良県') { echo 'selected'; }?> >奈良県</option>
<option value = "和歌山県" <?php if(($x) == '和歌山県') { echo 'selected';} ?> >和歌山県</option>
<option value = "鳥取県" <?php if(($x) == '鳥取県') { echo 'selected';} ?> >鳥取県</option>
<option value = "島根県" <?php if(($x) == '島根県') { echo 'selected';} ?> >島根県</option>
<option value = "岡山県" <?php if(($x) == '岡山県') { echo 'selected';} ?> >岡山県</option>
<option value = "広島県" <?php if(($x) == '広島県') { echo 'selected';} ?> >広島県</option>
<option value = "山口県" <?php if(($x) == '山口県') { echo 'selected';} ?> >山口県</option>
<option value = "徳島県" <?php if(($x) == '徳島県') { echo 'selected';} ?> >徳島県</option>
<option value = "香川県" <?php if(($x) == '香川県') { echo 'selected';} ?> >香川県</option>
<option value = "愛媛県" <?php if(($x) == '愛媛県') { echo 'selected';} ?> >愛媛県</option>
<option value = "高知県" <?php if(($x) == '高知県') { echo 'selected'; }?> >高知県</option>
<option value = "福岡県" <?php if(($x) == '福岡県') { echo 'selected';} ?> >福岡県</option>
<option value = "佐賀県" <?php if(($x) == '佐賀県') { echo 'selected';} ?> >佐賀県</option>
<option value = "長崎県" <?php if(($x) == '長崎県') { echo 'selected';} ?> >長崎県</option>
<option value = "熊本県" <?php if(($x) == '熊本県') { echo 'selected';} ?> >熊本県</option>
<option value = "大分県" <?php if(($x) == '大分県') { echo 'selected';} ?> >大分県</option>
<option value = "宮崎県" <?php if(($x) == '宮崎県') { echo 'selected';} ?> >宮崎県</option>
<option value = "鹿児島県" <?php if(($x) == '鹿児島県') { echo 'selected'; }?> >鹿児島県</option>
<option value = "沖縄県" <?php if(($x) == '沖縄県') { echo 'selected';} ?> >沖縄県</option>


</select>
</td>
<td>
<select name="job_category" style="background-color: #ffffff;box-shadow: 1px 1px 1px 1px #737373;width: 80%;">
<option value="ALL" <?php if(($y) == 'ALL') { echo 'selected'; }?>>ALL</option>
<option value = "ECサイト運営" <?php if(($y) == 'ECサイト運営') { echo 'selected'; }?> >ECサイト運営</option>
<option value = "WEBマーケティング" <?php if(($y) == 'WEBマーケティング') { echo 'selected'; }?> >WEBマーケティング</option>
<option value = "WEBデザイナー" <?php if(($y) == 'WEBデザイナー') { echo 'selected'; }?> >WEBデザイナー</option>
<option value = "マーケティング" <?php if(($y) == 'マーケティング') { echo 'selected'; }?> >マーケティング </option>
<option value = "商品企画・開発" <?php if(($y) == '商品企画・開発'){ echo 'selected'; }?>  >商品企画・開発 </option>
<option value = "コールセンター" <?php if(($y) == 'コールセンター') { echo 'selected'; }?> >コールセンター</option>
<option value = "営業" <?php if(($y) == '営業') { echo 'selected'; }?> >営業</option>
<option value = "バックオフィス" <?php if(($y) == 'バックオフィス') { echo 'selected'; }?> >バックオフィス</option>
<option value = "MD・バイヤー" <?php if(($y) == 'MD・バイヤー') { echo 'selected'; }?> >MD・バイヤー</option>
<option value = "その他" <?php if(($y) == 'その他'){ echo 'selected'; }?> >その他</option>
</select>
</td>

<td>
<select name="job_income" style="background-color: #ffffff;box-shadow: 1px 1px 1px 1px #737373;width: 80%;">
<option value="ALL" <?php if($z == 'ALL') { echo 'selected'; }?> >ALL</option>
<option value = "200万以上" <?php if($z == '200万以上') { echo 'selected'; }?> >200万以上</option>
<option value = "300万以上" <?php if($z == '300万以上') { echo 'selected'; }?> >300万以上</option>
<option value = "400万以上" <?php if($z == '400万以上'){ echo 'selected'; }?> >400万以上</option>
<option value = "500万以上" <?php if($z == '500万以上'){ echo 'selected'; }?> >500万以上</option>
<option value = "600万以上" <?php if($z == '600万以上'){ echo 'selected'; }?> >600万以上</option>
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

<?php /** unset session **/
//unset($_SESSION['s_job_location']);
//unset($_SESSION['s_job_category']);
//unset($_SESSION['s_job_income']);
?>
				
					
<?php /* ループ開始 */

//if(empty($x)) { $x = $_GET['job_location']; }
//if(empty($y)) { $y = $_GET['job_category']; }
//if(empty($z)) { $z = $_GET['job_income']; }


?>
<?php /* if (($x == '') && ($y == '') && ($z == '')) { echo 'meta is set to ALL'; 

include( TEMPLATEPATH . '/parts-jobslist.php' ); 


} */
?>

		<div class="job-list-all">
<?php

include("processor.php");
include("show_results.php");

?>

</div>
</div>
<?php get_sidebar(); ?> 
</div>
<?php get_footer(); ?>


