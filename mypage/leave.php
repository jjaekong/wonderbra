<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage leave">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">회원탈퇴</h2>
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
                    <li role="presentation"><a href="#">회원정보수정</a></li>
                    <li role="presentation" class="active"><a href="#">회원탈퇴</a></li>
                </ul>
            </div>
            <div class="leave-info">
                <h4>회원탈퇴 안내</h4>
                <div class="notify">
                    <p>
                        고객님께서 회원 탈퇴를 원하신다니 저희 쇼핑몰의 서비스가 많이 부족하고 미흡했나 봅니다.<br>
                        불편하셨던 점이나 불만사항을 알려주시면 적극 반영해서 고객님의 불편함을 해결해 드리도록 노력하겠습니다.<br>
                        아울러 회원 탈퇴시의 아래 사항을 숙지하시기 바랍니다.
                    </p>
                    <ol>
                        <li>1. 회원 탈퇴 시 고객님의 정보는 상품 반품 및 A/S를 위해 전자상거래 등에서의 소비자 보호에 관한 법률에 의거한 고객정보 보호 정책에 따라 관리 됩니다.</li>
                        <li>2. 탈퇴 시 고객님께서 보유하셨던 적립금은 삭제되며 30일 동안 사이트 재가입이 불가능합니다.</li>
                    </ol>
                    <p>
                        <strong>※ 간혹 비밀번호가 맞지 않는다고 나오시는 고객님께서는 1:1 문의에 탈퇴의사를 남겨주시면 고객센터에서 신속히 처리하여 드리겠습니다.</strong>
                    </p>
                </div>
            </div>
            <div class="leave-form">
                <h4>회원 탈퇴하기</h4>
                <form action="#" method="post">
                    <table class="table">
                        <colgroup>
                            <col width="170">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr class="id">
                                <td>회원 아이디</td>
                                <td>TEST</td>
                            </tr>
                            <tr>
                                <td>탈퇴 사유</td>
                                <td><textarea class="form-control" cols="100" rows="5"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-default btn-cancel">취소</a>
                            <button type="submit" class="btn btn-default btn-submit">회원탈퇴</button>
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