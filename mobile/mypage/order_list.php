<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage order">
        <div class="page-header">
            <h2 class="title">주문내역/배송조회</h2>
        </div>
        <div class="container">
            <div class="order-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>주문일자</th>
                            <th>상품</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="date">2016.03.25</td>
                            <td class="details">
                                <a class="summary" href="#">
                                    <strong>원더브라 Sexy Wirefree 베이지 2종세트 WW2D51_T</strong>
                                    <dl>
                                        <dt>결제금액</dt>
                                        <dd>39,000원</dd>
                                        <dt>주문현황</dt>
                                        <dd>미배송</dd>
                                    </dl>
                                </a>
                                <p class="btns">
                                    <button type="button" class="btn btn-default btn-details">주문상세</button>
                                    <button type="button" class="btn btn-default btn-delivery">배송조회</button>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="date">2016.03.25</td>
                            <td class="details">
                                <a class="summary" href="#">
                                    <strong>원더브라 Sexy Wirefree 베이지 2종세트 WW2D51_T</strong>
                                    <dl>
                                        <dt>결제금액</dt>
                                        <dd>39,000원</dd>
                                        <dt>주문현황</dt>
                                        <dd>미배송</dd>
                                    </dl>
                                </a>
                                <p class="btns">
                                    <button type="button" class="btn btn-default btn-details">주문상세</button>
                                    <button type="button" class="btn btn-default btn-delivery">배송조회</button>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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