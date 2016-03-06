<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage coupon">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">할인쿠폰 내역</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#">주문내역/배송조회</a></li>
                    <li role="presentation"><a href="#">취소/교환/환불 조회</a></li>
                    <li role="presentation"><a href="#">적립금 내역</a></li>
                    <li role="presentation" class="active"><a href="#">할인쿠폰 내역</a></li>
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
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-coupon"><img src="/design/wonderbra/images/sub/ico_plus_circle.gif" alt=""> 쿠폰등록</a>
                    </p>
                </div>
                <table class="table">
                    <colgroup>
                        <col width="100">
                        <col>
                        <col width="150">
                        <col width="150">
                        <col width="150">
                        <col width="200">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>쿠폰번호</th>
                            <th>쿠폰이름</th>
                            <th>쿠폰전용품목</th>
                            <th>사용가능금액</th>
                            <th>할인액(률)/적립액(률)</th>
                            <th>사용기간</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14312890832</td>
                            <td class="title">회원가입 감사쿠폰(엠코르셋 상품 전용)</td>
                            <td>(관)엠코르셋(주)</td>
                            <td>50,000원이상</td>
                            <td>할인액 10,000원</td>
                            <td><time>2016-02-18</time> ~ <time>2016-03-19</time></td>
                        </tr>
                        <tr>
                            <td>14312890832</td>
                            <td class="title">회원가입 감사쿠폰(엠코르셋 상품 전용)</td>
                            <td>(관)엠코르셋(주)</td>
                            <td>50,000원이상</td>
                            <td>할인액 10,000원</td>
                            <td><time>2016-02-18</time> ~ <time>2016-03-19</time></td>
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
                <h5>주문 할인쿠폰 적용방법</h5>
                <p>주문서 쿠폰 선택에서 고객님이 보유하신 [쿠폰번호]를 선택하시면 할인금액(또는 적립금액)이 나타납니다.<br>(정률할인(적립)의 경우, 할인율(적립률)이 나타납니다.)</p>
                <h5>쿠폰 사용시 유의사항</h5>
                <ul>
                    <li>쿠폰마다 사용 가능 금액과 사용기한이 정해져 있으며, 1개 주문서에 1개의 쿠폰만을 사용하실 수 있습니다.</li>
                    <li>쿠폰을 사용한 주문 후 반품/환불/취소의 경우 한번 사용하신 쿠폰은 다시 사용하실 수 없습니다.</li>
                    <li>쿠폰 적용 품목 및 카테고리가 제한된 경우 해당 품목 또는 카테고리에서만 쿠폰을 사용하실 수 있습니다.</li>
                    <li>할인/적립 쿠폰은 적립금할인 등을 제외한 실제 결제금액에 적용됩니다.</li>
                    <li>모바일 아이콘 표시 쿠폰은 모바일에서만 사용이 가능합니다.</li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>