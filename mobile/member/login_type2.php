<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub member login">
        <div class="container">
            <section class="member-wrap">
                <div class="inner">
                    <div class="login-area">
                        <div class="page-header">
                            <h2 class="title">LOGIN</h2>
                            <p>회원가입을 하시면 더 많은 혜택을 받으실 수 있습니다.</p>
                        </div>
                        <div class="login-form">
                            <div class="form-group">
                                <label for="login-id">아이디</label>
                                <input type="text" id="login-id" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="login-pw">비밀번호</label>
                                <input type="password" id="login-pw" class="form-control input-sm">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="button" class="btn btn-default btn-submit btn-block">확인</button>
                                </p>
                            </div>
                        </div>
                        <div class="login-help">
                            <ul class="row">
                                <li class="col-xs-6">
                                    <p>아직 원더브라 회원이 아니신가요?</p>
                                    <a class="btn btn-default btn-join btn-block" href="#">회원가입</a>
                                </li>
                                <li class="col-xs-6">
                                    <p>비회원으로도 구매가능합니다.</p>
                                    <a class="btn btn-default btn-nonmember btn-block" href="#">비회원 구매</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>