<?php
include_once('./_common.php');


if ($co['co_include_head'])
    @include_once($co['co_include_head']);
else
    include_once('./_head.php');

?>


<!-- 본문내용 START -->


<!-- <div class="breadcrumb">
	<div class="wrapper">
		<b>대출받기</b><span>대출안내</span>
	</div>
</div>

<h1 class="sub_title">대출안내</h1> -->
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<!-- 스크립트 이 부분 복붙 스크롤 내릴때 순서대로 작동하라고 플러그인 줌 (class명은 wow )-->
  <script type="text/javascript" src="wow_min.js"></script>
  <script>
	 wow = new WOW(
		      {
		        animateClass: 'animated',
		        offset:       100,
		        callback:     function(box){
		          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
		        }
		      }
		    );
		    wow.init();
</script>
</head>

<style media="screen">
  .loan_good_2 a{height: 100%;}
  .animated.bounceIn{animation-duration:2s;}
  .box_w_888 div{margin-bottom:120px;}
</style>

<h1 class="sub_title_img"><img class="animated fadeInDown" src="/theme/company/img/title_4.gif" alt="오렌지펀드의 장점 "></h1>

<div class="wrapper">


	<div class="TAC loan_good_1">
		<a href="/loan/loan_0.php"><img class="animated bounceIn" src="/theme/company/img/loan_good_1.gif" alt="오렌지 대출하기 "></a>
	</div>

	<ul class="loan_good_2">
		<li>
			<label for="">대출금액 </label>
			<select name="" id="">
				<option value="">1000만원</option>
			</select>
		</li>

		<li>
			<label for="">대출기간 </label>
			<select name="" id="">
				<option value="">24개</option>
			</select>
		</li>

		<li>
			<a href="/loan/loan.php">나의 금리한도 확인하기</a>
		</li>

		<li>
      <a href="/ready.php?pname=친구초대이벤트">
        <img class="animated fadeIn wow" src="/theme/company/img/loan_good_2.gif" alt="친구초대 할 때마다 2000원 적립 ">
      </a>
    </li>
	</ul>

	<div class="box_style_21">
		<h2 class="h_style_21">오렌지펀드 대출장점</h2>

		<ul class="ul_style_21">
			<li><img src="/theme/company/img/loan_good_3.gif" alt=""></li>

			<li><img src="/theme/company/img/loan_good_5.gif" alt=""></li>

			<li><img src="/theme/company/img/loan_good_4.gif" alt=""></li>

			<li><img src="/theme/company/img/loan_good_6.gif" alt=""></li>
		</ul>
	</div>

	<h2 class="h_style_22">대출 프로세스</h2>

	<ul class="ul_style_22">
		<li><img src="/theme/company/img/loan_good_7.gif" alt=""></li>

		<li><img src="/theme/company/img/loan_good_8.gif" alt=""></li>

		<li><img src="/theme/company/img/loan_good_9.gif" alt=""></li>
	</ul>

</div>

<div class="bg_f3 case_mb">
	<div class="wrapper">
		<h2 class="h_style_22">자주하는 질문</h2>

		<ul class="tab_type02">
      <?php
                $faq_master_list = array();
                $faq_master_list[0] = array("fm_id" => 0, "href" => "testh1", "fm_subject" => "테스트데이터 1 번");
				$faq_master_list[1] = array("fm_id" => 1, "href" => "testh2", "fm_subject" => "테스트데이터 2 번");
				$faq_master_list[2] = array("fm_id" => 2, "href" => "testh3", "fm_subject" => "테스트데이터 3 번");
				$faq_master_list[3] = array("fm_id" => 3, "href" => "testh4", "fm_subject" => "테스트데이터 4 번");
				$faq_master_list[4] = array("fm_id" => 4, "href" => "testh5", "fm_subject" => "테스트데이터 5 번");
		        foreach( $faq_master_list as $v ){
		            $category_msg = $v['fm_subject'];
					$category_href = $v['href'];
		        ?>
		        <li <?php if($fm_id==$v['fm_id']){ ?>class="on"<?php } ?> onclick="javascript:location.href='<?php echo $category_href;?>?fm_id=<?php echo $v['fm_id'];?>';"><?php echo $category_msg?></li>
		        <?php
		        }
		        ?>
		</ul>

		<a href="/bbs/faq.php" class="a_style_21">자주하는 질문게시판으로 가기</a>
	</div>
</div>

<div class="wrapper box_w_888">
	<h2 class="h_style_23">연 <span>0.00</span>%</h2>

	<p><img src="/theme/company/img/loan_good_10.gif" alt=""></p>

	<div>
		<a href="/loan/loan.php" class="a_style_21">오렌지 대출하기</a>
		<a href="/loan/loan_0.php" class="a_style_21 case_bgc">처음 오신 분들을 위한 가이드 보러가기</a>
	</div>
</div>




<!-- 본문내용 E N D -->
<?php

if ($co['co_include_tail'])
    @include_once($co['co_include_tail']);
else
    include_once('./_tail.php');
?>
