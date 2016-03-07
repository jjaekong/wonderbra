<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage cart step3">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">장바구니</h2>
            </div>
        </div>
        <div class="container">
            <ol class="steps step3">
                <li><i>STEP<br>01</i>장바구니</li>
                <li><i>STEP<br>02</i>주문결제</li>
                <li><i>STEP<br>03</i>주문완료</li>
            </ol>
            <div class="cart-list">
                <table class="table">
                    <colgroup>
                        <col width="100">
                        <col>
                        <col width="100">
                        <col width="100">
                        <col width="100">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>사진</th>
                            <th>상품명</th>
                            <th>수량</th>
                            <th>적립금</th>
                            <th>가격</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="/design/wonderbra/images/dummy/img_qna_thumb.jpg" alt=""></td>
                            <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T
[사이즈 : 75B(90) 1개]</a></td>
                            <td>1개</td>
                            <td>590 won</td>
                            <td>59,900 won</td>
                        </tr>
                        <tr>
                            <td><img src="/design/wonderbra/images/dummy/img_qna_thumb.jpg" alt=""></td>
                            <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T
[사이즈 : 75B(90) 1개]</a></td>
                            <td>1개</td>
                            <td>590 won</td>
                            <td>59,900 won</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                <dl>
                                    <dt>결제금액</dt>
                                    <dd>59,900 won + 배송료 0 won = <strong>59,900 won (배송 후 590 won 적립)</strong> (적립금 590won)</dd>
                                </dl>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-ordered">주문/배송내역</a>
                    </p>
                </div>
            </div>
            <div class="orderer">
                <h4>주문자 정보확인</h4>
                <table class="table">
                    <colgroup>
                        <col width="175">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>주문자</th>
                            <td>테스트</td>
                        </tr>
                        <tr>
                            <th>전화번호</th>
                            <td>010-1234-4567</td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td>test@test.co.kr</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="delivery">
                <h4>배송정보 입력</h4>
                <table class="table">
                    <colgroup>
                        <col width="175">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>받으시는 분</th>
                            <td>TEST</td>
                        </tr>
                        <tr>
                            <th>전화번호</th>
                            <td>010-1234-4567</td>
                        </tr>
                        <tr>
                            <th>휴대폰번호</th>
                            <td>010-1234-4567</td>
                        </tr>
                        <tr class="addr">
                            <th>배송지 주소</th>
                            <td>서울 서초구 양재동 120-1번지</td>
                        </tr>
                        <tr class="note">
                            <th>주문메시지</th>
                            <td></td>
                        </tr>
                        <tr class="ask">
                            <th>택배사 요청메시지</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="payinfo">
                <h4>결제정보</h4>
                <table class="table">
                    <colgroup>
                        <col width="175">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>상세정보</th>
                            <td>무통장 입급 : <strong>우리은행 (가상)61650219418043 테스트 7일 이내</strong>  (입금확인 후 배송이 됩니다.)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="paydone">
                <h3>테스트님의 주문이 완료되었습니다.</h3>
                <p>
                    귀하의 주문확인 번호는 <strong>201602281181102-45825885632</strong>입니다. 귀하의 제품 구입에 따른 적립금 590 won은 배송과 함께 바로 적립됩니다.<br>
                    입금방법이 무통장입금의 경우 계좌번호를 메모하세요. 입금 확인 후 상품을 준비하여 배송해 드리겠습니다.
                </p>
                <div class="btn-area">
                    <p>
                        <button class="btn btn-default btn-print" type="button">프린트하기</button>
                        <button class="btn btn-default btn-submit" type="button">주문확인</button>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>