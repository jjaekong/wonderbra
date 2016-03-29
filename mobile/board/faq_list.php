<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board">
        <div class="page-header">
            <h2 class="title">FAQ</h2>
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
            <div class="search-area form-inline">
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
            <div class="faq-list">
                <ul>
                    <li>
                        <a class="question" href="#"><i>Q</i> 카드 결제 후 할부 개월 수를 바꾸고 싶어요.</a>
                        <div class="answer">
                            <i>A</i>
                            <p>
                                카드로 결제 시에 할부 개월 변경요청은 불가능합니다.<br>
                                주문완료 후 할부 개월 수를 변경하고 싶을 시, 주문취소(카드결제취소)후, 새로 결제하여야 합니다.<br>
                                상품 준비 중 일시에 할부 개월 수를 변경하고 싶으시다면 고객센터로 필히 연락 부탁 드립니다. 
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="question" href="#"><i>Q</i> 카드 결제 후 할부 개월 수를 바꾸고 싶어요.</a>
                        <div class="answer">
                            <i>A</i>
                            <p>
                                카드로 결제 시에 할부 개월 변경요청은 불가능합니다.<br>
                                주문완료 후 할부 개월 수를 변경하고 싶을 시, 주문취소(카드결제취소)후, 새로 결제하여야 합니다.<br>
                                상품 준비 중 일시에 할부 개월 수를 변경하고 싶으시다면 고객센터로 필히 연락 부탁 드립니다. 
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="question" href="#"><i>Q</i> 카드 결제 후 할부 개월 수를 바꾸고 싶어요.</a>
                        <div class="answer">
                            <i>A</i>
                            <p>
                                카드로 결제 시에 할부 개월 변경요청은 불가능합니다.<br>
                                주문완료 후 할부 개월 수를 변경하고 싶을 시, 주문취소(카드결제취소)후, 새로 결제하여야 합니다.<br>
                                상품 준비 중 일시에 할부 개월 수를 변경하고 싶으시다면 고객센터로 필히 연락 부탁 드립니다. 
                            </p>
                        </div>
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
    <script>
        (function($) {
            $(document).on('click', '.faq-list .question', function() {
                $('.faq-list li').removeClass('active');
                $(this).parent().addClass('active');
                return false;
            });
        })(jQuery);
    </script>
</body>
</html>