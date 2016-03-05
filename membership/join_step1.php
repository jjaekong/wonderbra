<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership join step1">
        <div class="container">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="membership-wrapper">
                    <div class="membership-inner">
                        <div class="page-header">
                            <h2 class="page-title">JOIN</h2>
                        </div>
                        <ol class="steps" aria-hidden="true">
                            <li class="active">1</li>
                            <li>2</li>
                        </ol>
                        <div class="privacy">
                            <h4>개인정보취급방침</h4>
                            <div class="details"></div>
                            <label>
                                <input type="checkbox"> 이용약관에 동의합니다.
                            </label>
                        </div>
                        <div class="terms">
                            <h4>이용약관</h4>
                            <div class="details"></div>
                            <label>
                                <input type="checkbox"> 이용약관에 동의합니다.
                            </label>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-default btn-cancel">취소</a>
                                <button type="submit" class="btn btn-default btn-submit">다음</button>
                            </p>
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