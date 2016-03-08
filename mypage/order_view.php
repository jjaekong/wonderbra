<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub popup">
    <main id="content" tabindex="-1" class="mypage order">
        <div class="page-header">
            <div>
                <h2 class="page-title">주문상세내역</h2>
                <p><strong>[TEST]</strong> 님께서 2016년 02월 21일에 주문하신 내역입니다.</p>
            </div>
        </div>
        <div class="category">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="#">주문상세내역</a></li>
                <li role="presentation"><a href="#">상품후기등록</a></li>
            </ul>
        </div>
        <div class="orderer">
            <h4>주문자 정보</h4>
            <table class="table">
                <colgroup>
                    <col width="175">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th>주문번호</th>
                        <td>주문일자</td>
                    </tr>
                    <tr>
                        <th>주문일자</th>
                        <td><time>2015.02.01</time></td>
                    </tr>
                    <tr>
                        <th>주문자</th>
                        <td>테스트</td>
                    </tr>
                    <tr>
                        <th>주문서 입금현황</th>
                        <td>미입금</td>
                    </tr>
                    <tr>
                        <th>주문 메모</th>
                        <td>미입금</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="delivery">
            <h4>배송지 정보</h4>
            <table class="table">
                <colgroup>
                    <col width="175">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th>배송번호</th>
                        <td>S - 15122410-086878364-00</td>
                    </tr>
                    <tr>
                        <th>송장번호</th>
                        <td>우채국 택배 2319-4812-32233321</td>
                    </tr>
                    <tr>
                        <th>수취인</th>
                        <td>TEST</td>
                    </tr>
                    <tr>
                        <th>연락처</th>
                        <td>123-456-7889</td>
                    </tr>
                    <tr>
                        <th>주소</th>
                        <td>서울 서초구 양재동 120-1 2층</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="payinfo">
            <h4>결제정보</h4>
            <table class="table">
                <colgroup>
                    <col width="175">
                    <col width="175">
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>결제방법</th>
                        <th>결제금액</th>
                        <th>세부내역</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>사용한 적립금</td>
                        <td>원</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>무통장</td>
                        <td>59,000원</td>
                        <td>우리은행 [가상]61650219418043 김두리</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btn-area">
            <p>
                <a href="#" class="btn btn-default btn-cancel">주문취소</a>
                <button type="button" class="btn btn-default btn-close">닫기</button>
            </p>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>