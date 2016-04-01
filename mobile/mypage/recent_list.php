<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage recent">
        <div class="page-header">
            <h2 class="title">최근 본 상품목록</h2>
        </div>
        <div class="container">
            <div class="recent-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>사진</th>
                            <th>상품</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="check"><input type="checkbox"></td>
                            <td class="figure"><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="details">
                                <a class="summary" href="#">
                                    <strong>원더브라 Sexy Wirefree 베이지 2종세트 WW2D51_T</strong>
                                    <dl>
                                        <dt>상품가</dt>
                                        <dd>39,000원</dd>
                                        <dt>적립금</dt>
                                        <dd>390원</dd>
                                    </dl>
                                </a>
                                <p class="btns">
                                    <button type="button" class="btn btn-default btn-cart">장바구니</button>
                                    <button type="button" class="btn btn-default btn-delete">삭제</button>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="check"><input type="checkbox"></td>
                            <td class="figure"><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="details">
                                <a class="summary" href="#">
                                    <strong>원더브라 Sexy Wirefree 베이지 2종세트 WW2D51_T</strong>
                                    <dl>
                                        <dt>상품가</dt>
                                        <dd>39,000원</dd>
                                        <dt>적립금</dt>
                                        <dd>390원</dd>
                                    </dl>
                                </a>
                                <p class="btns">
                                    <button type="button" class="btn btn-default btn-cart">장바구니</button>
                                    <button type="button" class="btn btn-default btn-delete">삭제</button>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <button type="button" class="btn btn-default btn-delete-item">선택삭제</button>
                        <button type="button" class="btn btn-default btn-delete-all">전체삭제</button>
                    </p>
                </div>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>