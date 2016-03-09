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
                    <col style="width: 175px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th>주문번호</th>
                        <td>주문일자</td>
                    </tr>
                    <tr>
                        <th>주문일자</th>
                        <td>2015.02.01</td>
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
                    <col style="width: 175px">
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
        <div class="order-list">
            <h4>주문상품정보</h4>
            <table class="table">
                <colgroup>
                    <col>
                    <col>
                    <col style="width: 100px;">
                    <col style="width: 50px;">
                    <col style="width: 100px;">
                    <col style="width: 70px;">
                    <col style="width: 80px;">
                    <col style="width: 100px;">
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>주문상품정보</th>
                        <th>상품별주문정보</th>
                        <th>수량</th>
                        <th>가격</th>
                        <th>적립금</th>
                        <th>처리상태</th>
                        <th>배송번호</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/design/wonderbra/images/dummy/img_review_1.gif" alt=""></td>
                        <td class="title">
                            <a href="#">[Wonderbra] 원더브라 Sexy Wire Free 
베이지 브라팬티 WW4H22_T</a>
                            <p class="option">[사이즈 : 75B(90) 1개]</p>
                        </td>
                        <td>20160221181102-45825225632_[1]</td>
                        <td>1</td>
                        <td>59,000 won</td>
                        <td>590</td>
                        <td>결제대기</td>
                        <td>S-16022118-325839641-00</td>
                    </tr>
                </tbody>
            </table>
            <p class="total"><strong>59,900(상품구매금액) (할인/추가금액) = 59,900원</strong></p>
        </div>
        <div class="payinfo">
            <h4>결제정보</h4>
            <table class="table">
                <colgroup>
                    <col style="width: 175px">
                    <col style="width: 175px">
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
                        <td>사용한 예치금</td>
                        <td>원</td>
                        <td></td>
                    </tr>
                    <tr class="paytype">
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