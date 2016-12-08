<!-- getCookie('side') == 'true') 검색 -->


<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/index_head_main.php');


// 메인 배너이미지 정보
$mb_sql = " select * from g5_main_banner where idx = '1' ";
$mb_r = sql_fetch($mb_sql);

$mb_img1 = $mb_r['bn_img1'];
$mb_img2 = $mb_r['bn_img2'];
$mb_img3 = $mb_r['bn_img3'];

$mb_dir = str_replace('home/crowdfund/public_html/','',G5_DATA_PATH."/main_banner/");

?>

<!-- MAIN START -->

<?
$sql = "select * from cf_invest";
$row = sql_fetch($sql);
$average_return		= $row["average_return"];
$total_invest			= $row["total_invest"];
$total_repay			= $row["total_repay"];
$bankruptc				= $row["bankruptc"];
$display				= $row["display"];
$average_return		= $average_return > 0 ? $average_return : 0;
$total_invest			= $total_invest > 0 ? number_format($total_invest) : 0;
$total_repay			= $total_repay > 0 ? number_format($total_repay) : 0;
$bankruptc				= $bankruptc > 0 ? $bankruptc : 0;
?>

<style media="screen">
.btu_back {text-align: center;}
.offimg{display: none;}
.bg_img div{color:#FFF;font-size:0.92em;padding:5px 8px; display: inline-block;position: absolute;}
.bg_img .invest_list_img1, .bg_img .invest_list_img3, .bg_img .invest_list_img5{margin-top:3px;margin-left: 3px;}
.bg_img .invest_list_img2, .bg_img .invest_list_img4, .bg_img .invest_list_img6{margin-top:3px;margin-right: 3px;right: 0;}
.bg_img .invest_list_img1{}
.bg_img .invest_list_img2{}
.bg_img .invest_list_img3{top: 28px;}
.bg_img .invest_list_img4{top: 28px;}
.bg_img .invest_list_img5{top: 56px;}
.bg_img .invest_list_img6{top: 56px;}
.bg_img .invest_list_img_color_1{background: #85c903;}
.bg_img .invest_list_img_color_2{background: #dc322f;}
.bg_img .invest_list_img_color_3{background: #0095ff;}
.bg_img .invest_list_img_color_4{background: #777fff;}
.bg_img .invest_list_img_color_5{background: #2cc1b6;}
.bg_img .invest_list_img_color_6{background: #ff871c;}
.c_top {position: relative;}
.c_top a{cursor: pointer;}
.c_top img {position: absolute;top:0;right:0;padding: 3px;}
.content_box{width: 95%;}
.yu_content_c2{display: none;}
.content_box1 .p3{width:59%;margin-left:10px;}
.yu_content_c{overflow: hidden;}
.yu_content .yu_content_t div strong{width: 100%;}
.owl-carousel{margin-bottom:50px;}
.yu_content_back .yu_content{padding:0;}
.content_icon .icon1 img{width: 100%;}
.yu_content_t #yu_c_bg1{background: url(/theme/company/images/bg01.png)center center no-repeat;}
.yu_content_t #yu_c_bg2{background: url(/theme/company/images/bg02.png)center center no-repeat;}
.yu_content_t #yu_c_bg3{background: url(/theme/company/images/bg03.png)center center no-repeat;}
.calculator{margin-right: -5px;}
.case-1 .max {max-width: 1050px;margin: 0 auto;}
.wrapper .w_left .bx-viewport ul li>img{max-height: 451px;}
.all_a{text-align: right;padding-right: 10px;margin: 8px 0;}
.all_a a{border-radius: 7px;border: 2px #CCC solid;display: inline-block;width: 180px;text-align: center;height: 38px;line-height: 38px;font-size: 16px;}

@media screen and (max-width: 1210px){
  .yu_content_c{display: none;}
  .yu_content_c2 {display: block;padding: 40px 0 0;}
  .yu_content_c2 .mobile_btn{text-align: center;display: inline-block;background: #144c93;color: #FFF;padding: 13px 21px;border-radius: 7px;margin: 20px 0;font-size: 13px;}
  #owl-example2 .content_box .bg_img{width: 37%;display: inline-block;}
  #owl-example2 .content_box #content_box_wrap {width: 63%;display: inline-block;vertical-align: top;}
  .content_box{max-width: 100%;font-size: 0;}
  .content_box .content_box1{padding: 10px 4px;border-top: 1px #cacaca solid;}
  .content_box1 h2{font-size: 15px;}
  .content_box1 p{font-size: 10px;height: 30px;line-height: 30px;}
  .content_box .content_box2{padding:0 10px 10px;}
  .content_box2 p{font-size:13px;}
  .content_box1 .p2{width: 100%;}
  .content_box1 .p3{width: 100%;margin-left: 0;padding-left: 0;width: 100%;}
  .content_box1 .p5 img{width: 24px;}
  .content_box2 .style_p{display: inline-block;float: right;margin-top:10px;}
  .bg_img .invest_list_img1, .bg_img .invest_list_img3, .bg_img .invest_list_img5{display: none;}
  .bg_img .invest_list_img2, .bg_img .invest_list_img4, .bg_img .invest_list_img6{display: none;}
  .content_box1 p span{margin-left:21px;}
  .yu_content{position: relative;}
  .yu_content_b{bottom:0;margin: 40px 0 0;}
  .content_box1 h2{min-height:0; }
}
@media screen and (max-width:1050px) {
  .thumb_list.index_case_2 li{padding-top: 0;padding-bottom: 0;}
  .thumb_list.index_case_2 li img{position: initial;width: initial;}
  #section3 > h3{margin-bottom: 35px;}
  .yu_content .yu_content_t div strong{font-size: 18px;}
  .yu_content_c2{padding: 0;}

}
@media screen and (max-width: 580px){
  .yu_content .yu_content_t div strong{font-size: 11px;margin-bottom: 8px;}
  .content_box2 .p_box{padding:8px 6px;}
}

</style>



<div class="index_section without_padding case-1">
  <div class="max">
    <div class="wrapper">
  		<div class="w_left">
        <ul class="bxslider">
          <li>
            <img src="/data/main_banner/<?=$mb_img1?>" />
          </li>
          <li><img src="/data/main_banner/<?=$mb_img2?>" /></li>
          <li><img src="/data/main_banner/<?=$mb_img3?>" /></li>
        </ul>
        <script type="text/javascript">
        $(document).ready(function(){
          $('.bxslider').bxSlider();
        });
        </script>

        <script>
           wow = new WOW(
                  {
                    animateClass: 'animated',
                    offset:       100
                  }
                );
                wow.init();
        </script>



  		</div>
      <div class="w_right">
        <div class="w_right_top aa">
          <img src="/theme/company/images/main_invest.png" alt="" />
          <div class="w_right_hover" id="hover_top">
            <span>투자하기</span>
              <div class="w_right_hover_right common">
                <a href="/investment/invest_list.php">
                  <img src="/theme/company/images/menu_hover1.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_1.png" alt="" class="offimg"/>
                </a>
                <a href="/deposit/deposit_2.php">
                  <img src="/theme/company/images/menu_hover2.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_2.png" alt="" class="offimg"/>
                </a>
                <a href="/investment/investment_guide.php">
                  <img src="/theme/company/images/menu_hover3.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_3.png" alt="" class="offimg"/>
                </a>
                <a href="/bbs/faq.php">
                  <img src="/theme/company/images/menu_hover4.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_4.png" alt="" class="offimg"/>
                </a>
              </div>
          </div>
        </div>

        <div class="w_right_bottom aa">
          <img src="/theme/company/images/main_loan.png" alt="" />
          <div class="w_right_hover" id="hover_bottom">
            <span>대출하기</span>
              <div class="w_right_hover_right common">
                <a href="/loan/loan.php">
                  <img src="/theme/company/images/menu_hover5.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_5.png" alt="" class="offimg"/>
                </a>
                <a href="javascript:alert('준비중입니다');">
                  <img src="/theme/company/images/menu_hover6.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_6.png" alt="" class="offimg"/>
                </a>
                <a href="/loan/loan_0.php">
                  <img src="/theme/company/images/menu_hover7.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_7.png" alt="" class="offimg"/>
                </a>
                <a href="/bbs/faq.php?fm_id=2">
                  <img src="/theme/company/images/menu_hover8.png" alt="" class="onimg"/>
                  <img src="/theme/company/images/back_8.png" alt="" class="offimg"/>
                </a>
              </div>
          </div>

        </div>
      </div>

      <script>
      // 메인 숫자 odometer
    $(document).ready(function(){
        setTimeout(function(){
           $('#tttt').html('<?=$total_invest?>');
           $('#tttt2').html('<?=$total_repay?>');
        }, 50);
        });
      </script>

      <?
      if($display=="Y") {
      ?>

        <ul id="text_box">
          <li>
            <p>평균이자율</p>
            <strong><?=$average_return?>%</strong>
          </li>
          <li>
              <p>누적 대출액</p>
              <strong>
                <div class="odometer" id="tttt">0</div>
              원</strong>
          </li>
          <li>
              <p>누적 상환액</p>
              <strong>
                <div class="odometer" id="tttt2">0</div>
              원</strong>
          </li>
          <li>
            <p>부도율</p>
            <strong><?=$bankruptc?>%</strong>
          </li>
        </ul>
      <?
      }
      ?>

      <!-- 모바일버전 투자하기/대출하기 -->
      <div class="w_right_mobile">
        <div class="mobile_left mobile_com">
          <div class="mobile_left_top">
            투자하기
          </div>
          <div class="mobile_left_bottom">
            <div class="m_l_b_top">
              <a href="/investment/invest_list.php"><img src="/theme/company/images/mobile/mobile_icon1.png" alt="" /></a>
              <a href="/deposit/deposit_2.php"><img src="/theme/company/images/mobile/mobile_icon2.png" alt="" /></a>
            </div>
            <div class="m_l_b_bottom">
              <a href="/investment/investment_guide.php"><img src="/theme/company/images/mobile/mobile_icon3.png" alt="" /></a>
              <a href="/bbs/faq.php"><img src="/theme/company/images/mobile/mobile_icon4.png" alt="" /></a>
            </div>
          </div>
        </div>

        <div class="mobile_right mobile_com">
          <div class="mobile_left_top">
            대출하기
          </div>
          <div class="mobile_left_bottom">
            <div class="m_l_b_top">
              <a href="/loan/loan.php"><img src="/theme/company/images/mobile/mobile_icon5.png" alt="" /></a>
              <a href="javascript:alert('준비중입니다');"><img src="/theme/company/images/mobile/mobile_icon6.png" alt="" /></a>
            </div>
            <div class="m_l_b_bottom">
              <a href="/loan/loan_0.php"><img src="/theme/company/images/mobile/mobile_icon7.png" alt="" /></a>
              <a href="/bbs/faq.php?fm_id=2"><img src="/theme/company/images/mobile/mobile_icon8.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
  	</div>
  </div>

</div>
 <script type="text/javascript">
 $(window).scroll(function(){
   $("#yu_c").height($('#bibi').height()).show();
   $("#yu_c").css('top',$('#bibi').offset().top);
 });
 $(window).resize(function(){
   $("#yu_c").height($('#bibi').height()).show();
   $("#yu_c").css('top',$('#bibi').offset().top);
 });
   $(document).ready(function(){
    //  투자하기,대출자 마우스오버했을때
    $('body').append('<div id="yu_c" style="display:none;position:absolute;width:100%;background:url(/theme/company/images/main_bg_img.png);z-index:-1"></div>');
    $("#yu_c").height($('#bibi').height());
    $("#yu_c").css('top',$('#bibi').offset().top);
      $('.w_right .aa').mouseenter(function(){
        $(this).find('.w_right_hover').css({
          'display':'block'
        }).mouseleave(function(){
          $(this).css({
            'display':'none'
          })
        });
      });
    // 세부메뉴 마우스오버했을때
      $('.common a').mouseenter(function(){
          $(this).children('.onimg').hide();
          $(this).children('.offimg').show();
      }).mouseleave(function(){
          $(this).children('.onimg').show();
          $(this).children('.offimg').hide();
      })
   })
 </script>
<script type="text/javascript">

// 투자소식받기 팝업관련
  function popup1(is_su){
    is_su = $('#'+is_su).val();

    if( is_su == "" ){
      alert('수집정보가 없습니다.\n정보를 입력해주세요.');
       return false;
    }
    $('body').append('<div id="popup1" style="z-index: 10;width:100%;height:100%;background:rgba(0,0,0,0.7);position:fixed;left:0;top:0;"></div>');
    $('#popup1').html('<div style="background:#FFF;padding: 20px;max-width:420px;width: 80%;height:285px;text-align: center;margin: 20% auto 0;"><img src="/theme/company/images/yu_logo.png" alt="" style="margin: 40px 0;" /><p style="font-size:14px;text-align:left;margin-bottom: 5px;">*수집항목 : '+is_su+'</p><p style="font-size:14px;text-align:left;margin-bottom: 5px;">*수집목적 : 투자 정보 알림용</p><p style="font-size:14px;text-align:left;margin-bottom: 5px;">*보유 및 이용기간 : 개인정보 수집 목적 달성 후에는 해당 정보 파기</p><button onclick="input_popup1();" style="display: inline-block;padding: 10px 40px;margin-top: 12px;color: #FFF;background: #144c93;">확인</button><button onclick="close_popup1();" style="display: inline-block;padding: 10px 40px;margin-top: 12px;background: #e8e8e8;">닫기</button></div>')
  }

  function input_popup1(){
		var value = $('#su_email').val();
		var t_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		if(!t_mail.test(value)){ alert('올바른 이메일을 입력해 주세요.'); $('#popup1').remove(); return false; }

		$.ajax({
			type: 'post',
			url: '/bbs/input_email.php',
			data: { value:value },
			success: function(vals) {
				$('#su_email').val('');
				alert(vals);
			}
		});

    $('#popup1').remove();
  }

  function close_popup1(){
    $('#popup1').remove();
  }

  function popup2(is_su){
    is_su = $('#'+is_su).val();

    if( is_su == "" ){
      alert('수집정보가 없습니다.\n정보를 입력해주세요.');
       return false;
    }
    $('body').append('<div id="popup2" style="z-index:10;width: 100%;height:100%;background:rgba(0,0,0,0.7);position:fixed;left:0;top:0;"></div>');
    $('#popup2').html('<div style="background:#FFF;padding: 20px;max-width: 420px;width: 80%;height: 286px;text-align: center;margin: 20% auto 0;"><img src="/theme/company/images/yu_logo.png" alt="" style="margin: 40px 0;" /><p style="font-size:14px;text-align:left;margin-bottom: 5px;">*수집항목 : '+is_su+'</p><p style="font-size:14px;text-align:left;margin-bottom: 5px;">*수집목적 : 투자 정보 알림용</p><p style="font-size:14px;text-align:left;margin-bottom: 5px;">*보유 및 이용기간 : 개인정보 수집 목적 달성 후에는 해당 정보 파기</p><button onclick="input_popup2();" style="display: inline-block;padding: 10px 40px;margin-top: 12px;color: #FFF;background: #144c93;">확인</button><button onclick="close_popup2();" style="display: inline-block;padding: 10px 40px;margin-top: 12px;background: #e8e8e8;">닫기</button></div>')
  }

  function input_popup2(){
		var value = $('#su_numb').val();
		var t_hp = /^[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}$/;
		var t_hp2 = /^[0-9]{2,3}[0-9]{3,4}[0-9]{4}$/;

		if(!t_hp.test(value) && !t_hp2.test(value)){ alert('올바른 휴대폰번호를 입력해 주세요.'); $('#popup2').remove(); return false; }

		$.ajax({
			type: 'post',
			url: '/bbs/input_hp.php',
			data: { value:value },
			success: function(vals) {
				$('#su_numb').val('');
				alert(vals);
			}
		});

    $('#popup2').remove();
  }

  function close_popup2(){
    $('#popup2').remove();
  }
</script>
<div class="yu_content">
  <div class="yu_content_t">

    <div id="yu_c_bg1" class="wow animated  slideInUp" >
      <strong>투자 세미나 신청</strong>
      <!-- <p>(인기상품 우선)</p> -->
      <a href="/bbs/qalist.php">자세히보기 ▶</a>
    </div>
    <div id="yu_c_bg2" class="wow animated  slideInUp" style="animation-duration: 2s;">
      <strong>언론보도</strong>
      <!-- <p>(최근 소식 우선)</p> -->
      <a href="/news/funding_news.php">자세히보기 ▶</a>
    </div>
    <div id="yu_c_bg3" class="wow animated  slideInUp" style="animation-duration: 3s;">
      <strong>공지사항</strong>
      <!-- <p>(최근 공지사항 우선)</p> -->
      <a href="/bbs/board.php?bo_table=notice">자세히보기 ▶</a>
    </div>
  </div>
  <div class="yu_content_b">
    <div class="yu_content_b_mail animated slideInLeft">
      <img src="/theme/company/images/mail_icon.png" alt="" />
      <input type="text" name="name" id="su_email" placeholder="이메일 입력 시 투자정보">
      <a href="javascript:popup1('su_email');">투자소식 받기 ▶</a>
    </div>
    <div class="yu_content_b_tel animated slideInRight">
      <img src="/theme/company/images/message_icon.png" alt="" />
      <input type="text" name="name" id="su_numb" placeholder="투자 문자 신청">
      <a href="javascript:popup2('su_numb');">투자소식 받기 ▶</a>
    </div>
  </div>
  <div class="all_a">
    <a href="/investment/invest_list.php">전체상품보기</a>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
     $("#owl-example").owlCarousel({
       items : 3
     });
  });
  </script>

  <div class="yu_content_c fadeIn animated wow">
    <div id="owl-example" class="owl-carousel">

    <?
          $product_query = "select count(*) from cf_product a where 1=1 and  a.display='Y' order by a.idx desc, a.start_date desc ";
          $product_result = query($product_query);
          $product_cnt = mysqli_fetch_row($product_result);
    			if($product_cnt[0]>0){
    				$product_query = "select a.*,
    												(select IFNULL(sum(amount),0) from cf_product_invest where a.idx = product_idx and invest_state='Y') as total_invest_amount,
    												(select count(product_idx) as total_invest_count from cf_product_invest where a.idx = product_idx and invest_state='Y' ) as total_invest_count
    											from cf_product a where 1=1 and  a.display='Y' order by a.idx desc, a.start_date desc ";
    				$product_result = query($product_query);
    				while($product_row = mysqli_fetch_array($product_result)){
    					/* 나중에 함수로 수정*/
    					$recruit_amount = $product_row["recruit_amount"];
    					$total_invest_amount = $product_row["total_invest_amount"];

    					if($product_row["recruit_amount"]>0){
    						if($product_row["total_invest_amount"]>0){
    							$product_invest_percent =  round((($product_row["total_invest_amount"]/$product_row["recruit_amount"])*100),2);
    						}else{
    							$product_invest_percent = 0;
    						}
    					}else{
    						$product_invest_percent = 0;
    					}

    					/*상점 오픈 (투자시작가능)*/
    					$product_open_date = str_replace(" ","",str_replace(":","",str_replace("-","",$product_row["open_datetime"])));

    					/* 상품오픈 (투자시작가능) */
    					$product_invest_sdate = str_replace(" ","",str_replace(":","",str_replace("-","",$product_row["start_datetime"])));

    					/* 상품종료 (투자마감) */
    					$product_invest_edate = str_replace(" ","",str_replace(":","",str_replace("-","",$product_row["end_datetime"])));

    					$evaluate_star1 = $product_row["evaluate_star1"];
    					$evaluate_star2 = $product_row["evaluate_star2"];
    					$evaluate_star3 = $product_row["evaluate_star3"];
    					$invest_end_date = str_replace("-","",$product_row["invest_end_date"]);
    					$total_evaluate_star = $evaluate_star1+$evaluate_star2+$evaluate_star3;
    					$product_state = get_product_state($product_row["recruit_period_start"],$product_row["recruit_period_end"],$product_open_date,$product_invest_sdate,$product_invest_edate,$product_row["state"],$product_row["recruit_amount"],$product_row["total_invest_amount"],$invest_end_date);

    ?>

    <div class="content_box" style="margin:0 0.6%">
      <?
               if($product_row['main_image']){
                 if(is_file(G5_DATA_PATH."/product/".$product_row['main_image'])){
      ?>
                   <a href="/investment/investment.php?prd_idx=<?=$product_row["idx"]?>"><div class="bg_img" style="background-image:url('<?=G5_DATA_URL."/product/".$product_row['main_image']?>');" alt="이미지">
                   <?=Lget_img_icon($product_row['idx'])?>
                   </div></a>
      <?
                 }
               } else {
      ?>
      <div class="bg_img"><?=Lget_img_icon($product_row['idx'])?></div>
      <? } ?>
      <div class="content_box1">
        <h2 style="min-height:48px;"><?=cut_str($product_row["title"],34)?></h2>
        <p class="p1"><span>모집기간 : </span><?=$product_row["recruit_period_start"]?> ~ <?=$product_row["recruit_period_end"]?></p>
        <p class="p2"><span>기간 : </span><?=$product_row["invest_period"]?>개월</p><p class="p3" style="width:59%;margin-left:10px;"><span>수익률 : </span><?=$product_row["invest_return"]?>%</p>
        <p class="p4"><span>상환방식 : </span><?=Lget_repay($product_row["repay_type"]); // 상환방식 출력 ?></p>
        <p class="p5"><span>신용등급 : </span><img src="/theme/company/images/yu_<?=$total_evaluate_star?>.png" alt="" /></p>
      </div>
      <div class="content_box2">
        <p>목표<span><?=price_cutting($product_row["recruit_amount"])?></span>원</p>
        <div class="content_bar"><span style="width:<?=Lget_bar($product_row)?>"></span></div>
        <p class="style_p"><span><?=$product_invest_percent?>%</span>진행<span style="color:#888888;">(<?=Lget_product_invest($product_row['idx']); // 투자인원 가져오기 ?>명)</span></p>
        <p class="p_box"><a href="/investment/investment.php?prd_idx=<?=$product_row["idx"]?>" class="a_type_2">상세보기</a></p>

      </div>
    </div>
    <?
    			}
    		}
    ?>
    </div>
  </div>
  <!-- 모바일시작 -->
  <div class="yu_content_c2">
    <div id="owl-example2" class="owl-carousel2">

    <?
          $product_query = "select count(*) from cf_product a where 1=1 and  a.display='Y' order by a.idx desc, a.start_date desc ";
          $product_result = query($product_query);
          $product_cnt = mysqli_fetch_row($product_result);
          if($product_cnt[0]>0){
            $product_query = "select a.*,
                            (select IFNULL(sum(amount),0) from cf_product_invest where a.idx = product_idx and invest_state='Y') as total_invest_amount,
                            (select count(product_idx) as total_invest_count from cf_product_invest where a.idx = product_idx and invest_state='Y' ) as total_invest_count
                          from cf_product a where 1=1 and  a.display='Y' order by a.idx desc, a.start_date desc limit 0,3";
            $product_result = query($product_query);
            while($product_row = mysqli_fetch_array($product_result)){
              /* 나중에 함수로 수정*/
              $recruit_amount = $product_row["recruit_amount"];
              $total_invest_amount = $product_row["total_invest_amount"];

              if($product_row["recruit_amount"]>0){
                if($product_row["total_invest_amount"]>0){
                  $product_invest_percent =  round((($product_row["total_invest_amount"]/$product_row["recruit_amount"])*100),2);
                }else{
                  $product_invest_percent = 0;
                }
              }else{
                $product_invest_percent = 0;
              }

              /*상점 오픈 (투자시작가능)*/
              $product_open_date = str_replace(" ","",str_replace(":","",str_replace("-","",$product_row["open_datetime"])));

              /* 상품오픈 (투자시작가능) */
              $product_invest_sdate = str_replace(" ","",str_replace(":","",str_replace("-","",$product_row["start_datetime"])));

              /* 상품종료 (투자마감) */
              $product_invest_edate = str_replace(" ","",str_replace(":","",str_replace("-","",$product_row["end_datetime"])));

              $evaluate_star1 = $product_row["evaluate_star1"];
              $evaluate_star2 = $product_row["evaluate_star2"];
              $evaluate_star3 = $product_row["evaluate_star3"];
              $invest_end_date = str_replace("-","",$product_row["invest_end_date"]);
              $total_evaluate_star = $evaluate_star1+$evaluate_star2+$evaluate_star3;
              $product_state = get_product_state($product_row["recruit_period_start"],$product_row["recruit_period_end"],$product_open_date,$product_invest_sdate,$product_invest_edate,$product_row["state"],$product_row["recruit_amount"],$product_row["total_invest_amount"],$invest_end_date);

    ?>

    <div class="content_box" style="margin:0 0.6%">
      <?
               if($product_row['main_image']){
                 if(is_file(G5_DATA_PATH."/product/".$product_row['main_image'])){
      ?>
                   <a href="/investment/investment.php?prd_idx=<?=$product_row["idx"]?>"><div class="bg_img" style="background-image:url('<?=G5_DATA_URL."/product/".$product_row['main_image']?>');" alt="이미지">
                   <?=Lget_img_icon($product_row['idx'])?>
                   </div></a>
      <?
                 }
               } else {
      ?>
      <div class="bg_img"><?=Lget_img_icon($product_row['idx'])?></div>
      <? } ?>

      <div id="content_box_wrap">
        <div class="content_box1">
          <h2 style=""><?=cut_str($product_row["title"],34)?></h2>
          <p class="p1"><span>모집기간 : </span><?=$product_row["recruit_period_start"]?>~<?=$product_row["recruit_period_end"]?></p>
          <p class="p2">
            <span>기간 : </span><?=$product_row["invest_period"]?>개월
            <span style="background: url('/theme/company/images/yu_icon3.png')left center no-repeat;display: inline-block;padding-left: 24px;margin-left:0;">수익률 : </span><?=$product_row["invest_return"]?>%
          </p>
          <p class="p4"><span>상품종류 : </span><?=Lget_repay($product_row["repay_type"]); // 상환방식 출력 ?></p>
          <p class="p5"><span>신용등급 : </span><img src="/theme/company/images/yu_<?=$total_evaluate_star?>.png" alt="" /></p>
        </div>
        <div class="content_box2">
          <p>목표<span><?=price_cutting($product_row["recruit_amount"])?></span>원</p>
          <div class="content_bar"><span style="width:<?=Lget_bar($product_row)?>;"></span></div>
          <p class="p_box"><a href="/investment/investment.php?prd_idx=<?=$product_row["idx"]?>" class="a_type_2">상세보기</a></p>
          <p class="style_p"><span><?=$product_invest_percent?>%</span>진행<span style="color:#888888;">(<?=Lget_product_invest($product_row['idx']); // 투자인원 가져오기 ?>명)</span></p>
        </div>
      </div>


    </div>
    <?
          }
        }
    ?>
    </div>
    <button class="mobile_btn" type="button" name="" onclick= "location.href='/investment/invest_list.php' ">투자상품 더보기</button>
  </div>
<!-- 모바일끝 -->
<script type="text/javascript">
    //  계산기부분
    function aaa(aa){
        var bb = $('#temm1').val().replace("만원","");

        if( bb == "" ){
           bb = 0;
        }
         $('#temm1').val(parseInt(aa) + parseInt(bb) + '만원');
         sum_late1();
    }
  function sum_late1(){
    var temm1 = $('#temm1').val().replace("만원","");
    if(temm1 > 0.5){
    var percent = $('#temm2').val().replace("%","");
    var month = $('#month').val();
    var dab = temm1 / 100 * percent / 12;
    var dab2 = dab * month;

    $('#dab_1mon').html(Math.floor(dab*10000));
    $('#dab_sum').html(Math.floor(dab2*10000));
    }else{alert('숫자만 입력해주세요.'); return false}
  }


$(document).ready(function(){
  $('.open_btn a').click(function(){

    $('.yu_content_r ul').toggle()
    if( $('.calculator').css({'display':'inline-block'}) ){
      $('.calculator').toggle();
    };
    // 사이드 메뉴관련 쿠키
    if(getCookie('side') == 'true'){
        setCookie('side',false,1);
    } else {
            setCookie('side',true,1);
    }

  });
})

</script>

  <div class="yu_content_r">

  <!-- 계산기on -->
  <div class="open_btn"><a>></a></div>
  <div class="calculator">
  	<div class="c_top">
  		<h2>투자계산기</h2>
      <a><img src="/theme/company/images/x_btn.png" alt="" /></a>
  	</div>
  	<div class="calculator_wrap">
  			<p class="p">상환방식</p>
  			<select class="" name="">
  				<option>만기 일시상환</option>
  			</select>
  			<p class="p">투자금액</p>
  			<a href="javascript:aaa('10');"><span>+</span>10</a>
  			<a href="javascript:aaa('50');"><span>+</span>50</a>
  			<a href="javascript:aaa('100');"><span>+</span>100</a>
  			<input type="text" name="name" value="만원" id="temm1" onchange="sum_late1();">
  			<p class="p">수익률</p>
  			<input type="text" name="name" value="%" id="temm2" onchange="sum_late1();">
  			<p class="p">만기</p>
  			<select id="month" name="" onchange="sum_late1();">
  				<option value="3">3개월</option>
  				<option value="6">6개월</option>
  				<option value="12">12개월</option>
  			</select>
  			<p class="p_box">월입금받을금액(세전)<span id="dab_1mon">0</span>원</p>
  			<p class="p_box2 p_box">총 예상 수익(세전)<span id="dab_sum">0</span>원</p>
  	</div>
  </div>
    <ul id="side-menu">
			<li class="common">
				<a>
					<img src="/theme/company/images/calculator_icon.png" alt="" class="onimg calculator_icon"/>
					<img src="/theme/company/images/side_hover1.png" alt="" class="offimg calculator_icon"/>
				</a>
				<p>계산기</p>
			</li>
			<li class="common">
				<? if($member['mb_id']) { ?>
					<a href="/mypage/mypage.php">
				<? } else { ?>
					<a href="/bbs/login.php">
				<? } ?>
					<img src="/theme/company/images/mypage_icon.png" alt="" class="onimg"/>
					<img src="/theme/company/images/side_hover2.png" alt="" class="offimg"/>
				</a>
				<p>마이페이지</p>
			</li>
			<li class="common">
				<a href="/deposit/deposit.php">
					<img src="/theme/company/images/Deposit_icon.png" alt="" class="onimg"/>
					<img src="/theme/company/images/side_hover3.png" alt="" class="offimg"/>
				</a>
				<p>예치금</p>
			</li>
			<li class="common">
				<a href="/bbs/qalist.php">
					<img src="/theme/company/images/question_icon.png" alt="" class="onimg"/>
					<img src="/theme/company/images/side_hover4.png" alt="" class="offimg"/>
				</a>
				<p>문의하기<br>1599-3432</p>
			</li>
			<li class="common">
				<a href="#">
					<img src="/theme/company/images/top_icon.png" alt="" class="onimg"/>
					<img src="/theme/company/images/side_hover5.png" alt="" class="offimg"/>
				</a>
				<p>맨위로</p>
			</li>
		</ul>

	</div>



  <div class="yu_content_back" id="bibi">
    <div class="yu_content" >
      <!-- <div class="content_text" >
        <h2>투자전문가들이 시스템분석 및 심사를 통해 <span>안전한 투자상품</span>을 제공합니다.</h2>
        <p>와이유펀딩은 P2P 시장에 체계적인 대출관리 시스템을 도입하였으며</p>
        <p>투자자를 위한 <span>안심투자보호시스템(FISS)</span>을 마련하였습니다.</p>
      </div> -->
      <div class="content_icon_mobile">
        <img src="/theme/company/images/main_content_mobile.png" alt="" />
      </div>
      <div class="content_icon">
        <div class="icon1 slideInDown animated wow">
          <img src="/theme/company/images/main_content_img.png" alt="" />
        </div>


      </div>
    </div>
  </div>


  <div class="index_section bg_grey ">
  	<h3>언론속의 <span>와이유펀딩</span></h3>
    <p>와이유펀딩의 생생한 최근 소식을 알려드립니다.</p>
  	<ul class="thumb_list index_case_1 slideInUp animated wow">
  		<!-- 언론기사 최신글 3개 출력 LNJ /lib/lnj.lib.php -->
  		<?=Lget_main_board();?>
  	</ul>
  </div>

</div>

<script type="text/javascript">
  // 오른쪽 메뉴 스크롤 따라다니게
  $(document).ready(function(){
     $(window).scroll(function(){
        var sctop = $(window).scrollTop();
        $('.yu_content_r').stop().animate({
          top:sctop
        });
        $('.calculator').stop().animate({
          top:sctop
        });
     });
// x버튼 누르면 닫힘
     $('.c_top a').click(function(){
       $('.calculator').css({
         'display':'none'
       });
     });

     $('.calculator_icon').click(function(){
        if($('.calculator').css("display") == 'none'){
            $('.calculator').css({
              'display':'inline-block'
            });
        }else{
          $('.calculator').css({
            'display':'none'
          });
        }
     });


  })
</script>




<script type="text/javascript">

  $(document).ready(function(){
      // 빌드펀딩의장점 이미지하버
    $('#thumb1 img').mouseenter(function(){
      var imgsrc = $(this).attr('src');
      var substring = imgsrc.substring(0,33);
       $(this).attr('src',substring + '_over.png');
       $(this).parents('li').css({
         'background':'#25bfd6',
         'transition':'1s'
        });
       $(this).parent('figure').children('figcaption').children('h3').css({
         'color':'#FFF'
       });
       $(this).parent('figure').children('figcaption').children('p').css({
         'color':'#FFF'
       });
    }).mouseleave(function(){
      var imgsrc1 = $(this).attr('src');
      var substring1 = imgsrc1.substring(0,33);
         $(this).attr('src',substring1 + '.png');
         $(this).parents('li').css({'background':'none'});
         $(this).parent('figure').children('figcaption').children('h3').css({
           'color':'#000'
         });
         $(this).parent('figure').children('figcaption').children('p').css({
           'color':'#4f5a5a'
         });
    })

    // 빌드펀딩의장점 ㅣi하버했을때
    $('#thumb1 li').mouseenter(function(){
      var imgsrc = $(this).children('figure').children('img').attr('src');
      var substring = imgsrc.substring(0,33);

       $(this).children('figure').children('img').attr('src',substring + '_over.png');
       $(this).css({
         'background':'#25bfd6',
         'transition':'1s'
        });
       $(this).find('h3').css({
         'color':'#FFF'
       });
       $(this).find('p').css({
         'color':'#FFF'
       });
    }).mouseleave(function(){
      var imgsrc1 = $(this).children('figure').children('img').attr('src');
      var substring1 = imgsrc1.substring(0,33);

         $(this).children('figure').children('img').attr('src',substring1 + '.png');
         $(this).css({'background':'none'});
         $(this).find('h3').css({
           'color':'#000'
         });
         $(this).find('p').css({
           'color':'#4f5a5a'
         });
    })


  })
</script>


<!-- <?php if (!$is_member) { ?>
<div class="index_section case-6">
	<h3 style="font-weight:bold">&ldquo; 아직 회원이 아니신가요? &rdquo;</h3>
	<p style="font-weight:bold">빌드펀딩의 다양한 회원서비스를 만나보세요.</p>
	<a href="/bbs/register_choice.php" class="a_type_1" style="font-weight:bold">회원가입</a>
</div>
<?php } ?> -->

<style>
#footer{margin:0;}
</style>
<!-- MAIN E N D -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>

<script>


// 사이드 메뉴관련 쿠키
if(getCookie('side') == 'true'){
    $('.yu_content_r ul').hide();
}
// 팝업관련
if(!getCookie("popup")){
	popup_on();
}
function popup_on(){
     $('body').append('<div id="popup" style="position:absolute;width:90%;left:5%;max-width:600px;background:rgba(0,0,0,1);top:103px;z-index:2000;text-align:right;color:#fff;"></div>');
     $("#popup").html('<img src="/images/popup.jpg" alt="팝업" style="width:100%"/><input type="checkbox" id="pop_navershow"/> 하루동안 열지 않기 <button style="margin:5px 30px;display: inline-block;padding: 7px;" onclick="close_popup()">닫기</button>');
}
function close_popup(){
    if($("#pop_navershow").prop( "checked" )){
        setCookie('popup', 'true', 1);
    }
    $("#popup").remove();
}
function getCookie( cookieName )
 {
  var search = cookieName + "=";
  var cookie = document.cookie;
  if( cookie.length > 0 )
  {
   startIndex = cookie.indexOf( cookieName );

   if( startIndex != -1 )
   {
    startIndex += cookieName.length;

    endIndex = cookie.indexOf( ";", startIndex );

    if( endIndex == -1) endIndex = cookie.length;

    return unescape( cookie.substring( startIndex + 1, endIndex ) );
   }
   else
   {
    return false;
   }
  }
  else
  {
   return false;
  }
 }
 function setCookie( cookieName, cookieValue, expireDate )
 {
  var today = new Date();
  today.setDate( today.getDate() + parseInt( expireDate ) );
  document.cookie = cookieName + "=" + escape( cookieValue ) + "; path=/; expires=" + today.toGMTString() + ";";
 }


 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-88369213-1', 'auto');
	  ga('send', 'pageview');

</script>
