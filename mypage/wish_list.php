<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage wish">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">위시리스트</h2>
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
                    <li role="presentation" class="active"><a href="#">위시리스트</a></li>
                    <li role="presentation"><a href="#">최근 본 상품목록</a></li>
                    <li role="presentation"><a href="#">상품 Q&amp;A</a></li>
                    <li role="presentation"><a href="#">1:1문의</a></li>
                    <li role="presentation"><a href="#">회원정보수정</a></li>
                    <li role="presentation"><a href="#">회원탈퇴</a></li>
                </ul>
            </div>
            <div class="wish-list">
                <form action="#" method="post">
                    <table class="table">
                        <colgroup>
                            <col width="60">
                            <col width="100">
                            <col>
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                            <col width="100">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>선택</th>
                                <th>사진</th>
                                <th>상품명</th>
                                <th>수량</th>
                                <th>재고</th>
                                <th>적립금</th>
                                <th>가격</th>
                                <th>장바구니</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label><input type="checkbox"></label></td>
                                <td><img src="/design/wonderbra/images/dummy/img_qna_thumb.jpg" alt=""></td>
                                <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T
    [사이즈 : 75B(90) 1개]</a></td>
                                <td>
                                    <div class="quantity-counter">
                                        <input class="form-control input-sm" type="text" name="#" value="1">
                                        <button class="btn btn-link btn-xs btn-up" type="button">
                                            <span class="glyphicon glyphicon-triangle-top"></span>
                                        </button>
                                        <button class="btn btn-link btn-xs btn-down" type="button">
                                            <span class="glyphicon glyphicon-triangle-bottom"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>있음</td>
                                <td>590 won</td>
                                <td>59,900 won</td>
                                <td>
                                    <p><a href="#" class="btn btn-default btn-cart">장바구니</a></p>
                                    <p><a href="#" class="btn btn-default btn-delete">삭제</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox"></label></td>
                                <td><img src="/design/wonderbra/images/dummy/img_qna_thumb.jpg" alt=""></td>
                                <td class="title"><a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T
    [사이즈 : 75B(90) 1개]</a></td>
                                <td>
                                    <div class="quantity-counter">
                                        <input class="form-control input-sm" type="text" name="#" value="1">
                                        <button class="btn btn-link btn-xs btn-up" type="button">
                                            <span class="glyphicon glyphicon-triangle-top"></span>
                                        </button>
                                        <button class="btn btn-link btn-xs btn-down" type="button">
                                            <span class="glyphicon glyphicon-triangle-bottom"></span>
                                        </button>
                                    </div>
                                </td>
                                <td>있음</td>
                                <td>590 won</td>
                                <td>59,900 won</td>
                                <td>
                                    <p><a href="#" class="btn btn-default btn-cart">장바구니</a></p>
                                    <p><a href="#" class="btn btn-default btn-delete">삭제</a></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <button type="submit" class="btn btn-default btn-delete">선택삭제</button>
                        </p>
                    </div>
                </form>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="이전">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="다음">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>