<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage inquiry board">
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
                    <li role="presentation" class="active"><a href="#">1:1문의</a></li>
                    <li role="presentation"><a href="#">회원정보수정</a></li>
                    <li role="presentation"><a href="#">회원탈퇴</a></li>
                </ul>
            </div>
            <div class="media-write">
                <form action="#" method="post">
                    <table class="table">
                        <colgroup>
                            <col width="200">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <td><label for="inquiry-writer">이름</label></td>
                                <td>테스트</td>
                            </tr>
                            <tr class="email">
                                <td><label for="inquiry-email">이메일</label></td>
                                <td><input id="inquiry-email" type="email" class="form-control" name="#"></td>
                            </tr>
                            <tr class="mobile">
                                <td><label for="inquiry-mobile">핸드폰</label></td>
                                <td><input id="inquiry-mobile" type="text" class="form-control" name="#"></td>
                            </tr>
                            <tr>
                                <td><label for="inquiry-title">제목</td>
                                <td><input id="inquiry-title" type="text" class="form-control" name="#"></td>
                            </tr>
                            <tr>
                                <td><label for="inquiry-content">내용</label></td>
                                <td><textarea id="inquiry-content" class="form-control" cols="10" rows="5" name="#"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-default btn-cancel">취소</a>
                            <button type="submit" class="btn btn-default btn-submit">문의하기</button>
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