<!doctype html>
<html lang="ko">

<head>
    <?php include "../../_inc/config.php"; ?>

    <script>
        //   3번째  대메뉴 인덱스
        dep1 = 3
        // dep1 = 04,
        dep2 = 01;
        // sub_num2 변수가 있을때 ( 3차메뉴 )
        dep3 = "";
        // sub_num3 변수가 있을때 ( 4차메뉴 )
        dep4 = "";
        // sub_num4 변수가 있을때 ( 5차메뉴 )
        dep5 = "";

        $(function() {
            if (dep1 > 0 && dep2 > 0) {
                $("#header").addClass("sub");
            }
        })
    </script>
</head>

<body>
    <!-- accessibility -->
    <div class="cm-accessibility">
        <a href="#container">본문바로가기</a>
    </div>
    <!-- //accessibility -->
    <!-- code -->
    <div id="wrap">
        <!-- header -->
        <?php include "../_inc/header.php"; ?>
        <!-- //header -->

        <!-- container -->
        <div id="container">
            <!-- visual -->
            <section id="introVisual" class="full-height">
                <div class="txt-con">
                    <h3>생명과학 장비</h3>
                    <p>엔바이오텍은 CO2 배양기, 진탕배양기, <br class="m-br">쉐이커 및 롤러 장치, 항온수조 및 히팅 블럭, 농축기, <br class="pc-br">
                        건조기 및 배양기, <br class="m-br">고압멸균기, 바이오 워크스테이션, 줄기세포 분리 패키지 등 <br class="m-br">다양한 실험 장비를 갖추고 있습니다.</p>
                    <p>현재 당사는 전 세계 100개 이상의 대리점을 통해 <br class="m-br">실험 장비를 수출하고 있습니다.</p>
                </div>
                <div class="view-txt">
                    <b>제품 보기</b>
                    <i class="xi-angle-down-min down-01"></i>
                    <i class="xi-angle-down-min down-02"></i>
                </div>
                <!-- 제품 인트로페이지에서 사용되는 검색바입니다. -->
                <div class="equipment-search-box fixed-sub-menu">
                    <div class="inner">
                        <form name="bbs_search_form" method="get" action="https://www.n-biotek.com/kr/equipment/equipment_search.php">
                            <input type="hidden" name="part_idx" value="">
                            <script language="javascript">
                                <!--
                                function top_search() {
                                    var form = document.bbs_search_form;
                                    if (form.search_order.value == "") {
                                        alert("Please enter Search data.");
                                        form.search_order.focus();
                                    } else {
                                        form.submit();
                                    }
                                }
                                -->
                            </script>
                            <div class="list-search clearfix">
                                <div class="select-custom">
                                    <!-- Select Custom -->
                                    <div class="sample-select-custom">
                                        <!-- Select Custom -->
                                        <div class="select-box custom-select-box">
                                            <select name="search_item" class="custom-select" placeholder="전체 검색">
                                                <option value="" selected>전체 검색</option>
                                                <option value="name">제품명</option>
                                                <option value="name2">모델</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="select-input">
                                    <input type="text" name="search_order" value="" placeholder="제품명 또는 모델 일련번호 검색">
                                    <button type="button" onclick="top_search();" class="btn-search">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </section>
            <!-- //visual -->
            <!-- middleArea -->
            <div id="middleArea">
                <!-- ****************** 서브메뉴 ********************** -->

                <!-- content -->
                <section id="content" class="wide">


                    <section class="equipment-list-page area-1595">
                        <div class="accordion-list-box scroll-object" data-scroll="fade-up">
                            <ul class="accordion-list clearfix kwicks-accordion">
                                <li class="accordion-item accordion-item01">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_01.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_01.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>CO<sub>2</sub> 배양기</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_liste023.html?part_idx=1" class="accordion-info-box">
                                            <dl>
                                                <dt>CO<sub>2</sub> 배양기</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">CO<sub>2</sub> 배양기는 CO<sub>2</sub> 공급량을 정밀하게 조정하고 오염을 감소시켜 세포 배양 성장을 촉진합니다. <br class="pc-br">
                                                        엔바이오텍은 다양한 크기와 용량의 배양기를 제공합니다.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item02">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_02.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_02.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>진탕배양기</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_list0040.html?part_idx=2" class="accordion-info-box">
                                            <dl>
                                                <dt>진탕배양기</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">강력한 쉐이커와 다양한 용기 플랫폼을 위한 넓은 작업 공간.<br class="pc-br">안정적인 진탕과 정밀한 온도 제어.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item03">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_03.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_03.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>쉐이커 및 롤러 장치</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_listd941.html?part_idx=3" class="accordion-info-box">
                                            <dl>
                                                <dt>쉐이커 및 롤러 장치</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">궤도형, 왕복형, 여러 쉐이킹 모션이 복합된 형태, 그리고 원격 제어 등 다양한 크기와 옵션으로 제공되는 무벨트 자기 드라이브 벤치탑 쉐이커입니다. 또한 다양한 용기 홀더 플랫폼에 쉽게 장착할 수 있습니다.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item04">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_04.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_04.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>항온수조 및 히팅블럭</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_list0988.html?part_idx=4" class="accordion-info-box">
                                            <dl>
                                                <dt>항온수조 및 히팅블럭</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">특정 용도에 적합한 우수한 온도 균일성을 보장하며 부식을 방지해주는<br class="pc-br">
                                                        이음매 없는 스테인리스 내부 챔버와 여러 가지 기구를 수납할 수 있는 <br class="pc-br">특수 내장형 스프링 랙(*진탕 항온수조)과 같은 독특한 기능을 제공합니다.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item05">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_05.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_05.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>농축기</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_listc6df.html?part_idx=5" class="accordion-info-box">
                                            <dl>
                                                <dt>농축기</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">원심력과 진공, 열을 조합하여 기화와 농축 속도를 높입니다.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item06">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_06.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_06.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>건조기 및 배양기</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_list13eb.html?part_idx=6" class="accordion-info-box">
                                            <dl>
                                                <dt>건조기 및 배양기</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">건조기는 간단한 작동을 통해서 시료를 건조하고 멸균하는 데 주로 사용되고, <br class="pc-br">
                                                        일반 배양기는 모든 종류의 미생물, 세포, 세균 및 병균을 배양하거나 성장시키는 데 사용됩니다.
                                                        마이크로프로세서 컨트롤러가 탑재되어 우수한 온도 정확도와 재현성을 발휘합니다.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item07">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_07.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_07.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>고압증기 멸균기</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_list2613.html?part_idx=7" class="accordion-info-box">
                                            <dl>
                                                <dt>고압증기 멸균기</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">일반 실험실에 적합한 고압증기 멸균기입니다. 최고의 작업 효율과 <br class="pc-br">안전 기능으로 가격 대비해서 뛰어난 멸균 시스템을 제공합니다.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item08">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_08.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_08.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>클린벤치</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_list9d56.html?part_idx=8" class="accordion-info-box">
                                            <dl>
                                                <dt>클린벤치</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">HEPA 필터를 통한 공기 순환으로 사용자와 제품 및 환경 보호.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item09">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_09.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_09.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>줄기세포 분리 패키지</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="equipment_list63a6.html?part_idx=9" class="accordion-info-box">
                                            <dl>
                                                <dt>줄기세포 분리 패키지</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">줄기세포 관련 장비와 분리 및 투여용 키트 공급.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                                <li class="accordion-item accordion-item10">
                                    <div class="accordion-inner" style="background:url(../../images/content/intro_bg_10.jpg) no-repeat 50% 50%;">
                                        <article class="accordion-m-img" style="background:url(../../images/content/intro_bg_10.jpg) 50% 50% no-repeat;"></article>
                                        <h4 class="accordion-tit"><b>밸리데이션</b></h4>
                                        <i class="accordion-arrow xi-angle-right"></i>
                                        <a href="validation.html" class="accordion-info-box">
                                            <dl>
                                                <dt>밸리데이션</dt>
                                                <dd>
                                                    <p class="accordion-info-txt">장비의 성능을 최상으로 유지하기 위해 엔바이오텍은 전문 품질 관리사를 통해 밸리데이션 서비스를 제공합니다.</p>
                                                    <span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
                                                </dd>
                                            </dl>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </section>
                <!-- //content -->
            </div>
            <!-- //middleArea -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <?php include "../_inc/footer.php"; ?>
        <!-- //footer -->
    </div>
    <!-- //wrap -->
    <script type="text/javascript" src="/js/plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="/js/plugin/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="/js/vendor/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/js/plugin/slick.js"></script>
    <script type="text/javascript" src="/js/plugin/swiper.min.js"></script>
    <script type="text/javascript" src="/js/plugin/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/plugin/splitting.min.js"></script>
    <script type="text/javascript" src="/js/plugin/waypoints.min.js"></script>
    <script type="text/javascript" src="/js/plugin/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="/js/plugin/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/plugin/jquery.kwicks.js"></script>
    <script type="text/javascript" src="/js/functions.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript" src="/js/layer_popup.js"></script>
    <script type="text/javascript" src="/js/nav.js"></script>
    <script type="text/javascript" src="/js/sub5123.js?ver=220831_1"></script>
</body>

</html>