<?php 
/* This file is used to process search arguments */

if( ! empty($x) ) {
$args['meta_query'][] = array(
    'key' => 'job_location_prefectures',
    'value' => $x,
    'compare' => 'LIKE'
    
); }

if( ! empty($y) ){
$args['meta_query'][] = array(
    'key' => 'job_category_01',
    'value' => $y,
    'compare' => 'LIKE'
	
);}  

/* Computing Salary Ranges */

if($z == '200万以上') {
	
$zlow = 200;
$zhigh = 200;

   $args['meta_query'][] = array(
    'key' => 'job_incom_row',
    'value' => $zlow,
    'compare' => '>=',
    'type'=>'NUMERIC'
	
);

$args['meta_query'][] = array(
    'key' => 'job_income_high',
    'value' => $zhigh,
    'compare' => '>=',
    'type'=>'NUMERIC'
	
);
}

elseif($z == '300万以上') {
	
$zlow = 300;
$zhigh = 300;

$args['meta_query'][] = array(
    'key' => 'job_incom_row',
    'value' => $zlow,
    'compare' => '>=',
    'type'=>'NUMERIC'
	
);

$args['meta_query'][] = array(
    'key' => 'job_income_high',
    'value' => $zhigh,
    'compare' => '>=',
'type'=>'NUMERIC'
	
);
}

elseif($z == '400万以上') {
	
$zlow = 400;
$zhigh = 400;

$args['meta_query'][] = array(
    'key' => 'job_incom_row',
    'value' => $zlow,
    'compare' => '>=',
    'type'=>'NUMERIC'
	
);

$args['meta_query'][] = array(
    'key' => 'job_income_high',
    'value' => $zhigh,
    'compare' => '>=',
'type'=>'NUMERIC'
	
);
}

elseif($z == '500万以上') {
	
$zlow = 500;
$zhigh = 500;

$args['meta_query'][] = array(
    'key' => 'job_incom_row',
    'value' => $zlow,
    'compare' => '>=',
    'type'=>'NUMERIC'
	
);
	

$args['meta_query'][] = array(
    'key' => 'job_income_high',
    'value' => $zhigh,
    'compare' => '>=',
'type'=>'NUMERIC'
	
);
}

elseif($z == '600万以上') {

$zlow = 600;
$zhigh = 600;

   $args['meta_query'][] = array(
    'key' => 'job_incom_row',
    'value' => 600,
    'compare' => '>=',
'type'=>'NUMERIC'
	
);

$args['meta_query'][] = array(
    'key' => 'job_income_high',
    'value' => 600,
    'compare' => '>=',
'type'=>'NUMERIC'
	
); }

if( ! empty($z) && ($z != '200万以上') && ($z != '300万以上') && ($z != '400万以上') && ($z != '500万以上') && ($z != '600万以上') ){
$args['meta_query'][] = array(
    'key' => 'job_incom_row',
    'value' => array($zlow,$zlowmax),
    'compare' => 'BETWEEN',
'type'=>'NUMERIC'
    
); } 

if( ! empty($z) && ($z != '200万以上') && ($z != '300万以上') && ($z != '400万以上') && ($z != '500万以上') && ($z != '600万以上') && ($z != '600万以上') ){
$args['meta_query'][] = array(
    'key' => 'job_income_high',
    'value' => $zhigh,
    'compare' => '>=',
'type'=>'NUMERIC'
    
 ); }
 ?>