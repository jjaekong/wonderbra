<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage cart step2">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">장바구니</h2>
            </div>
        </div>
        <div class="container">
            <ol class="steps step2">
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
                                    <dd>59,900 won = <strong>59,900 won</strong> (적립금 590won)</dd>
                                </dl>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <form action="#" method="post">
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
                                <td>
                                    <label><input type="text" class="form-control"></label>
                                </td>
                            </tr>
                            <tr>
                                <th>이메일</th>
                                <td>
                                    <label><input type="email" class="form-control"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="delivery">
                    <h4>배송정보 입력 <label><input type="checkbox"> 주문고객 정보와 동일합니다.</label></h4>
                    <table class="table">
                        <colgroup>
                            <col width="175">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>받으시는 분</th>
                                <td>
                                    <label><input type="text" class="form-control"></label>
                                </td>
                            </tr>
                            <tr>
                                <th>전화번호</th>
                                <td>
                                    <label><input type="text" class="form-control"></label>
                                </td>
                            </tr>
                            <tr>
                                <th>휴대폰번호</th>
                                <td>
                                    <label for=""><input type="text" class="form-control"></label>
                                </td>
                            </tr>
                            <tr class="addr">
                                <th>배송지 주소</th>
                                <td>
                                    <p class="type">
                                        <label>
                                            <input type="radio"> 자택
                                        </label>
                                        <label>
                                            <input type="radio"> 회사
                                        </label>
                                        <label>
                                            <input type="radio"> 최근 배송지
                                        </label>
                                        <label>
                                            <input type="radio"> 신규 배송지
                                        </label>
                                    </p>
                                    <p class="zipcode">
                                        <label for=""><input type="text" class="form-control"></label><span>-</span>
                                        <label for=""><input type="text" class="form-control"></label>
                                        <button type="button" class="btn btn-default btn-zipcode">우편번호 검색</button>
                                    </p>
                                    <p class="default">
                                        <label for=""><input type="text" class="form-control"></label>
                                    </p>
                                    <p class="details">
                                        <label for=""><input type="text" class="form-control"></label>
                                    </p>
                                </td>
                            </tr>
                            <tr class="note">
                                <th>주문메시지</th>
                                <td>
                                    <label for=""><input type="text" class="form-control"></label>
                                </td>
                            </tr>
                            <tr class="ask">
                                <th>택배사 요청메시지</th>
                                <td>
                                    <label for=""><input type="text" class="form-control"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="coupon">
                    <h4>결제금액 정보</h4>
                    <table class="table">
                        <colgroup>
                            <col width="175">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr class="use">
                                <th>쿠폰사용</th>
                                <td>
                                    <label><input type="text" class="form-control"></label>
                                    <button type="button" class="btn btn-default btn-coupon"><img src="/design/wonderbra/images/sub/ico_plus_circle.gif" alt=""> 쿠폰 등록</button>
                                    <em>보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수 있습니다.</em>
                                    <p>
                                        결제실패시에는 <strong>1:1문의</strong> 혹은 고객센터 <strong>1544-6101</strong>에 연락주시면 처리해드리겠습니다)
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="total">
                    <h4>총 결제금액</h4>
                    <p>결제금액 : 59,900 won = <strong>최종 결제금액 :  59,900 won</strong> (적립금 590won)</p>
                    <p><em>※ 쿠폰 할인이 적용된 최종 금액은 결제하기 버튼 클릭후 결제 팝업창에서 표시됩니다.</em></p>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-cancel">취소하기</a>
                        <button class="btn btn-default btn-submit" type="submit">결제하기</button>
                    </p>
                </div>
            </form>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>