<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership login login3">
        <div class="container">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="membership-wrapper">
                    <div class="membership-inner">
                        <div class="page-header">
                            <h2 class="page-title">LOGIN</h2>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="login-id" class="control-label">아이디</label>
                                    <input type="text" class="form-control" id="login-id">
                                </div>
                                <div class="form-group">
                                    <label for="login-pw" class="control-label">비밀번호</label>
                                    <input type="password" class="form-control" id="login-pw">
                                </div>
                                <button class="btn btn-default btn-submit" type="button">확인</button>
                            </form>
                            <ul class="help">
                                <li>아직 원더브라 회원이 아니신가요? <a class="btn btn-default btn-join" href="#">회원가입</a></li>
                                <li>아이디/비밀번호를 잊어버리셨나요? <a class="btn btn-default btn-find" href="#">ID/PW찾기</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="page-header track-header">
                            <h2 class="page-title"><i>ORDER</i> SHOPPING</h2>
                            <p>비회원 구매를 하신 경우에는 이름과 주문번호로 조회가능합니다.</p>
                        </div>
                        <div class="login-form track-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="user-name" class="control-label">이름</label>
                                    <input type="text" class="form-control" id="user-name">
                                </div>
                                <div class="form-group">
                                    <label for="order-num" class="control-label">주문번호</label>
                                    <input type="text" class="form-control" id="order-num">
                                </div>
                                <button class="btn btn-default btn-submit" type="button">주문조회</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>