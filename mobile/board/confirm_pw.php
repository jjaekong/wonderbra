<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board">
        <div class="page-header">
            <h2 class="title">Q &amp; A</h2>
        </div>
        <div class="container">
            <section class="confirm-pw">
                <div class="section-header">
                    <img src="/design/wonderbra/mobile/images/ico_lock.png" alt="" width="24">
                    <h3 class="heading">PASSWORD</h3>
                    <p>
                        피해를 예방하기 위하여 비밀번호를 확인합니다.<br>
                        비밀번호는 타인에게 노출되지 않도록 주의해주세요.
                    </p>
                </div>
                <div class="form-group">
                    <label>비밀번호 <input type="password" class="form-control input-sm"></label>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-cancel">취소</a>
                        <a href="#" class="btn btn-default btn-submit">확인</a>
                    </p>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>