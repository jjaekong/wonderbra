<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage cancel">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">취소/교환/환불 조회</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#">주문내역/배송조회</a></li>
                    <li role="presentation" class="active"><a href="#">취소/교환/환불 조회</a></li>
                    <li role="presentation"><a href="#">적립금 내역</a></li>
                    <li role="presentation"><a href="#">할인쿠폰 내역</a></li>
                    <li role="presentation"><a href="#">B-money 내역</a></li>
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
                        <col width="100">
                        <col width="150">
                        <col>
                        <col width="100">
                        <col width="100">
                        <col width="100">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>주문일자</th>
                            <th>상품명</th>
                            <th>결제금액</th>
                            <th>주문상세</th>
                            <th>배송현황</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><time>2016.02.19</time></td>
                            <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T</a></td>
                            <td>59,000 won</td>
                            <td><a class="btn btn-default btn-search" href="#">조회</a></td>
                            <td><a class="btn btn-default btn-search" href="#">조회</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><time>2016.02.19</time></td>
                            <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T</a></td>
                            <td>59,000 won</td>
                            <td><a class="btn btn-default btn-search" href="#">조회</a></td>
                            <td><a class="btn btn-default btn-search" href="#">조회</a></td>
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
                    <li><span class="btn btn-default">구매확정</span> 버튼을 통해 구매 확정된 상품에 대해서는 <span class="btn btn-default">후기쓰기</span> 버튼으로 제품의 구매 후기를 작성하실수 있으며 해당 상품에 대한 <i>적립금이 바로 증정</i>됩니다.</li>
                    <li><i>구매확정 후에는</i> 판매자에게 정산을 지급함에 따라 <i>교환/환불이 불가</i>하며, 문제 발생시 판매자와 구매자가 직접 처리하셔야 합니다.</li>
                    <li>별도 '구매확정'을 하지 않으실 경우, 배송업체에 따라 상품 <i>배송완료일로부터 7일 이후에 자동으로 구매확정</i>되며 해당 상품에 대한 <i>적립금이 증정</i>됩니다.</li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>