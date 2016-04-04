<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub store">
        <div class="page-header">
            <h2 class="title">STORE</h2>
        </div>
        <div class="container">
            <div class="search-area form-inline">
                <div class="form-group">
                    <select name="" class="form-control input-sm">
                        <option value="">지역선택</option>
                    </select>
                    <label>
                        <input type="text" class="form-control input-sm" style="max-width:100px;">
                    </label>
                    <button type="button" class="btn btn-default btn-search">
                        <span class="glyphicon glyphicon-search"></span>
                        <span class="sr-only">검색</span>
                    </button>
                </div>
            </div>
            <div class="store-list">
                <ul>
                    <li class="active">
                        <a class="name" href="#">[서울] WB가로수길 <span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="details">
                            <address>서울시 강남구 신사동 542-6 원더브라</address>
                            <dl>
                                <dt><span class="glyphicon glyphicon-time"></span>영업시간</dt>
                                <dd>10:00~22:00</dd>
                            </dl>
                            <div class="btn-area">
                                <p>
                                    <a href="tel:02-543-6101" class="btn btn-default btn-tel"><span class="glyphicon glyphicon-earphone"> </span> 02-543-6101</a>
                                    <a href="#" class="btn btn-default btn-map"><span class="glyphicon glyphicon-map-marker"></span> 지도보기</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="name" href="#">[서울] WB가로수길 <span class="glyphicon glyphicon-menu-down"></span></a>
                        <div class="details">
                            <address>서울시 강남구 신사동 542-6 원더브라</address>
                            <dl>
                                <dt><span class="glyphicon glyphicon-time"></span>영업시간</dt>
                                <dd>10:00~22:00</dd>
                            </dl>
                            <div class="btn-area">
                                <p>
                                    <a href="tel:02-543-6101" class="btn btn-default btn-tel"><span class="glyphicon glyphicon-earphone"> </span> 02-543-6101</a>
                                    <a href="#" class="btn btn-default btn-map"><span class="glyphicon glyphicon-map-marker"></span> 지도보기</a>
                                </p>
                            </div>
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
            $(document).on('click', '.store-list .name', function() {
                /*
                $('.store-list li').removeClass('active');
                $(this).parent().addClass('active');
                */
                if ($(this).parent().hasClass('active')) {
                    $(this).parent().removeClass('active');
                } else {
                    $('.store-list li').removeClass('active');
                $(this).parent().addClass('active');
                }
                return false;
            });
        })(jQuery);
    </script>
</body>
</html>