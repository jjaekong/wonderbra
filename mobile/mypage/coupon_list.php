<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage coupon">
        <div class="page-header">
            <h2 class="title">할인쿠폰 내역</h2>
        </div>
        <div class="container">
            <div class="coupon-list">
                <div class="btn-area">
                    <p>
                        <button type="button" class="btn btn-coupon">쿠폰 등록</button>
                    </p>
                </div>
                <table class="table">
                    <colgroup>
                        <col style="width:80px">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>내역</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2318021</td>
                            <td class="details">
                                <p>회원가입 감사쿠폰(50,000원)</p>
                                <dl>
                                    <dt>할인액/적립액</dt>
                                    <dd>5000원</dd>
                                    <dt>사용기간</dt>
                                    <dd>2016.01.02~2017.01.01</dd>
                                    <dt>사용여부</dt>
                                    <dd>사용가능</dd>
                                </dl>
                            </td>
                        </tr>
                        <tr>
                            <td>2318021</td>
                            <td class="details">
                                <p>회원가입 감사쿠폰(50,000원)</p>
                                <dl>
                                    <dt>할인액/적립액</dt>
                                    <dd>5000원</dd>
                                    <dt>사용기간</dt>
                                    <dd>2016.01.02~2017.01.01</dd>
                                    <dt>사용여부</dt>
                                    <dd>사용가능</dd>
                                </dl>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="notify">
                <h5>* 주문 할인쿠폰 적용방법</h5>
                <p>
                    주문서 쿠폰 선택에서 고객님이 보유하신 [쿠폰번호]를 선택하시면 할인금액(또는 적립금액)이 나타납니다.<br>
                    (정률할인(적립)의 경우, 할인율(적립률)이 나타납니다.)
                </p>
                <h5>* 주문 할인쿠폰 적용방법</h5>
                <ul>
                    <li>적립된 금액이 0원 이상 누적되었을 때, 사용하실 수 있습니다.</li>
                    <li>결제 시 적립금 사용 여부를 확인할 수 있는 안내문이 나옵니다.</li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>