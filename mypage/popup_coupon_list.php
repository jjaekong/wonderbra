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
            <table class="table">
                <thead>
                    <tr>
                        <th>쿠폰번호</th>
                        <th>쿠폰이름</th>
                        <th>쿠폰전용품목</th>
                        <th>사용가능금액</th>
                        <th>할인액(률)/적립액(률)</th>
                        <th>사용시간</th>
                        <th>사용여부</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15165824</td>
                        <td>회원가입 감사쿠폰(엠코르셋 상품 전용)</td>
                        <td>(관)엠코르셋(주)</td>
                        <td>50,000원이상</td>
                        <td>10,000원</td>
                        <td>2016-02-18 ~2016-03-19</td>
                        <td>사용가능</td>
                    </tr>
                    <tr>
                        <td>15165824</td>
                        <td>새해 감사쿠폰</td>
                        <td>(관)엠코르셋(주)</td>
                        <td>50,000원이상</td>
                        <td>10,000원</td>
                        <td>2016-02-18 ~2016-03-19</td>
                        <td>기간만료</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="coupon-select">
            <header>
                <h4>쿠폰 선택</h4>
                <select class="form-control">
                    <option value="">회원가입 감사쿠폰(엠코르셋 상품 전용)(15165824)</option>
                    <option value="">회원가입 감사쿠폰(엠코르셋 상품 전용)(15165824)</option>
                    <option value="">회원가입 감사쿠폰(엠코르셋 상품 전용)(15165824)</option>
                </select>
            </header>
            <table class="table">
                <thead>
                    <tr>
                        <th>사진</th>
                        <th>상품명</th>
                        <th>판매가격</th>
                        <th>기간할인</th>
                        <th>쿠폰적용</th>
                        <th>쿠폰할인/적립금액</th>
                        <th>결제예정금액</th>
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
                        <td>37,900원</td>
                        <td></td>
                        <td>회원가입 감사쿠폰<br>(엠코르셋 상품 전용)</td>
                        <td>할인 : 3,836원<br>적립 : 0원</td>
                        <td>34,064원</td>
                    </tr>
                </tbody>
            </table>
            <p class="total">총 구매금액 : 98,800원(상품구매금액) 10,000원(쿠폰할인)  = <strong>88,800원</strong></p>
        </div>
        <div class="btn-area">
            <p>
                <a href="#" class="btn btn-default btn-cancel">주문취소</a>
                <button type="button" class="btn btn-default btn-submit">확인</button>
            </p>
        </div>
        <div class="notify">
            <ul>
                <li>예정금액은 순 판매상품 금액에 대한 쿠폰할인 금액이며, 적립/예치금 사용 및 회원그룹 혜택 적용에 따라 최종 결제금액은 변경될 수 있습니다.</li>
                <li>총 상품 결제 예정금액 = ( 전체 상품결제금액 - 쿠폰 할인 금액) 으로 계산되어 쿠폰할인금액 절사할 경우 각 상품별 결제예정금액의 합산금액과 상이할 수 있습니다. </li>
                <li>모바일 전용 쿠폰은 노출되지 않습니다.</li>
            </ul>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>