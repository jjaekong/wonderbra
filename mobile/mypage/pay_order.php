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
                    <li class="active"><i>02</i>주문결제</li>
                    <li><i>03</i>주문완료</li>
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
                                        <dt>배송비</dt>
                                        <dd>무료배송</dd>
                                    </dl>
                                </a>
                                <p class="counter">
                                    <input type="text" class="form-control input-sm">
                                    <button type="button" class="btn btn-default btn-plus">+1</button>
                                    <button type="button" class="btn btn-default btn-minus">-1</button>
                                    <button type="button" class="btn btn-default btn-edit">수정</button>
                                </p>
                                <p class="btns">
                                    <button type="button" class="btn btn-default btn-wish">관심상품</button>
                                    <button type="button" class="btn btn-default btn-delete">삭제</button>
                                </p>
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
                                        <dt>배송비</dt>
                                        <dd>무료배송</dd>
                                    </dl>
                                </a>
                                <p class="counter">
                                    <input type="text" class="form-control input-sm">
                                    <button type="button" class="btn btn-default btn-plus">+1</button>
                                    <button type="button" class="btn btn-default btn-minus">-1</button>
                                    <button type="button" class="btn btn-default btn-edit">수정</button>
                                </p>
                                <p class="btns">
                                    <button type="button" class="btn btn-default btn-wish">관심상품</button>
                                    <button type="button" class="btn btn-default btn-delete">삭제</button>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="total">
                    <p>총 구매금액  :  169,000원 - 그룹할인 25,350원 = <strong>143,650원</strong> (적립금 1,690원)</p>
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
                        <tr class="contact">
                            <th>연락처</th>
                            <td>
                                <label><input type="text" class="form-control input-sm"></label> -
                                <label><input type="text" class="form-control input-sm"></label> -
                                <label><input type="text" class="form-control input-sm"></label>
                            </td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td><label><input type="email" class="form-control input-sm"></label></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="cart-section">
                <header>
                    <h4>배송정보 입력</h4>
                    <label><input type="checkbox"> 주문고객 정보와 동일합니다</label>
                </header>
                <table class="table">
                    <colgroup>
                        <col style="width:80px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>받으시는 분</th>
                            <td><label><input type="text" class="form-control input-sm"></label></td>
                        </tr>
                        <tr class="contact">
                            <th>연락처1</th>
                            <td>
                                <label><input type="text" class="form-control input-sm"></label> -
                                <label><input type="text" class="form-control input-sm"></label> -
                                <label><input type="text" class="form-control input-sm"></label>
                            </td>
                        </tr>
                        <tr class="contact">
                            <th>연락처2</th>
                            <td>
                                <label><input type="text" class="form-control input-sm"></label> -
                                <label><input type="text" class="form-control input-sm"></label> -
                                <label><input type="text" class="form-control input-sm"></label>
                            </td>
                        </tr>
                        <tr class="addr">
                            <th>배송지 주소</th>
                            <td>
                                <p class="type">
                                    <label><input type="radio"> 자택</label>
                                    <label><input type="radio"> 최근 배송지</label>
                                    <label><input type="radio"> 신규 배송지</label>
                                </p>
                                <p class="zipcode">
                                    <label><input type="text" class="form-control input-sm"></label>
                                    <button type="button" class="btn btn-default btn-zipcode">우편번호 검색</button>
                                </p>
                                <p class="default">
                                    <label><input type="text" class="form-control input-sm"></label>
                                </p>
                                <p class="details">
                                    <label><input type="text" class="form-control input-sm"></label>
                                </p>
                            </td>
                        </tr>
                        <tr class="message">
                            <th>주문메세지</th>
                            <td>
                                <textarea cols="100" rows="10" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr class="message">
                            <th>택배사 요청 메세지</th>
                            <td>
                                <textarea cols="100" rows="10" class="form-control"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="cart-section">
                <header>
                    <h4>결제금액 정보</h4>
                </header>
                <table class="table">
                    <colgroup>
                        <col style="width:80px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr class="point">
                            <th>적립금사용</th>
                            <td>
                                <p>
                                    <label><input type="text" class="form-control input-sm"> 원</label>
                                </p>
                                <p>
                                    <label><input type="text" class="form-control input-sm"> 원(사용가능 적립금)</label>
                                </p>
                            </td>
                        </tr>
                        <tr class="coupon">
                            <th>쿠폰사용</th>
                            <td>
                                <p>
                                    <label><input type="text" class="form-control input-sm"></label>
                                    <button type="button" class="btn btn-default btn-coupon" data-toggle="modal" data-target="#coupon">쿠폰 적용</button>
                                </p>
                                <p>
                                    보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수 있습니다.
                                </p>
                                <p>
                                    결제실패시에는 <i>1:1문의</i> 혹은 고객센터 <i>1544-6101</i>에 연락주시면 처리해드리겠습니다
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="cart-section total">
                <header>
                    <h4>총 결제금액</h4>
                </header>
                <dl>
                    <dt>결제금액</dt>
                    <dd>169,000원 - 그룹할인 25,350원 = <strong>143,650원</strong> (적립금 1,690원)</dd>
                </dl>
                <p>※ 쿠폰 할인이 적용된 최종 금액은 결제하기 버튼 클릭후 결제 팝업창에서 표시됩니다.</p>
            </section>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-default btn-cancel">취소하기</a>
                    <button type="button" class="btn btn-default btn-submit">결제하기</button>
                </p>
            </div>
        </div>
    </main>
    <div id="coupon" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="coupon-modal-title">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h4 id="coupon-modal-title" class="modal-title">쿠폰조회 및 적용</h4>
                        <p>할인율(%) 쿠폰은 해당되는 상품별로 할인내역이 표시됩니다.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="coupon-list">
                        <h4 class="title">보유 쿠폰 내역</h4>
                        <table class="table">
                            <colgroup>
                                <col style="width: 100px;">
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>쿠폰번호</th>
                                    <th>쿠폰정보</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="number"><label><input type="radio"> 102310321</label></td>
                                    <td class="details">
                                        <dl>
                                            <dt>쿠폰적용상품</dt>
                                            <dd>전상품</dd>
                                            <dt>사용가능금액</dt>
                                            <dd>50,000원이상</dd>
                                            <dt>사용범위</dt>
                                            <dd>웹+모바일</dd>
                                            <dt>할인/적립율</dt>
                                            <dd>할인액 3,000원</dd>
                                            <dt>사용기간</dt>
                                            <dd>2016.02.02 ~ 2017.02.01</dd>
                                        </dl>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="total">
                            <p>총 구매금액  :  169,000원 - 그룹할인 25,350원 = <strong>143,650원</strong> (적립금 1,690원)</p>
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="button" class="btn btn-default btn-cancel" data-dismiss="modal">취소</button>
                                <button type="button" class="btn btn-default btn-confirm">확인</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>