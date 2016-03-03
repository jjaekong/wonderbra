<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="board faq">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">FAQ</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">ALL</a></li>
                    <li role="presentation"><a href="#">회원가입/정보</a></li>
                    <li role="presentation"><a href="#">상품구매/주문절차 및 취소</a></li>
                    <li role="presentation"><a href="#">결제/배송</a></li>
                    <li role="presentation"><a href="#">교환/반품/환불</a></li>
                    <li role="presentation"><a href="#">적립금 적립</a></li>
                    <li role="presentation"><a href="#">기타</a></li>
                </ul>
            </div>
            <div class="search">
                <form class="form-inline" action="#" method="post">
                    <div class="form-group">
                        <select class="form-control" name="">
                            <option value="#">전체</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="board-keyword">검색어</label>
                        <input type="text" class="form-control" id="board-keyword">
                    </div>
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                        <span class="sr-only">검색</span>
                    </button>
                </form>
            </div>
            <div class="faq-list">
                <ul>
                    <li>
                        <a class="question" href="#">
                            <span>상품구매/주문절차 및 취소</span>
                            <i>Q</i>
                            <strong>카드 결제 후 할부 개월 수를 바꾸고 싶어요.</strong>
                        </a>
                        <div class="answer">
                            <i>A</i>
                            <div>
                                <p>
                                    카드로 결제 시에 할부 개월 변경요청은 불가능합니다.<br>
                                    주문완료 후 할부 개월 수를 변경하고 싶을 시, 주문취소(카드결제취소)후, 새로 결제하여야 합니다.<br>
                                    상품 준비 중 일시에 할부 개월 수를 변경하고 싶으시다면 고객센터로 필히 연락 부탁 드립니다. 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <a class="question" href="#">
                            <span>기타</span>
                            <i>Q</i>
                            <strong>카드 결제 후 할부 개월 수를 바꾸고 싶어요.</strong>
                        </a>
                        <div class="answer">
                            <i>A</i>
                            <div>
                                <p>
                                    카드로 결제 시에 할부 개월 변경요청은 불가능합니다.<br>
                                    주문완료 후 할부 개월 수를 변경하고 싶을 시, 주문취소(카드결제취소)후, 새로 결제하여야 합니다.<br>
                                    상품 준비 중 일시에 할부 개월 수를 변경하고 싶으시다면 고객센터로 필히 연락 부탁 드립니다. 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="question" href="#">
                            <span>교환/반품/환불</span>
                            <i>Q</i>
                            <strong>카드 결제 후 할부 개월 수를 바꾸고 싶어요.</strong>
                        </a>
                        <div class="answer">
                            <i>A</i>
                            <div>
                                <p>
                                    카드로 결제 시에 할부 개월 변경요청은 불가능합니다.<br>
                                    주문완료 후 할부 개월 수를 변경하고 싶을 시, 주문취소(카드결제취소)후, 새로 결제하여야 합니다.<br>
                                    상품 준비 중 일시에 할부 개월 수를 변경하고 싶으시다면 고객센터로 필히 연락 부탁 드립니다. 
                                </p>
                            </div>
                        </div>
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
    <script>
        (function($) {
            $(document).on('click', '.faq-list .question', function() {
                $('.faq-list > ul > li').removeClass('active');
                $(this).parent().addClass('active');
                return false;
            });
        })(jQuery);
    </script>
</body>
</html>