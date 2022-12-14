<!doctype html>
<html lang="ko">

<head>
    <?php include "../../_inc/config.php"; ?>
    <script>
        //  2번째 대메뉴 인덱스
        dep1 = 2
        // dep1 = 02,
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
            <section id="visual" class="sub-visual-nbiotek">
                <div class="visual-img-con" style="background:#eee url(../../images/layout/sub_visual_nbiotek.jpg) no-repeat 50% 0%"></div>
                <div class="area-1595 visual-txt-con">
                    <div class="table-cell-layout">
                        <div class="visual-txt-container">
                            <h2 class="visual-tit trans400 up-effect-txt">
                                <span class="effect-inner">N-BIOTEK</span>
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
                <aside id="topMenu04" class="fixed-sub-menu top-menu-nbiotek">
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
                            <a href="../index.php" class="location-to-home-btn" title="메인으로"><i class="xi-home-o"></i></a>
                            <div class="menu-location location1 cm-drop-menu-box-JS" data-drop-event="click">
                                <button class="cur-location cm-drop-open-btn-JS">
                                    <span>N-BIOTEK</span>
                                    <i class="xi-angle-down-min arrow"></i>
                                </button>
                                <ul class="location-menu-con cm-drop-list-JS">
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="about.html">N-BIOTEK</a></li>
                                    <li><a href="../equipment/equipment_intro.html">실험 장비</a></li>
                                    <li><a href="../stemcell/about.html">줄기세포</a></li>
                                    <li><a href="../customer/notice.html">CS Center</a></li>
                            </div>
                            <div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
                                <button class="cur-location cm-drop-open-btn-JS">
                                    <span>기업 소개</span>
                                    <i class="xi-angle-down-min arrow"></i>
                                </button>
                                <ul class="location-menu-con cm-drop-list-JS">
                                    <li><a href="about8a76.html?menu=about" data-move-id="#about" data-index="01"><span>기업 소개</span></a></li>
                                    <li><a href="aboutf052.html?menu=history" data-move-id="#history" data-index="02"><span>연혁</span></a></li>
                                    <li><a href="aboutace2.html?menu=patent" data-move-id="#patent" data-index="03"><span>특허 및 인증</span></a></li>
                                    <li><a href="about4fcb.html?menu=partners" data-move-id="#partners" data-index="04"><span>고객사</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- // -->

                <!-- content -->
                <section id="content" class="wide">

                    <!-- Start -->
                    <article class="cm-fixed-tab-container-JS">
                        <aside class="sub-tab-wrapper-style">
                            <div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
                                <div class="area scroll-object" data-scroll="fade-up" data-scroll-delay="200">
                                    <a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>기업 소개</span><i class="xi-caret-down-min arrow"></i></a>
                                    <ul class="clearfix cm-drop-list-JS about-top-menu move-line-tab">
                                        <li class="selected"><a href="#about" class="inner"><em class="txt-inner">기업 소개</em></a></li>
                                        <li><a href="#history" class="inner"><em class="txt-inner">연혁</em></a></li>
                                        <li><a href="#patent" class="inner"><em class="txt-inner">특허 및 인증</em></a></li>
                                        <li class="last"><a href="#partners" class="inner"><em class="txt-inner">고객사</em></a></li>
                                    </ul>
                                    <div class="nav-on-icon main-move-line">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="about-page sub-tab-content-style">
                            <div class="sub-tab-con" id="about" data-index="01">
                                <div class="scroll-object" data-scroll="fade-up" data-scroll-delay="200">
                                    <h3 class="tab-tit">기업 소개</h3>
                                    <div class="about-top-img area-box">
                                        <span><img src="/images/content/about_about_img01.jpg" alt="About us"></span>
                                    </div>
                                </div>
                                <div class="about-us-con area">
                                    <div class="txt-box scroll-object" data-scroll="fade-up">
                                        <h4 class="tit">줄기세포 토탈 솔루션 기업, <span class="co-green">엔바이오텍</span></h4>
                                        <p class="txt">엔바이오텍은 1982년부터 쌓아온 생명과학장비 제조 기술을 바탕으로 국내를 비롯하여 전 세계에 생명과학장비를 공급하고 있으며, <br class="pc-br">
                                            2020년 첨단재생의료 및 바이오의약품법 시행 이후 세포처리시설과 첨단바이오의약품 제조업 허가를 취득한 노하우로 국내외 세포처리시설 구축사업과 <br class="pc-br">
                                            줄기세포 임상연구를 진행하며 첨단재생의료 사업을 선도하고 있는 글로벌 바이오기업입니다.</p>
                                    </div>
                                    <div class="philosophy-con scroll-object" data-scroll="fade-up">
                                        <h5 class="con-tit">경영 철학</h5>
                                        <div class="philosophy-list">
                                            <div class="con-box-wrap">
                                                <div class="sub-txt-box">
                                                    <strong class="sub-tit">사명</strong>
                                                    <p class="sub-txt">최고 품질의 <b>생명과학 장비</b>와 <b>줄기세포 토탈 솔루션</b>을 통해 인류의 건강과 행복에 기여합니다.</p>
                                                </div>
                                                <div class="sub-icon-box"><img src="/images/content/philosophy_icon01.png" alt="MISSION 아이콘" /></div>
                                            </div>
                                            <div class="con-box-wrap">
                                                <div class="sub-txt-box">
                                                    <strong class="sub-tit">비전</strong>
                                                    <p class="sub-txt">생명과학 선도 & 줄기세포 토탈 솔루션 제공</p>
                                                </div>
                                                <div class="sub-icon-box"><img src="/images/content/philosophy_icon02.png" alt="VISION 아이콘" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-us-img-con scroll-object" data-scroll="fade-up">
                                    <div class="area">
                                        <span><img src="/images/content/about_about_img02_kr.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-tab-con history-tab-con" id="history" data-index="02">
                                <div class="area scroll-object" data-scroll="fade-up">
                                    <h3 class="tab-tit">연혁</h3>
                                    <!-- 
						섹션 추가가능, 
						좌측 :: 이미지 및 년도, 텍스트 입력
						우측 :: 년도 입력가능
					-->
                                    <div class="history-con-wrap clearfix">
                                        <div class="tit-wrap">
                                            <span><img src="../../data/bbsData/16618265679.jpg" alt="2008~2022" /></span>
                                            <div class="tit-box">
                                                <h4>2008~2022</h4>
                                                <p class="txt">Global Stem Cell Leader, N-BIOTEK</p>
                                            </div>
                                        </div>
                                        <div class="history-list-wrap">
                                            <div class="history-item">
                                                <strong class="year">2022</strong>
                                                <p class="txt">첨단바이오 의약품 제조업 허가 취득</p>
                                                <p class="txt">글로벌 강소기업 지정</p>
                                                <p class="txt">전과정 자동화 무교반 바이오리엑터 개발 국책과제 선정</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2021</strong>
                                                <p class="txt">세포처리시설 허가 취득</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2019</strong>
                                                <p class="txt">모로코, 터키, 몽골, 말레이시아 ISSCA 컨퍼런스 개최</p>
                                                <p class="txt">베트남 정부산하 과학기술부 줄기세포 연구센터 구축</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2018</strong>
                                                <p class="txt">대한민국 보건산업대상 식품의약품안전처장 표창 수상</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2017</strong>
                                                <p class="txt">대한민국 브랜드 만족도 헬스케어 부문 1위 수상</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2016</strong>
                                                <p class="txt">국제 줄기세포 응용학회 (ISSCA) 설립</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2015</strong>
                                                <p class="txt">기질혈관분획 (SVF) 분리키트 개발 국책과제 선정</p>
                                                <p class="txt">줄기세포 활성화제 화장품 에스포미 런칭</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2014</strong>
                                                <p class="txt">제주도 성형외과 줄기세포 치료센터 구축</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2012</strong>
                                                <p class="txt">㈜엔바이오텍 줄기세포 연구소 설립</p>
                                                <p class="txt">베트남 민간기업 줄기세포 치료센터 구축</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2011</strong>
                                                <p class="txt">중국 줄기세포 배양설비 구축</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2010</strong>
                                                <p class="txt">생명과학장비 해외영업 활성화</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2008</strong>
                                                <p class="txt">김대용 2대 대표이사 취임</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="history-con-wrap clearfix">
                                        <div class="tit-wrap">
                                            <span><img src="../../data/bbsData/16618265469.jpg" alt="1982~2006" /></span>
                                            <div class="tit-box">
                                                <h4>1982~2006</h4>
                                                <p class="txt">국산 생명과학장비 제조의 시작</p>
                                            </div>
                                        </div>
                                        <div class="history-list-wrap">
                                            <div class="history-item">
                                                <strong class="year">2006</strong>
                                                <p class="txt">국무총리 표창 수상</p>
                                                <p class="txt">부천시장 우수제품 대상 수상</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2005</strong>
                                                <p class="txt">벤처기업 인증 및 ISO9001 인증</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2004</strong>
                                                <p class="txt">자체 브랜드 수출 시작</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2003</strong>
                                                <p class="txt">㈜엔바이오텍 (N-BIOTEK)으로 상호변경</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2002</strong>
                                                <p class="txt">전국 대리점 증설 (11개점)</p>
                                                <p class="txt">OEM 수출 개시</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">2000</strong>
                                                <p class="txt">㈜신비오텍 (n-biotec) 설립</p>
                                                <p class="txt">전국 대리점 구축 (6개점)</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">1987</strong>
                                                <p class="txt">법인전환 ㈜비전과학 설립</p>
                                            </div>
                                            <div class="history-item">
                                                <strong class="year">1982</strong>
                                                <p class="txt">맨하탄 상사 설립</p>
                                                <p class="txt">1세대 국산 실험장비 개발 (배양기, 진탕배양기, 원심분리기 등)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="history-con-wrap clearfix">
						<div class="tit-wrap">
							<span><img src="https://www.n-biotek.com/images/test/history_img.jpg" alt="1982~2006" /></span>
							<div class="tit-box">
								<h4>2008~2021</h4>
								<p class="txt">Global Stem Cell Leader, N-BIOTEK Inc.,</p>
							</div>
						</div>
						<div class="history-list-wrap">
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
						</div>
					</div> -->
                                </div>
                            </div>
                            <div class="sub-tab-con certifi-tab-con" id="patent" data-index="03">
                                <div class="area scroll-object" data-scroll="fade-up">
                                    <h3 class="tab-tit big">특허 및 인증</h3>
                                    <p class="tab-txt">각종 국내외 특허 및 인증</p>
                                    <div class="certifi-list-style05">
                                        <div class="certificate-con">
                                            <div class="certificate-list">
                                                <ul class="clearfix popup-gallery">
                                                    <li>
                                                        <a href="../../data/bbsData/16414310059.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414310059.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414310249.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414310249.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414312849.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414312849.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414312909.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414312909.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414312979.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414312979.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414313039.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414313039.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414313109.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414313109.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414313169.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414313169.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414313229.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414313229.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16414313279.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16414313279.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="../../data/bbsData/16601884539.png" title="">
                                                            <div class="certificate-img-thumb">
                                                                <div class="img-con"><span><img src="../../data/bbsData/16601884539.png" alt="인증서" /></span></div>
                                                                <div class="certificate-over-box"><i class="material-icons"></i></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <!-- <li>
										<a href="https://www.n-biotek.com/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="https://www.n-biotek.com/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="https://www.n-biotek.com/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="https://www.n-biotek.com/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="https://www.n-biotek.com/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="https://www.n-biotek.com/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="https://www.n-biotek.com/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="https://www.n-biotek.com/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="https://www.n-biotek.com/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="https://www.n-biotek.com/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="https://www.n-biotek.com/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="https://www.n-biotek.com/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="https://www.n-biotek.com/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="https://www.n-biotek.com/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-tab-con partners-tab-con" id="partners" data-index="04">
                                <div class="area scroll-object" data-scroll="fade-up">
                                    <h3 class="tab-tit big">고객사</h3>
                                    <p class="tab-txt">엔바이오텍의 기술력과 인프라를 통해 생산된 고품질의 생명과학장비들은<br> 국내 다수의 병원, 대학교, 제약업체, 바이오 업체 등에 공급되고 있습니다.</p>
                                    <ul class="partner-list-wrap clearfix">
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412800659.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412800739.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412800829.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412800909.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412800969.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412801059.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412801149.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412801459.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412801599.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412806139.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412801849.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412801959.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412802069.html" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412802149.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412802219.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412802759.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412803239.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412803339.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412803469.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412803549.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412803669.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412803859.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412804179.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412804279.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412804379.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412804529.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412804649.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412804769.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412804919.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412805039.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412805149.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412805239.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412805359.jpg" alt="" /></span></div>
                                        </li>
                                        <li>
                                            <div class="logo-wrap"><span><img src="../../data/bbsData/16412811529.jpg" alt="" /></span></div>
                                        </li>
                                        <!-- <li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_02.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_02.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_01.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_01.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_02.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_01.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="https://www.n-biotek.com/images/test/partners_logo_02.jpg" alt="" /></span>
						</li> -->
                                    </ul>
                                </div>
                                <section id="globalMapCon" class="section scroll-object" data-scroll="fade-up">
                                    <div class="global-area area-box">
                                        <div class="global-map-con">
                                            <img src="/images/main/global_map.png" alt="세계지도" class="global-map-bg" />
                                            <div class="global-nation-box" data-scroll="fade">
                                                <div class="nation-circle on" data-num="1">
                                                    <div class="effect-circle" style="margin-top:-3%; margin-left:-13.1%" title="한국"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-4%; margin-left:-10.2%" title="일본"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-2%; margin-left:-18.2%" title="중국"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <!-- <div class="effect-circle" style="margin-top:4%; margin-left:-18%" title="베트남"><span></span><span></span><span></span><span></span><i></i></div> -->
                                                    <div class="effect-circle" style="margin-top:6.5%; margin-left:-19.4%" title="싱가포르"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:3%; margin-left:-20%" title="태국"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:0.5%; margin-left:-14.9%" title="대만"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:14.5%; margin-left:-11.9%" title="호주"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:19.5%; margin-left:-1.9%" title="뉴질렌드"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <img src="/images/main/global_map_asia.png" alt="Asia" class="pc" />
                                                    <img src="/images/main/global_map_asia_m.png" alt="Asia" class="mobile left" />
                                                </div>
                                                <div class="nation-circle" data-num="2">
                                                    <div class="effect-circle" style="margin-top:-2.2%; margin-left:-28.5%" title="아프가니스탄"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:0.8%; margin-left:-33.5%" title="사우디아라비아"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <!-- <div class="effect-circle mb-no" style="margin-top:0.6%; margin-left:-31%" title="UAE"><span></span><span></span><span></span><span></span><i></i></div> -->
                                                    <div class="effect-circle mb-no" style="margin-top:-2%; margin-left:-31%" title="이란"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-1.8%; margin-left:-35.5%" title="요르단"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:3%; margin-left:-33%" title="예멘"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <img src="/images/main/global_map_mideast.png" alt="Middle East" class="pc" />
                                                    <img src="/images/main/global_map_mideast_m.png" alt="Middle East" class="mobile" />
                                                </div>
                                                <div class="nation-circle" data-num="3">
                                                    <div class="effect-circle" style="margin-top:-4.5%; margin-left:27.9%" title="미국"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-11.5%; margin-left:24.9%" title="캐나다"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:0.5%; margin-left:27.9%" title="멕시코"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <img src="/images/main/global_map_north_america.png" alt="North America" class="pc" />
                                                    <img src="/images/main/global_map_north_america_m.png" alt="North America" class="mobile left" />
                                                </div>
                                                <div class="nation-circle" data-num="4">
                                                    <div class="effect-circle" style="margin-top:15%; margin-left:35.6%" title="칠레"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:6%; margin-left:34.6%" title="콜롬비아"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:7.9%; margin-left:33.6%" title="에콰도르"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:13.9%; margin-left:38.6%" title="파라과이"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:16.9%; margin-left:39%" title="우루과이"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:10%; margin-left:34.5%" title="페루"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <img src="/images/main/global_map_south_america.png" alt="South America" class="pc" />
                                                    <img src="/images/main/global_map_south_america_m.png" alt="South America" class="mobile" />
                                                </div>
                                                <div class="nation-circle" data-num="5">
                                                    <div class="effect-circle" style="margin-top:-9%; margin-left:-39.5%" title="폴란드"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle mb-no" style="margin-top:-8.5%; margin-left:-41.5%" title="독일"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-4.5%; margin-left:-45%" title="스페인"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-5.5%; margin-left:-41%" title="이탈리아"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-12.5%; margin-left:-41.8%" title="노르웨이"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-13%; margin-left:-37.7%" title="핀란드"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle mb-no" style="margin-top:-13.5%; margin-left:-40.3%" title="스웨덴"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <img src="/images/main/global_map_europe.png" alt="Europe" class="pc" />
                                                    <img src="/images/main/global_map_europe_m.png" alt="Europe" class="mobile right" />
                                                </div>
                                                <div class="nation-circle" data-num="6">
                                                    <div class="effect-circle" style="margin-top:-0.3%; margin-left:-37%" title="이집트"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:4.7%; margin-left:-42%" title="나이지리아"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-2.1%; margin-left:-45.5%" title="모로코"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:6.9%; margin-left:-36.5%" title="우간다"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <div class="effect-circle" style="margin-top:-2.8%; margin-left:-41.9%" title="튀니지"><span></span><span></span><span></span><span></span><i></i></div>
                                                    <img src="/images/main/global_map_africa.png" alt="Africa" class="pc" />
                                                    <img src="/images/main/global_map_africa_m.png" alt="Africa" class="mobile right" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="global-country font-roboto">
                                            <div>
                                                <div class="lf-txt">

                                                    <span class="txt-02">세계 64개국</span>
                                                    <em class="txt-01">약 110여개의 대리점</em>
                                                    <span class="txt-03">110</span>
                                                </div>
                                                <div class="rt-txt">
                                                    <ul class="country-list">
                                                        <li data-num="1" class="on clearfix">
                                                            <span class="country">아시아</span>
                                                            <span class="num">15</span>
                                                        </li>
                                                        <li data-num="2" class="clearfix">
                                                            <span class="country">중동</span>
                                                            <span class="num">9</span>
                                                        </li>
                                                        <li data-num="3" class="clearfix">
                                                            <span class="country">북미</span>
                                                            <span class="num">3</span>
                                                        </li>
                                                        <li data-num="4" class="clearfix">
                                                            <span class="country">남미</span>
                                                            <span class="num">6</span>
                                                        </li>
                                                        <li data-num="5" class="clearfix">
                                                            <span class="country">유럽</span>
                                                            <span class="num">26</span>
                                                        </li>
                                                        <li data-num="6" class="clearfix">
                                                            <span class="country">아프리카</span>
                                                            <span class="num">5</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </article>
                    <!-- // -->
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