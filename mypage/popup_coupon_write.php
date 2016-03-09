<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub popup">
    <main id="content" tabindex="-1" class="mypage coupon">
        <div class="coupon-write">
            <h4>쿠폰번호등록</h4>
            <div class="coupon-body">
                <div class="coupon-form">
                    <div>
                        <h5>쿠폰 시리얼 번호 입력</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control">
                                <span>-</span>
                                <input type="text" class="form-control">
                                <span>-</span>
                                <input type="text" class="form-control">
                                <span>-</span>
                                <input type="text" class="form-control">
                            </div>
                            <button type="button" class="btn btn-default btn-submit">입력하기</button>
                        </form>
                        <p>
                            시리얼번호는 영문자+숫자의 조합이며, 총 16자리 입니다.<br>
                            예) ABCD-AB12-CD34-12E3 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>