<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership find">
        <div class="container">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="membership-wrapper">
                    <div class="membership-inner">
                        <div class="page-header">
                            <h2 class="page-title">ID/PW FIND</h2>
                        </div>
                        <div class="find-form">
                            <div class="help">
                                <p>회원 가입시 입력하신 이름 / 이메일 주소를 입력해주세요</p>
                            </div>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="find-id" class="control-label">아이디</label>
                                    <input type="text" class="form-control" id="find-id">
                                </div>
                                <div class="form-group">
                                    <label for="find-email" class="control-label">이메일</label>
                                    <input type="email" class="form-control" id="find-email">
                                </div>
                                <button class="btn btn-default btn-submit" type="submit">확인</button>
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