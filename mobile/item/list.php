<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub item">
        <div class="page-header">
            <h2 class="title">LINE</h2>
        </div>
        <div class="overview">
            <p>
                <img class="img-responsive" src="/design/wonderbra/mobile/images/img_overview_1.jpg" alt="">
            </p>
        </div>
        <div class="container">
            <div class="category">
                <ul>
                    <li role="presentation" class="active"><a href="#">전체보기</a></li>
                    <li role="presentation"><a href="#">회원가입/정보</a></li>
                    <li role="presentation"><a href="#">상품구매/주문절차 및 취소</a></li>
                    <li role="presentation"><a href="#">결제/배송</a></li>
                    <li role="presentation"><a href="#">교환/반품/환불</a></li>
                    <li role="presentation"><a href="#">적립금 적립</a></li>
                    <li role="presentation"><a href="#">기타</a></li>
                </ul>
            </div>
            <div class="sorter">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LOW PRICE <span class="glyphicon glyphicon-menu-down"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">LOW PRICE</a></li>
                        <li><a href="#">HIGH PRICE</a></li>
                        <li><a href="#">NEW</a></li>
                    </ul>
                </div>
            </div>
            <div class="product-list">
                <ul class="row">
                    <li class="col-xs-6">
                        <a href="#">
                            <figure>
                                <img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_1.jpg" alt="">
                                <figcaption>
                                    <p class="title">[Wonderbra] 원더브라 Sexy Non-Wire 네이비 2종세트</p>
                                    <p class="price"><strong>67,000</strong></p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-6">
                        <a href="#">
                            <figure>
                                <img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_2.jpg" alt="">
                                <figcaption>
                                    <p class="title">[Wonderbra] 원더브라 Sexy Non-Wire 네이비 2종세트</p>
                                    <p class="price"><strong>67,000</strong></p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-6">
                        <a href="#">
                            <figure>
                                <img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_3.jpg" alt="">
                                <figcaption>
                                    <p class="title">[Wonderbra] 원더브라 Sexy Non-Wire 네이비 2종세트</p>
                                    <p class="price"><strong>67,000</strong></p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-6">
                        <a href="#">
                            <figure>
                                <img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_4.jpg" alt="">
                                <figcaption>
                                    <p class="title">[Wonderbra] 원더브라 Sexy Non-Wire 네이비 2종세트</p>
                                    <p class="price"><strong>67,000</strong></p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
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