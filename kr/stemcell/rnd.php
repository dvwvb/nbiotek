<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>

    <script>
        //  4번째  대메뉴 인덱스
        dep1 = 4
        // dep1 = 03,
        dep2 = 02;
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
                                    <span>R&D 센터</span>
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

                    <article class="rnd-page">
                        <article class="rnd-top-con">
                            <div class="area scroll-object" data-scroll="fade-up" data-scroll-delay="200">
                                <h3 class="big-tit">엔바이오텍 줄기세포<br class="m-br"> 연구센터 소개</h3>
                                <p class="stem-cm-txt wh">
                                    <span>엔바이오텍의 줄기세포 연구센터는 각종 특허로 인정받은<br class="m-br"> 줄기세포 기술력을 바탕으로 다양한 줄기세포 관련 제품을 개발하고 <br class="m-br">사업을 진행해오고 있습니다. </span>
                                    <span>2020년 첨단재생의료 및 바이오의약품법 시행 이후<br class="m-br"> 세포처리시설과 첨단바이오의약품 제조업 허가를 취득하여 국내외<br class="m-br"> 세포처리시설 구축사업과 줄기세포 임상연구를 진행하는 등 <br class="m-br">첨단재생의료 산업을 선도하며 재생의료 발전에 <br class="m-br">기여해오고 있습니다.</span>
                                    <span>2016년부터는 국제줄기세포응용학회(ISSCA)를 설립하고 운영하며 줄기세포 기술 협력 플랫폼을 만들어 글로벌 줄기세포 연구 인프라를 구축해오고 있습니다.</span>
                                </p>
                                <div class="rnd-btn">
                                    <a href="../customer/contact.html#rndLocation">엔바이오텍 줄기세포 연구센터 위치 안내<i class="xi-globus"></i></a>
                                </div>
                            </div>
                        </article>

                        <article class="rnd-tab-con view-detail-container area">
                            <div class="cm-fixed-tab-container-JS">
                                <aside class="sub-tab-wrapper-style">
                                    <div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
                                        <div class="area equipment-tab-area scroll-object" data-scroll="fade-up">
                                            <a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>세포처리시설 허가증</span><i class="xi-caret-down-min arrow"></i></a>
                                            <ul class="clearfix cm-drop-list-JS equipment-tab-list col-03">
                                                <li class="selected"><a href="#rndCon1" class="inner"><em class="txt-inner">세포처리시설 허가증</em></a></li>
                                                <li><a href="#rndCon2" class="inner"><em class="txt-inner">특허증</em></a></li>
                                                <li class="last"><a href="#rndCon3" class="inner"><em class="txt-inner">줄기세포 트레이닝</em></a></li>
                                            </ul>
                                            <div class="nav-on-icon main-move-line">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <div class="sub-tab-content-style">
                                    <div class="sub-tab-con" id="rndCon1">
                                        <div class="rnd-license-con scroll-object" data-scroll="fade-up">
                                            <h4 class="stem-cm-tit">세포처리시설 허가증</h4>
                                            <div class="license-wrap">
                                                <div class="lf-txt">
                                                    <strong>식약처 허가 세포처리시설</strong>
                                                    <div class="stem-cm-txt">
                                                        <p>엔바이오텍은 그동안의 세포처리시설 구축과 자체 연구소 운영 노하우, 특허로 인정받은 기술력을 통해서 식약처로부터 세포처리시설 허가를 취득하여 시설과 기술의 대한 안전성을 인정받게 되었고 이후 현재 국내외 여러 의료기관들과 첨단재생의료 임상연구를 수행하며 줄기세포를 활용한 질병치료 기술을 개발하고 있습니다.</p>

                                                    </div>
                                                </div>
                                                <div class="rt-img"><img src="../../images/content/rnd_license_img.jpg" alt="세포처리시설 허가증" class="pc-ver" />
                                                    <img src="../../images/content/rnd_license_img_m.jpg" alt="세포처리시설 허가증" class="m-ver" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-tab-con" id="rndCon2">
                                        <div class="rnd-patents-con scroll-object" data-scroll="fade-up">
                                            <div class="top-tit">
                                                <h4 class="stem-cm-tit">특허증</h4>
                                                <p class="stem-cm-txt sm"><b>줄기세포 계대배양, 줄기세포 대량 생산,<br class="m-br"> 줄기세포 배양 배지 등</b>에 대한 특허.</p>
                                            </div>
                                            <div class="certifi-list-style05">

                                                <div class="certificate-con">
                                                    <div class="certificate-list">
                                                        <ul class="clearfix popup-gallery">
                                                            <li>
                                                                <a href="../../data/bbsData/16305436129.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305436129.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../../data/bbsData/16305436069.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305436069.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../../data/bbsData/16305434719.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305434719.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../../data/bbsData/16305434419.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305434419.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../../data/bbsData/16305433179.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305433179.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../../data/bbsData/16305431169.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305431169.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../../data/bbsData/16305430179.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305430179.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../../data/bbsData/16305429379.jpg" title="">
                                                                    <div class="certificate-img-thumb">
                                                                        <div class="img-con"><span><img src="../../data/bbsData/16305429379.jpg" alt="인증서" /></span></div>
                                                                        <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-tab-con" id="rndCon3">
                                        <div class="rnd-training-con scroll-object" data-scroll="fade-up">
                                            <h4 class="stem-cm-tit">줄기세포 트레이닝</h4>
                                            <div class="training-wrap">
                                                <div class="lf-txt stem-cm-txt">
                                                    <strong><i class="xi-document"></i>SVF · PRP · 줄기세포</strong>
                                                    <strong><i class="xi-document"></i>시연 및 실습</strong>
                                                    <p>엔바이오텍은 줄기세포에 관한 자체 교육 프로그램을 통해 <br class="pc-br">
                                                        안전한 줄기세포 처리와 응용에 필요한 기술을 이전합니다.</p>
                                                </div>
                                                <div class="rt-img">
                                                    <img src="../../images/content/rnd_training_img.jpg" alt="Stem cell training" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </article>
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