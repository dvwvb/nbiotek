<header id="header" class="top-fixed-object">
    <!-- .top-fixed가 붙는 object에 top-fixed-object 클래스 추가  -->
    <div class="gnb-overlay-bg"></div>
    <div id="headerInnerWrap">
        <!-- ****************** 헤더상단 ********************** -->
        <div class="area-box">
            <div id="headerInner" class="clearfix">
                <h1 class="logo"><a href="/kr/index.php"><em class="blind">메인으로</em><img src="/images/common/logo.svg" alt="N-BIOTEK" /></a></h1>
                <div class="header-util-box">
                    <!-- 사이트맵 버튼 ( 기본 ) -->
                    <a href="/kr/etc/sitemap.html" class="sitemap-line-btn cm-modal-open-btn header-cm-link" title="사이트맵 열기">Sitemap</a>
                    <!-- 사이트맵 style 02 (toggle기능 사용안하면 date-event 삭제) -->

                    <!-- 외국어선택 -->
                    <div class="header-lang cm-drop-menu-box-JS" data-drop-event="click">
                        <button class="lang-open-btn cm-drop-open-btn-JS"><strong>KOR</strong><span class="arrow"><i class="xi-angle-down-min"></i></span></button>
                        <ul id="headerLangList" class="cm-drop-list-JS">
                            <li><a href="../../en/index-2.html">ENG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****************** GNB ********************** -->
        <!-- GNB PC  -->
        <nav id="gnb" class="total-menu">
            <h2 class="blind">주메뉴</h2>
            <!-- 
                전체메뉴 : class="total-menu"
				각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
            <div id="gnbBg"></div>
            <ul class="clearfix">
                <li class="gnb1">
                    <a href="/kr/index.php"><span>Home</span></a>
                    <div class="gnb-2dep">
                        <ul>
                            <li><a href="/kr/index.php"><span>Home</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="gnb2">
                    <a href="/kr/nbiotek/about.php"><span>N-BIOTEK</span></a>
                    <div class="gnb-2dep">
                        <ul>
                            <li><a href="/kr/nbiotek/about.php?menu=about" data-move-id="#about" data-index="01"><span>기업 소개</span></a></li>
                            <li><a href="/kr/nbiotek/about.php?menu=history" data-move-id="#history" data-index="02"><span>연혁</span></a></li>
                            <li><a href="/kr/nbiotek/about.php?menu=patent" data-move-id="#patent" data-index="03"><span>특허 및 인증</span></a></li>
                            <li><a href="/kr/nbiotek/about.php?menu=partners" data-move-id="#partners" data-index="04"><span>고객사</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="gnb3">
                    <a href="/kr/equipment/equipment_intro.html"><span>실험 장비</span></a>
                    <div class="gnb-2dep">
                        <ul>
                            <li><a href="/kr/equipment/equipment_liste023.html?part_idx=1"><span>CO<sub>2</sub> 배양기</span></a></li>
                            <li><a href="/kr/equipment/equipment_list0040.html?part_idx=2"><span>진탕배양기</span></a></li>
                            <li><a href="/kr/equipment/equipment_listd941.html?part_idx=3"><span>쉐이커 및 롤러 장치</span></a></li>
                            <li><a href="/kr/equipment/equipment_list0988.html?part_idx=4"><span>항온수조 및 히팅블럭</span></a></li>
                            <li><a href="/kr/equipment/equipment_listc6df.html?part_idx=5"><span>농축기</span></a></li>
                            <li><a href="/kr/equipment/equipment_list13eb.html?part_idx=6"><span>건조기 및 배양기</span></a></li>
                            <li><a href="/kr/equipment/equipment_list2613.html?part_idx=7"><span>고압증기 멸균기</span></a></li>
                            <li><a href="/kr/equipment/equipment_list9d56.html?part_idx=8"><span>클린벤치</span></a></li>
                            <li><a href="/kr/equipment/equipment_list63a6.html?part_idx=9"><span>줄기세포 분리 패키지</span></a></li>
                            <li><a href="/kr/equipment/validation.html"><span>밸리데이션</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="gnb4">
                    <a href="/kr/stemcell/about.php"><span>줄기세포</span></a>
                    <div class="gnb-2dep">
                        <ul>
                            <li><a href="/kr/stemcell/about.php"><span>줄기세포란?</span></a></li>
                            <li><a href="/kr/stemcell/rnd.php"><span>R&D 센터</span></a></li>
                            <li><a href="/kr/stemcell/business/intro.php"><span>줄기세포 사업</span></a></li>
                            <li><a href="/kr/stemcell/issca.php"><span>ISSCA</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="gnb5">
                    <a href="/kr/customer/notice.html"><span>CS Center</span></a>
                    <div class="gnb-2dep">
                        <ul>
                            <li><a href="/kr/customer/notice.html"><span>공지사항</span></a></li>
                            <li><a href="/kr/customer/news.html"><span>News</span></a></li>
                            <li><a href="/kr/customer/inquiry.html"><span>문의</span></a></li>
                            <li><a href="/kr/customer/branches.html"><span>국내 대리점</span></a></li>
                            <li><a href="/kr/customer/contact.html"><span>연락처 및 위치</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- GNB Mobile -->
    <button class="nav-open-btn" title="네비게이션 열기">
        <i class="xi-apps open"></i>
        <i class="xi-close close"></i>
    </button>
    <div class="gnb-overlay-bg-m"></div>
    <nav id="gnbM" class="gnb-style-basic">
        <div class="gnb-navigation-wrapper">
            <div class="gnb-navigation-inner">
                <ul id="navigation" data-menu-clone="false">
                    <li class="gnb1">
                        <a href="/kr/index.php"><span>Home</span></a>
                    </li>
                    <li class="gnb2">
                        <a href="/kr/nbiotek/about.html"><span>N-BIOTEK</span></a>
                        <div class="gnb-2dep">
                            <ul>
                                <li><a href="/kr/nbiotek/about8a76.html?menu=about" data-move-id="#about" data-index="01"><span>기업 소개</span></a></li>
                                <li><a href="/kr/nbiotek/aboutf052.html?menu=history" data-move-id="#history" data-index="02"><span>연혁</span></a></li>
                                <li><a href="/kr/nbiotek/aboutace2.html?menu=patent" data-move-id="#patent" data-index="03"><span>특허 및 인증</span></a></li>
                                <li><a href="/kr/nbiotek/about4fcb.html?menu=partners" data-move-id="#partners" data-index="04"><span>고객사</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb3">
                        <a href="#"><span>실험 장비</span></a>
                        <div class="gnb-2dep">
                            <ul>
                                <li><a href="/kr/equipment/equipment_liste023.html?part_idx=1"><span>CO<sub>2</sub> 배양기</span></a></li>
                                <li><a href="/kr/equipment/equipment_list0040.html?part_idx=2"><span>진탕배양기</span></a></li>
                                <li><a href="/kr/equipment/equipment_listd941.html?part_idx=3"><span>쉐이커 및 롤러 장치</span></a></li>
                                <li><a href="/kr/equipment/equipment_list0988.html?part_idx=4"><span>항온수조 및 히팅블럭</span></a></li>
                                <li><a href="/kr/equipment/equipment_listc6df.html?part_idx=5"><span>농축기</span></a></li>
                                <li><a href="/kr/equipment/equipment_list13eb.html?part_idx=6"><span>건조기 및 배양기</span></a></li>
                                <li><a href="/kr/equipment/equipment_list2613.html?part_idx=7"><span>고압증기 멸균기</span></a></li>
                                <li><a href="/kr/equipment/equipment_list9d56.html?part_idx=8"><span>클린벤치</span></a></li>
                                <li><a href="/kr/equipment/equipment_list63a6.html?part_idx=9"><span>줄기세포 분리 패키지</span></a></li>
                                <li><a href="/kr/equipment/validation.html"><span>밸리데이션</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb4">
                        <a href="#"><span>줄기세포</span></a>
                        <div class="gnb-2dep">
                            <ul>
                                <li><a href="/kr/stemcell/about.html"><span>줄기세포란?</span></a></li>
                                <li><a href="/kr/stemcell/rnd.html"><span>R&D 센터</span></a></li>
                                <li><a href="/kr/stemcell/business/intro.html"><span>줄기세포 사업</span></a></li>
                                <li><a href="/kr/stemcell/issca.html"><span>ISSCA</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb5">
                        <a href="/kr/customer/notice.html"><span>CS Center</span></a>
                        <div class="gnb-2dep">
                            <ul>
                                <li><a href="/kr/customer/notice.html"><span>공지사항</span></a></li>
                                <li><a href="/kr/customer/news.html"><span>News</span></a></li>
                                <li><a href="/kr/customer/inquiry.html"><span>문의</span></a></li>
                                <li><a href="/kr/customer/branches.html"><span>국내 대리점</span></a></li>
                                <li><a href="/kr/customer/contact.html"><span>연락처 및 위치</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="gnb6">
                        <a href="#" target="_blank"><span>INTRANET</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>