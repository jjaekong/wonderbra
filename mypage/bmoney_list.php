<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage bmoney">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">B-money 내역</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#">주문내역/배송조회</a></li>
                    <li role="presentation"><a href="#">취소/교환/환불 조회</a></li>
                    <li role="presentation"><a href="#">적립금 내역</a></li>
                    <li role="presentation"><a href="#">할인쿠폰 내역</a></li>
                    <li role="presentation" class="active"><a href="#">B-money 내역</a></li>
                    <li role="presentation"><a href="#">쿠폰등록</a></li>
                    <li role="presentation" class="br"></li>
                    <li role="presentation"><a href="#">구매후기</a></li>
                    <li role="presentation"><a href="#">위시리스트</a></li>
                    <li role="presentation"><a href="#">최근 본 상품목록</a></li>
                    <li role="presentation"><a href="#">상품 Q&amp;A</a></li>
                    <li role="presentation"><a href="#">1:1문의</a></li>
                    <li role="presentation"><a href="#">회원정보수정</a></li>
                    <li role="presentation"><a href="#">회원탈퇴</a></li>
                </ul>
            </div>
            <div class="list">
                <table class="table">
                    <colgroup>
                        <col width="150">
                        <col>
                        <col width="150">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>날짜</th>
                            <th>적립내역</th>
                            <th>적립금</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><time>2016.02.19</time></td>
                            <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T</a></td>
                            <td>59,000 won</td>
                        </tr>
                        <tr>
                            <td><time>2016.02.19</time></td>
                            <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T</a></td>
                            <td>59,000 won</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="이전">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="다음">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="notify">
                <ul>
                    <li>적립된 금액이 0원 이상 누적되었을 때, 사용하실 수 있습니다.</li>
                    <li>결제 시 적립금 사용 여부를 확인할 수 있는 안내문이 나옵니다.</li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>