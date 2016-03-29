<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board review">
        <div class="page-header">
            <h2 class="title">BEST REVIEW</h2>
            <p>
                제품에 대한 상세한 설명과 후기를 남겨주세요!<br>
                한달에 한 번! 우수/베스트 리뷰로 뽑히신 고객님들께 특별한 혜택을 드립니다.
            </p>
            <p class="hr">
                <img src="/design/wonderbra/mobile/images/ico_cross.png" alt="" width="20">
            </p>
        </div>
        <div class="container">
            <div class="review-benefit">
                <p><img class="img-responsive" src="/design/wonderbra/mobile/images/img_review_benefit.png" alt="1등 10만원, 2등 7만원, 3등 5만원"></p>
            </div>
            <div class="best-review">
                <ul class="row">
                    <li class="col-xs-6">
                        <a class="review-product" href="#">
                            <figure>
                                <img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_1.jpg" alt="">
                                <figcaption>
                                    <p class="title">같은상품 재구매 했어요!</p>
                                    <p class="writer">wonderbra</p>
                                </figcaption>
                            </figure>
                        </a>
                        <a class="review-article" href="#">
                            <figure>
                                <img src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt="" width="30" height="30">
                                <figcaption>
                                    <p class="title">같은상품 재구매 했어요!</p>
                                    <p class="rating">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_empty.png" alt="" width="12">
                                    </p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-6">
                        <a class="review-product" href="#">
                            <figure>
                                <img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_1.jpg" alt="">
                                <figcaption>
                                    <p class="title">같은상품 재구매 했어요!</p>
                                    <p class="writer">wonderbra</p>
                                </figcaption>
                            </figure>
                        </a>
                        <a class="review-article" href="#">
                            <figure>
                                <img src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt="" width="30" height="30">
                                <figcaption>
                                    <p class="title">같은상품 재구매 했어요!</p>
                                    <p class="rating">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_full.png" alt="" width="12">
                                        <img src="/design/wonderbra/mobile/images/ico_star_empty.png" alt="" width="12">
                                    </p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search-area">
                <div class="form-group">
                    <select name="" class="form-control input-sm">
                        <option value="">전체</option>
                    </select>
                    <label>
                        <input type="text" class="form-control input-sm">
                    </label>
                    <button type="button" class="btn btn-default btn-search">
                        <span class="glyphicon glyphicon-search"></span>
                        <span class="sr-only">검색</span>
                    </button>
                </div>
            </div>
            <div class="review-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>product</th>
                            <th>title</th>
                            <th>writer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11</td>
                            <td><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="title"><a href="#">사이즈 문의합니다.</a></td>
                            <td>작성자</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="title"><a href="#"><img src="/design/wonderbra/mobile/images/ico_balloon.png" alt="" width="12"> 안녕하세요~ 원더브라 입니다.</a></td>
                            <td>원더브라</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="title"><a href="#">사이즈 문의합니다.</a></td>
                            <td>작성자</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="title"><a href="#"><img src="/design/wonderbra/mobile/images/ico_balloon.png" alt="" width="12"> 안녕하세요~ 원더브라 입니다.</a></td>
                            <td>원더브라</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-write">글쓰기</a>
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