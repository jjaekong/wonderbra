<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub member find">
        <div class="container">
            <section class="member-wrap">
                <div class="inner">
                    <div class="find-area">
                        <div class="page-header">
                            <h2 class="title">ID/PW FIND</h2>
                            <p>회원가입을 하시면 더 많은 혜택을 받으실 수 있습니다.</p>
                        </div>
                        <div class="find-form">
                            <div class="form-group">
                                <label for="find-name">이름</label>
                                <input type="text" id="find-name" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="find-email">이메일</label>
                                <input type="email" id="find-email" class="form-control input-sm">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="button" class="btn btn-default btn-submit btn-block">확인</button>
                                </p>
                            </div>
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