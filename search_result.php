<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="search">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">SEARCH RESULT</h2>
            </div>
        </div>
        <div class="container">
            <div class="search-form">
                <table class="table">
                    <colgroup>
                        <col style='width: 150px;'>
                        <col>
                        <col style='width: 150px;'>
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th class="price">가격대</th>
                            <td class="price">
                                <input type="text" class="form-control">
                                <span>-</span>
                                <input type="text" class="form-control">
                            </td>
                            <th class="pname">제품명/키워드</th>
                            <td class="pname"><input type="text" class="form-control"></td>
                            <td class="btn-area">
                                <button type="button" class="btn btn-default btn-search btn-block">검색하기</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="summary">
                <p class="text-center">총 25개의 상품이 검색 되었습니다.</p>
            </div>
            <div class="sorter">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="by">
                            <div class="btn-group">
                                <button type="button" class="btn btn-xs btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    LOW PRICE <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">정렬 #1</a></li>
                                    <li><a href="#">정렬 #2</a></li>
                                    <li><a href="#">정렬 #3</a></li>
                                    <li><a href="#">정렬 #4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-list">
                <ul class="row">
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_1.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_2.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_3.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_4.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_1.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_2.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_3.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a href="#">
                            <figure>
                                <img src="/design/wonderbra/images/dummy/img_product_4.jpg">
                                <figcaption>
                                    <strong>Sexy volume up 블랙 2종세트</strong>
                                    <small>WB_SELECT301</small>
                                    <p>29,900</p>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
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