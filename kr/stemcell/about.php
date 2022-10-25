<!doctype html>
<html lang="ko">

<head>
    <?php include "../../_inc/config.php"; ?>

    <script>
        //  4번째  대메뉴 인덱스
        dep1 = 4
        // dep1 = 03,
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
                                    function top_search2() {
                                        var form = document.bbs_search_form2;
                                        if (form.search_order.value == "") {
                                            alert("Please enter Search data.");
                                            form.search_order.focus();
                                        } else {
                                            form.submit();
                                        }
                                    }
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
                                    <li><a href="/kr/index.php">Home</a></li>
                                    <li><a href="/kr/nbiotek/about.php">N-BIOTEK</a></li>
                                    <li><a href="/kr/equipment/equipment_intro.php">실험 장비</a></li>
                                    <li><a href="/kr/stemcell/about.php">줄기세포</a></li>
                                    <li><a href="/kr/customer/notice.php">CS Center</a></li>
                            </div>
                            <div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
                                <button class="cur-location cm-drop-open-btn-JS">
                                    <span>줄기세포란?</span>
                                    <i class="xi-angle-down-min arrow"></i>
                                </button>
                                <ul class="location-menu-con cm-drop-list-JS">
                                    <li><a href="/kr/stemcell/about.php"><span>줄기세포란?</span></a></li>
                                    <li><a href="/kr/stemcell/rnd.php"><span>R&D 센터</span></a></li>
                                    <li><a href="/kr/stemcell/business/intro.php"><span>줄기세포 사업</span></a></li>
                                    <li><a href="/kr/stemcell/issca.php"><span>ISSCA</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- // -->

                <!-- content -->
                <section id="content" class="wide">

                    <article class="stem-about-page">
                        <article class="stem-about-01 stem-sec scroll-object" data-scroll="fade-up" data-scroll-delay="200">
                            <div class="top-txt area">
                                <h3 class="stem-big-tit"><b>줄기세포</b>란?</h3>
                                <p class="stem-cm-txt">줄기세포는 여러 신체조직으로 분화할 수 있는 미분화세포로 여러 기능을 통해 우리 몸에서 손상된 세포나 조직을 재생하고 회복시키는 역할을 합니다.</p>
                            </div>
                            <div class="stem-graph">
                                <div class="area">
                                    <div class="lf-img"><img src="../images/content/about_stem_graph_kr.jpg" alt="Stem Cells Graph" /></div>
                                    <div class="rt-txt stem-cm-txt">
                                        <p>하지만 20대 중반 이후 우리 몸의 줄기세포 수와 활성도는 급격하게 감소하며<br class="pc-br"> 그에 따라 치유 및 재생 능력이 떨어지면서 빠른 속도로 노화가 진행되게 됩니다.</p>
                                        <p>건강한 줄기세포를 지속적으로 우리 몸 안에 제공해준다면,<br class="pc-br"> 면역시스템을 회복해주며 노화를 늦출 수 있습니다.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="stem-about-02 stem-sec scroll-object" data-scroll="fade-up">
                            <div class="area">
                                <h4 class="stem-cm-tit">줄기세포의 종류</h4>
                                <ul class="type-list">
                                    <li>
                                        <img src="../../images/content/about_stem_img01.jpg" alt="Embryonic stem cells" />
                                        <dl class="txt">
                                            <dt class="stem-blue-txt">배아줄기세포</dt>
                                            <dd class="stem-cm-txt sm">
                                                <p><b>수정된 배아</b> 초기 단계에서 유래</p>
                                                <p>모든 조직의 세포로 분화가능한 전능 세포</p>
                                                <p>살아있는 생명체 파괴로 취급될 수 있는 문제<span class="arrow-txt"><i class="xi-long-arrow-right"></i><b>윤리적 문제를 갖고 있음</b></span></p>
                                                <p><b>조절 문제로 인한 부작용 발생</b>으로 의료 목적으로 사용 금지되어 있는 상태</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <img src="../../images/content/about_stem_img02.jpg" alt="Adult stem cells" />
                                        <dl class="txt">
                                            <dt class="stem-blue-txt">성체줄기세포</dt>
                                            <dd class="stem-cm-txt sm">
                                                <p><b>분화가 가능한 미분화 세포</b></p>
                                                <p>다양한 조직에서 채취가 가능하여<b> 채취가 용이함</b></p>
                                                <p><b>자가세포를 활용하여 면역거부반응 없음 </b></p>
                                                <p><b>암 조직 등을 형성할 위험성이 없음</b></p>
                                                <p><b>중간엽 줄기세포 / 조혈모 줄기세포</b></p>
                                            </dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article class="stem-about-03 stem-sec scroll-object" data-scroll="fade-up">
                            <div class="area-1410">
                                <h4 class="stem-cm-tit">성체줄기세포</h4>
                                <ul class="origins-list">
                                    <li>
                                        <div class="inner">
                                            <div class="lf-img"><img src="../../images/content/about_stem_img03.png" alt="Cord blood" /></div>
                                            <dl class="rt-txt">
                                                <dt class="stem-blue-txt">제대혈</dt>
                                                <dd class="stem-cm-txt sm">
                                                    <p>혈액관련 질병에 적용</p>
                                                    <p>출생 시만 채집 가능</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="lf-img"><img src="../../images/content/about_stem_img04.png" alt="Placenta" /></div>
                                            <dl class="rt-txt">
                                                <dt class="stem-blue-txt">태반</dt>
                                                <dd class="stem-cm-txt sm">
                                                    <p>채취가 쉬우나 제한적</p>
                                                    <p>출생 시만 채집 가능</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="lf-img"><img src="../../images/content/about_stem_img05.png" alt="Bone Marrow" /></div>
                                            <dl class="rt-txt">
                                                <dt class="stem-blue-txt">골수</dt>
                                                <dd class="stem-cm-txt sm">
                                                    <p>채취가 어려움</p>
                                                    <p>소량만 채취가능</p>
                                                    <p>배양이 어려움</p>
                                                    <p>연구 기간이 가장 오래됨</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="lf-img"><img src="../../images/content/about_stem_img06.png" alt="Fat Tissue" /></div>
                                            <dl class="rt-txt">
                                                <dt class="stem-blue-txt">지방</dt>
                                                <dd class="stem-cm-txt sm">
                                                    <p>채취가 쉬움</p>
                                                    <p>부작용이 전혀 없음</p>
                                                    <p>배양이 쉬움</p>
                                                    <p>적용범위가 넓은 연구재료</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <article class="stem-about-04 stem-sec scroll-object">
                            <h4 class="stem-cm-tit" data-scroll="fade-up">줄기세포의 특성</h4>
                            <div class="character-01 character-con" data-scroll="fade-up">
                                <div class="area">
                                    <div class="top-num-txt clearfix">
                                        <strong class="num"><em>01</em>분화</strong>
                                        <p class="txt stem-cm-txt">줄기세포는 여러 신체조직으로 분화할 수 있는 미분화세포로 여러 기능을 통해 <br class="pc-br">
                                            우리 몸에서 손상된 세포나 조직을 재생하고 회복시키는 역할을 합니다.</p>
                                    </div>
                                    <div class="center-img">
                                        <img src="../../images/content/about_stem_img07_kr.png" alt="Liver Cell, Blood Cell, Muscle Cell" class="pc" />
                                        <img src="../../images/content/about_stem_img07_mb_kr.png" alt="Liver Cell, Blood Cell, Muscle Cell" class="mb" />
                                    </div>
                                </div>
                            </div>
                            <div class="character-02 character-con" data-scroll="fade-up">
                                <div class="area">
                                    <div class="top-num-txt clearfix wh">
                                        <strong class="num"><em>02</em>줄기세포의 호밍효과</strong>
                                    </div>
                                    <div class="center-img">
                                        <img src="../images/content/about_stem_img08_kr.png" alt="Homing Ability" class="pc" />
                                        <img src="../images/content/about_stem_img08_mb_kr.png" alt="Homing Ability" class="mb" />
                                    </div>
                                </div>
                            </div>
                            <div class="character-03 character-con" data-scroll="fade-up">
                                <div class="area">
                                    <div class="top-num-txt clearfix">
                                        <strong class="num"><em>03</em>파라크라인 효과</strong>
                                        <p class="txt stem-cm-txt">줄기세포는 증식되면서 면역조절과 세포활성화를 돕는 여러 유형의 성장 인자를 분비합니다.</p>
                                    </div>
                                    <div class="center-img">
                                        <img src="../images/content/about_stem_img09_kr.png" alt="Paracrine Effect" class="pc" />
                                        <img src="../images/content/about_stem_img09_mb_kr.png" alt="Paracrine Effect" class="mb" />
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="stem-about-05 stem-sec scroll-object" data-scroll="fade-up">
                            <div class="area">
                                <h4 class="stem-cm-tit">줄기세포의 기능</h4>
                                <div class="function-img"><img src="../images/content/about_stem_img10_kr.png" alt="Stem Cell Function" /></div>
                            </div>
                        </article>
                        <article class="stem-about-06 stem-sec scroll-object" data-scroll="fade-up">
                            <div class="area">
                                <h4 class="sec-tit"><b>줄기세포의</b><br>사용 가능 분야</h4>
                                <div class="potential center-img">
                                    <img src="../images/content/about_stem_img11_kr.jpg" alt="Potential Uses of Stem Cells" class="pc" />
                                    <img src="../images/content/about_stem_img11_mb_kr.jpg" alt="Potential Uses of Stem Cells" class="mb" />
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