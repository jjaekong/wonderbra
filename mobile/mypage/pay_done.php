<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage cart">
        <div class="page-header">
            <h2 class="title">장바구니</h2>
        </div>
        <div class="container">
            <div class="order-steps">
                <ol>
                    <li><i>01</i>장바구니</li>
                    <li><i>02</i>주문결제</li>
                    <li class="active"><i>03</i>주문완료</li>
                </ol>
            </div>
            <div class="cart-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>사진</th>
                            <th>상품</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="figure"><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="details">
                                <a class="summary" href="#">
                                    <strong>원더브라 Sexy Wirefree 베이지 2종세트 WW2D51_T</strong>
                                    <dl>
                                        <dt>상품가</dt>
                                        <dd>39,000원</dd>
                                        <dt>적립금</dt>
                                        <dd>390원</dd>
                                        <dt>수량</dt>
                                        <dd>1</dd>
                                    </dl>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="figure"><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="details">
                                <a class="summary" href="#">
                                    <strong>원더브라 Sexy Wirefree 베이지 2종세트 WW2D51_T</strong>
                                    <dl>
                                        <dt>상품가</dt>
                                        <dd>39,000원</dd>
                                        <dt>적립금</dt>
                                        <dd>390원</dd>
                                        <dt>수량</dt>
                                        <dd>1</dd>
                                    </dl>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="total">
                    <p>결제금액  :  143,650원 + 배송료 0원 = <strong>59,900원 (배송 후 1,690원 적립)</strong> (적립금 1,690원)</p>
                </div>
            </div>
            <section class="cart-section">
                <header>
                    <h4>주문자 정보확인</h4>
                </header>
                <table class="table">
                    <colgroup>
                        <col style="width:80px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>주문자</th>
                            <td>테스트</td>
                        </tr>
                        <tr>
                            <th>연락처</th>
                            <td>010-1234-4323</td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td>test@mkdesign.co.kr</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="cart-section">
                <header>
                    <h4>배송정보 입력</h4>
                </header>
                <table class="table">
                    <colgroup>
                        <col style="width:80px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>받으시는 분</th>
                            <td>테스트</td>
                        </tr>
                        <tr>
                            <th>연락처1</th>
                            <td>010-1234-5678</td>
                        </tr>
                        <tr>
                            <th>연락처2</th>
                            <td>010-1234-5678</td>
                        </tr>
                        <tr>
                            <th>배송지 주소</th>
                            <td>서울 서초구 양재천로13길 13 2층 무브먼트케이그룹</td>
                        </tr>
                        <tr>
                            <th>주문메세지</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>택배사 요청 메세지</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="cart-section">
                <header>
                    <h4>결제정보</h4>
                </header>
                <table class="table">
                    <colgroup>
                        <col style="width:80px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>상세정보</th>
                            <td>
                                무통장 입금 : 국민은행 [가상]63659013977665 테스트
                                2일 이내 (입금확인후 배송이 됩니다.)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="cart-section done">
                <strong>테스트님의 주문이 완료되었습니다.</strong>
                <p>
                    귀하의 주문확인 번호는 <i>201602281181102-45825885632</i>입니다.<br>
                    귀하의 제품 구입에 따른 적립금 590원은 배송과 함께 바로 적립됩니다.<br>
                    입금방법이 무통장입금의 경우 계좌번호를 메모하세요.<br>
                    입금 확인 후 상품을 준비하여 배송해 드리겠습니다.
                </p>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-confirm">주문확인</a>
                    </p>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>