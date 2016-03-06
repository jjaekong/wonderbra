<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage myinfo">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">1:1 문의</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#">주문내역/배송조회</a></li>
                    <li role="presentation"><a href="#">취소/교환/환불 조회</a></li>
                    <li role="presentation"><a href="#">적립금 내역</a></li>
                    <li role="presentation"><a href="#">할인쿠폰 내역</a></li>
                    <li role="presentation"><a href="#">B-money 내역</a></li>
                    <li role="presentation"><a href="#">쿠폰등록</a></li>
                    <li role="presentation" class="br"></li>
                    <li role="presentation"><a href="#">구매후기</a></li>
                    <li role="presentation"><a href="#">위시리스트</a></li>
                    <li role="presentation"><a href="#">최근 본 상품목록</a></li>
                    <li role="presentation"><a href="#">상품 Q&amp;A</a></li>
                    <li role="presentation"><a href="#">1:1문의</a></li>
                    <li role="presentation" class="active"><a href="#">회원정보수정</a></li>
                    <li role="presentation"><a href="#">회원탈퇴</a></li>
                </ul>
            </div>
            <div class="pw-form">
                <form action="#" method="post">
                    <div class="form-area">
                        <div>
                            <p><img src="/design/wonderbra/images/sub/ico_lock.gif" alt=""></p>
                            <h2>PASSWORD</h2>
                            <p>저희 쇼핑몰에서는 회원님의 소중한 개인정보를 안전하게 보호하고 개인정보 도용으로 인한 피해를 
        예방하기 위하여 비밀번호를 확인합니다. 비밀번호는 타인에게 노출되지 않도록 주의해주세요.</p>
                            <dl>
                                <dt>아이디</dt>
                                <dd>TEST</dd>
                                <dt><label for="myinfo-pw" class="control-label">비밀번호</label></dt>
                                <dd><input type="password" class="form-control" id="myinfo-pw"></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-default btn-cancel">취소</a>
                            <button type="submit" class="btn btn-default btn-submit">확인</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>