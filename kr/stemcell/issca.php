<!doctype html>
<html lang="ko">

<head>
    <?php include "../../_inc/config.php"; ?>

    <script type="text/javascript" src="../../js/plugin/jquery.rwdImageMaps.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /* ***********************  영상 클릭시 ************************ */
            $(".video-cover-box").on("click", function() {
                var videoCode = $(this).data("code");
                $(this).fadeOut().prev(".video-iframe-box").append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + videoCode + '?version=3&showinfo=0&autoplay=1&loop=1&controls=0&modestbranding=1&rel=0&playlist=' + videoCode + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            });
        });

        $(function() {
            $('.mb-global-con img').rwdImageMaps();
        });
    </script>

    <script>
        //  4번째  대메뉴 인덱스
        dep1 = 4
        // dep1 = 03,
        dep2 = 04;
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
            <section id="visual" class="sub-visual-stemcell">
                <div class="visual-img-con" style="background:#eee url(../../images/layout/sub_visual_stemcell.jpg) no-repeat 50% 0%"></div>
                <div class="area-1595 visual-txt-con">
                    <div class="table-cell-layout">
                        <div class="visual-txt-container">
                            <h2 class="visual-tit trans400 up-effect-txt">
                                <span class="effect-inner">줄기세포</span>
                            </h2>
                            <p class="visual-sub-txt up-effect-txt"><span class="effect-inner">줄기세포 토탈 솔루션 기업 엔바이오텍</span></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //visual -->
            <!-- middleArea -->
            <div id="middleArea">
                <!-- ****************** 서브메뉴 ********************** -->
                <!--  모든 서브메뉴 : fixed될때 fixed-sub-menu, top-fixed-object 클래스 추가  -->
                <!-- 서브메뉴 4(PC,모바일 모두사용가능) -->
                <aside id="topMenu04" class="fixed-sub-menu top-menu-stemcell">
                    <div class="side-menu-inner clearfix">
                        <div class="equipment-search-box">
                            <form name="bbs_search_form2" method="get" action="https://www.n-biotek.com/kr/equipment/equipment_search.php">
                                <input type="hidden" name="part_idx" value="">
                                <script language="javascript">
                                    <!--
                                    function top_search2() {
                                        var form = document.bbs_search_form2;
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
                                        <button type="button" onclick="top_search2();" class="btn-search">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="cm-top-menu clearfix">
                            <a href="../index.html" class="location-to-home-btn" title="메인으로"><i class="xi-home-o"></i></a>
                            <div class="menu-location location1 cm-drop-menu-box-JS" data-drop-event="click">
                                <button class="cur-location cm-drop-open-btn-JS">
                                    <span>줄기세포</span>
                                    <i class="xi-angle-down-min arrow"></i>
                                </button>
                                <ul class="location-menu-con cm-drop-list-JS">
                                    <li><a href="../index.html">Home</a></li>
                                    <li><a href="../nbiotek/about.html">N-BIOTEK</a></li>
                                    <li><a href="../equipment/equipment_intro.html">실험 장비</a></li>
                                    <li><a href="about.html">줄기세포</a></li>
                                    <li><a href="../customer/notice.html">CS Center</a></li>
                            </div>
                            <div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
                                <button class="cur-location cm-drop-open-btn-JS">
                                    <span>ISSCA</span>
                                    <i class="xi-angle-down-min arrow"></i>
                                </button>
                                <ul class="location-menu-con cm-drop-list-JS">
                                    <li><a href="about.html"><span>줄기세포란?</span></a></li>
                                    <li><a href="rnd.html"><span>R&D 센터</span></a></li>
                                    <!-- <li><a href="https://www.n-biotek.com/kr/stemcell/solution.php"><span>Stem Cell Total Solution</span></a></li> -->
                                    <li><a href="business/intro.html"><span>줄기세포 사업</span></a></li>
                                    <li><a href="issca.html"><span>ISSCA</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- // -->

                <!-- content -->
                <section id="content" class="wide">

                    <article class="issca-page">
                        <div class="issca-top area-box scroll-object" data-scroll="fade-up" data-scroll-delay="200">
                            <img src="../../images/content/issca_top_img_kr.jpg" alt="Stempia Global Platform" />
                        </div>
                        <div class="issca-app scroll-object">
                            <div class="area">
                                <h3 class="tit" data-scroll="fade-up"><b>ISSCA</b>국제줄기세포응용학회</h3>
                                <div class="issca-check-box" data-scroll="fade-up">
                                    <div class="lf-logo"><img src="../../images/content/issca_logo.jpg" alt="ISSCA" /></div>
                                    <div class="rt-txt">
                                        <p>첨단재생의료 컨퍼런스</p>
                                        <p>시연</p>
                                        <p>임상사례 공유</p>
                                        <p>폭넓은 회원 자격</p>
                                    </div>
                                </div>
                                <div class="txt-con stem-cm-txt" data-scroll="fade-up">
                                    <p>줄기세포 응용 기술에 대한 관심이 세계적으로 높아지고 있습니다. 그러나 줄기세포 응용 기술을 배우고 교류할 수 있는 기회는 많지 않습니다. 줄기세포 토탈 솔루션을 제공하는 엔바이오텍은 각종 트레이닝 코스와 기술이전을 통해 전 세계의 수 많은 첨단재생의료 분야 전문가들을 교육하고 있으며, 국제줄기세포응용학회(ISSCA)를 통해 함께 줄기세포 응용을 위한 연구 및 응용 기술을 확대하는 것을 목표로 하고 있습니다.</p>
                                    <p>국제줄기세포응용학회(ISSCA)는 다양한 컨퍼런스, 교육 등을 통해 세계 여러 국가에서 줄기세포 및 첨단재생의료의 상용화와 법제화에 기여하고 있으며 세계 여러국가의 전문가로 구성된 회원들간의 교류를 통해 줄기세포 및 첨단재생의료 기술 개발에 힘써오고 있습니다.</p>
                                    <p>엔바이오텍은 앞으로도 글로벌 무대에서 줄기세포 기술과 지식을 발전시키기 위해 지속적으로 노력할 것입니다.</p>
                                </div>
                                <ul class="icon-box-list" data-scroll="fade-up">
                                    <li>
                                        <span class="icon"><img src="../../images/content/issca_icon_01.png" alt="Case presentation in a conference" /></span>
                                        <p class="txt stem-cm-txt">컨퍼런스에서의 임상사례 발표</p>
                                    </li>
                                    <li>
                                        <span class="icon"><img src="../../images/content/issca_icon_02.png" alt="ISSCA magazine advertisment" /></span>
                                        <p class="txt stem-cm-txt">ISSCA 매거진 광고</p>
                                    </li>
                                    <li>
                                        <span class="icon"><img src="../../images/content/issca_icon_03.png" alt="Promotional article distribution" /></span>
                                        <p class="txt stem-cm-txt">홍보 기사 배포</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="issca-video scroll-object" data-scroll="fade-up">
                            <div class="area">
                                <h4 class="stem-cm-tit sm">프로모션 영상</h4>
                                <div class="video-iframe-wrapper">
                                    <div class="video-iframe-box"></div>
                                    <div class="video-cover-box" data-code="r0DLLhva2uE">
                                        <span class="thumb"><img src="../../images/content/issca_video_img.jpg" alt="PROMOTION VIDEO 배경" /></span>
                                        <div class="icon"><img src="../../images/content/issca_video_icon.png" alt="PROMOTION VIDEO 재생아이콘" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="issca-global scroll-object" data-scroll="fade-up">
                            <section id="globalMapCon" class="section">
                                <div class="global-area area-box">
                                    <div class="global-map-con">
                                        <img src="../../images/main/global_map.png" alt="세계지도" class="global-map-bg" />
                                        <div class="global-nation-box">
                                            <div class="nation-circle nation-01" style="margin-top:-30.5%; margin-left:-34.5%">
                                                <div class="nation-explain-wrap">
                                                    <div class="nation-tit">
                                                        <img src="../../images/content/issca_global_nation_01.png" alt="Turkey" />
                                                        <b>터키</b>
                                                    </div>
                                                    <div class="explain">
                                                        <p class="clearfix"><b>2018년 4월</b><span>제3차 ISSCA 첨단재생의료 컨퍼런스</span></p>
                                                        <p class="clearfix"><b>2019년 4월</b><span>제6차 ISSCA 첨단재생의료 컨퍼런스</span></p>
                                                    </div>
                                                </div>
                                                <div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle nation-02" style="margin-top:-33%; margin-left:-17.3%">
                                                <div class="nation-explain-wrap rt">
                                                    <div class="nation-tit">
                                                        <b>몽골</b>
                                                        <img src="../../images/content/issca_global_nation_02.png" alt="Mongolia" />
                                                    </div>
                                                    <div class="explain">
                                                        <p class="clearfix"><b>2019년 6월</b><span>제7차 첨단재생의료 컨퍼런스</span></p>
                                                    </div>
                                                </div>
                                                <div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle nation-03" style="margin-top:-31%; margin-left:-12%">
                                                <div class="nation-explain-wrap rt">
                                                    <div class="nation-tit">
                                                        <b>대한민국</b>
                                                        <img src="../../images/content/issca_global_nation_03.png" alt="South Korea" />
                                                    </div>
                                                    <div class="explain">
                                                        <p class="clearfix"><b>2017년 4월</b><span>제1차 줄기세포 교육 및 건강 교육 컨퍼런스</span></p>
                                                        <p class="clearfix"><b>2018년 1월</b><span>제2차 ISSCA 줄기세포 전문가 컨퍼런스</span></p>
                                                        <p class="clearfix"><b>2018년 11월</b><span>제4차 ISSCA 첨단재생의료 컨퍼런스</span></p>
                                                    </div>
                                                </div>
                                                <div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle nation-04" style="margin-top:-28%; margin-left:-44.1%">
                                                <div class="nation-explain-wrap">
                                                    <div class="nation-tit">
                                                        <img src="../../images/content/issca_global_nation_04.png" alt="Morocco" />
                                                        <b>모로코</b>
                                                    </div>
                                                    <div class="explain">
                                                        <p class="clearfix"><b>2019년 2월</b><span>제5차 ISSCA 첨단재생의료 컨퍼런스</span></p>
                                                    </div>
                                                </div>
                                                <div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle nation-05" style="margin-top:-18.5%; margin-left:-15.1%">
                                                <div class="nation-explain-wrap rt">
                                                    <div class="nation-tit">
                                                        <b>말레이시아 </b>
                                                        <img src="../../images/content/issca_global_nation_05.png" alt="Malaysia" />
                                                    </div>
                                                    <div class="explain">
                                                        <p class="clearfix"><b>2019년 11월</b><span>제8차 ISSCA 첨단재생의료 컨퍼런스</span></p>
                                                    </div>
                                                </div>
                                                <div class="effect-circle" title="Malaysia"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tb-img"><img src="../images/content/issca_global_map_tb.png" alt="" /></div>
                                    <div class="mb-global-con">
                                        <img src="../../images/content/issca_global_map_mb_kr.jpg" alt="" usemap="#Map" />
                                        <map name="Map" id="Map">
                                            <area shape="rect" coords="159,246,285,287" href="global_pop9eff.html?nation=1" class="cm-modal-open-btn" />
                                            <area shape="rect" coords="397,187,554,227" href="global_pop129a.html?nation=2" class="cm-modal-open-btn" />
                                            <area shape="rect" coords="516,335,708,381" href="global_pop2158.html?nation=3" class="cm-modal-open-btn" />
                                            <area shape="rect" coords="37,356,183,397" href="global_pop9e68.html?nation=4" class="cm-modal-open-btn" />
                                            <area shape="rect" coords="421,479,578,525" href="global_pop8031.html?nation=5" class="cm-modal-open-btn" />
                                        </map>
                                        <div class="effect-circle-box">
                                            <div class="nation-circle" style="margin-top:-12.5%;">
                                                <div class="effect-circle" title="Morocco"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle" style="margin-top:-6%; margin-left:-30.375%;">
                                                <div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle" style="margin-top:-4.25%; margin-left:-41.5%;">
                                                <div class="effect-circle" title="Mongolia"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle" style="margin-top:-7.25%; margin-left:10.5%;">
                                                <div class="effect-circle" title="South Kores"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                            <div class="nation-circle" style="margin-top:10.875%; margin-left:5.25%;">
                                                <div class="effect-circle" title="Malaysia"><span></span><span></span><span></span><span></span><i></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="issca-gallery scroll-object" data-scroll="fade-up">
                            <div class="area">
                                <h4 class="stem-cm-tit sm">갤러리</h4>
                                <ul class="issca-gallery-slide">
                                    <li><img src="../../data/bbsData/16448846069.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448846209.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448846349.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448846609.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448846749.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448859429.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448859579.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448859709.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448859849.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448859979.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448860099.jpg" alt="GALLERY" /></li>
                                    <li><img src="../../data/bbsData/16448860239.jpg" alt="GALLERY" /></li>
                                    <!-- <li><img src="https://www.n-biotek.com/images/content/issca_gallery_img01.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img02.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img03.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img04.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img05.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img06.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img07.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img08.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img09.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img10.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img11.jpg" alt="" /></li>
					<li><img src="https://www.n-biotek.com/images/content/issca_gallery_img12.jpg" alt="" /></li> -->
                                </ul>
                                <div class="issca-go-btn">
                                    <a href="http://www.issca.net/" target="_blank">ISSCA 웹사이트 이동<i class="xi-globus"></i></a>
                                </div>
                            </div>
                        </div>

                    </article>
                </section>
                <!-- //content -->
            </div>
            <!-- //middleArea -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <footer id="footer">
            <button class="to-top-btn"><em class="blind">TOP</em><i class="xi-arrow-up"></i></button>
            <!-- 푸터 상단 -->
            <article id="footerTop">
                <div class="area-box clearfix">
                    <!-- 푸터상단 왼쪽 -->
                    <div class="footer-left-con">
                        <ul class="foot-menu clearfix">
                            <li><a href="../etc/privacy.html" class="cm-modal-open-btn">개인정보 보호정책</a></li>
                            <li><a href="../../images/content/N-BIOTEK_PRODUCT_CATALOG_VOL_18.pdf" download>카탈로그 다운로드</a></li>
                            <li><a href="../customer/contact.html">연락처 및 주소</a></li>
                        </ul>
                    </div>
                    <!-- 푸터상단 오른쪽 -->
                    <div class="footer-right-con">
                        <div class="family-site-box cm-drop-menu-box-JS" data-drop-event="click">
                            <button class="family-site-open-btn cm-drop-open-btn-JS">Family Site </button>
                            <ul id="footerFamilyList" class="family-site-list cm-drop-list-JS">
                                <li><a href="http://esfomi.co.kr/" target="_blank" title="새창으로열기">esfomi</a></li>
                                <li><a href="https://issca.net/" target="_blank" title="새창으로열기">ISSCA</a></li>
                            </ul>
                        </div>
                        <div class="foot-sns-menu">
                            <ul class="clearfix">
                                <li><a href="https://www.youtube.com/channel/UC0GK7C1iG7zU5LfOirUNPlw" target="_blank" title="새창으로열기"><i class="xi-youtube-play"></i></a></li>
                                <li><a href="https://www.instagram.com/nbiotek/" target="_blank" title="새창으로열기"><i class="xi-instagram"></i></a></li>
                                <li><a href="https://ko-kr.facebook.com/nbiotek/" target="_blank" title="새창으로열기"><i class="xi-facebook-official"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <!-- 푸터 하단 -->
            <article id="footerBottom">
                <div class="area-box clearfix">
                    <!-- 푸터 하단 왼쪽 -->
                    <article class="footer-left-con">
                        <div class="footer-address-info-box">
                            <div class="footer-address-list">
                                <dl>
                                    <dt>주소</dt>
                                    <dd>경기도 부천시 평천로 655 부천테크노파크 402-803, 우) 14502</dd>
                                </dl>
                            </div>
                            <div class="footer-address-list">
                                <dl>
                                    <dt>전화</dt>
                                    <dd>+82.32.321.2100</dd>
                                </dl>
                                <dl>
                                    <dt>팩스</dt>
                                    <dd>+82.32.328.2372</dd>
                                </dl>
                                <dl>
                                    <dt>이메일</dt>
                                    <dd><a href="mailto:webmaster@n-biotek.com">webmaster@n-biotek.com</a></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="footer-copyright">Copyright ⓒ <b>N-BIOTEK</b> All rights reserved.</div>
                    </article>
                    <!-- 푸터 하단 오른쪽 -->
                    <article class="footer-right-con">
                        <span class="foot-logo"><img src="../../images/common/footer_logo.jpg" alt="N-BIOTEK" /></span>
                    </article>
                </div>
            </article>
        </footer> <!-- //footer -->
    </div>
    <!-- //wrap -->
    <script type="text/javascript" src="../../js/plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../../js/plugin/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="../../js/vendor/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../../js/plugin/slick.js"></script>
    <script type="text/javascript" src="../../js/plugin/swiper.min.js"></script>
    <script type="text/javascript" src="../../js/plugin/TweenMax.min.js"></script>
    <script type="text/javascript" src="../../js/plugin/splitting.min.js"></script>
    <script type="text/javascript" src="../../js/plugin/waypoints.min.js"></script>
    <script type="text/javascript" src="../../js/plugin/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="../../js/plugin/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="../../js/plugin/jquery.kwicks.js"></script>
    <script type="text/javascript" src="../../js/functions.js"></script>
    <script type="text/javascript" src="../../js/common.js"></script>
    <script type="text/javascript" src="../../js/layer_popup.js"></script>
    <script type="text/javascript" src="../../js/nav.js"></script>
    <!--[if lt IE 9]>
		<script src="https://www.n-biotek.com/js/vendor/html5shiv.js"></script>
		<script src="https://www.n-biotek.com/js/vendor/respond.min.js"></script>
	<![endif]-->
    <script type="text/javascript" src="../../js/sub5123.js?ver=220831_1"></script>
</body>

<!-- Mirrored from www.n-biotek.com/kr/stemcell/issca.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2022 03:54:11 GMT -->

</html>