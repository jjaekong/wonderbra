<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub popup">
    <main id="content" tabindex="-1" class="mypage coupon">
        <div class="page-header">
            <div>
                <h2 class="page-title">쿠폰조회 및 적용</h2>
                <p>할인율(%) 쿠폰은 해당되는 상품별로 할인내역이 표시됩니다.</p>
            </div>
        </div>
        <div class="coupon-list">
            <div class="btn-area">
                <p>
                    <button class="btn btn-default btn-coupon" type="button"><img src="/design/wonderbra/images/sub/ico_plus_circle.gif" alt=""> 쿠폰 등록</button>
                </p>
            </div>
            <h4>보유 쿠폰 내역</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>쿠폰번호</th>
                        <th>쿠폰이름</th>
                        <th>쿠폰전용품목</th>
                        <th>사용가능금액</th>
                        <th>할인액(률)</th>
                        <th>적립액(률)</th>
                        <th>사용기간</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15165824</td>
                        <td>회원가입 감사쿠폰(엠코르셋 상품 전용)</td>
                        <td>(관)엠코르셋(주)</td>
                        <td>50,000원이상</td>
                        <td>10,000원</td>
                        <td>10,000원</td>
                        <td>2016-02-18 ~ 2016-03-19</td>
                    </tr>
                    <tr>
                        <td>15165824</td>
                        <td>새해 감사쿠폰</td>
                        <td>(관)엠코르셋(주)</td>
                        <td>50,000원이상</td>
                        <td>10,000원</td>
                        <td>10,000원</td>
                        <td>2016-02-18 ~ 2016-03-19</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="coupon-select">
            <h4>사용 쿠폰 선택</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">상품명</th>
                        <th>가격</th>
                        <th>쿠폰선택</th>
                        <th>할인액(률)</th>
                        <th>적립액(률)</th>
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
                        <td>34,064원</td>
                        <td>
                            <select class="form-control">
                                <option value="">15165824</option>
                                <option value="">15165824</option>
                                <option value="">15165824</option>
                            </select>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p class="total">총 구매금액 : 98,800원(상품구매금액) 10,000원(쿠폰할인)  = <strong>88,800원</strong></p>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-default btn-cancel">주문취소</a>
                    <button type="button" class="btn btn-default btn-submit">확인</button>
                </p>
            </div>
        </div>
        <div class="notify">
            <h5>주문시 할인쿠폰 적용 방법</h5>
            <ol>
                <li>1단계. 쿠폰선택에서 고객님이 보유하신 쿠폰번호를 선택하시면 할인금액(또는 적립금)이 나타납니다. (정률할인(적립)의 경우), 할인율(적립율)이 나타납니다.)</li>
                <li>2단계. 확인버튼을 클릭하시면, 쿠폰결제 적용이 완료됩니다.</li>
            </ol>
        </div>
        <div class="notify">
            <h5>쿠폰 사용시 유의사항</h5>
            <ol>
                <li>1. 각 쿠폰마다 사용가능 금액이 정해져 있습니다.</li>
                <li>2. 쿠폰은 한 주문에 한해서 사용이 가능합니다.</li>
                <li>3. 각 쿠폰마다 사용기한이 정해져 있습니다.</li>
                <li>4. 주문 후 반품/환불/취소의 경우 한번 사용하신 할인 쿠폰을 다시 사용하실 수 없습니다.</li>
                <li>5. 쿠폰 적용품목이 한정된 쿠폰은 해당 품목에서만 사용가능 합니다.</li>
                <li>6. 할인/적립(%) 쿠폰은 적립금할인 등을 제외한 실제 결제금액에 적용됩니다.</li>
                <li>7. 해당 상품에 대한 쿠폰은 해당 상품만 구매시 적용이 가능합니다.</li>
                <li>8. 모바일 전용 쿠폰은 노출되지 않습니다.</li>
            </ol>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>