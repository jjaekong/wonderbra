<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub member join">
        <div class="container">
            <section class="member-wrap">
                <div class="inner">
                    <div class="join-area">
                        <div class="page-header">
                            <h2 class="title">JOIN</h2>
                        </div>
                        <ol class="steps" aria-hidden="true">
                            <li>1</li>
                            <li class="active">2</li>
                        </ol>
                        <div class="join-form">
                            <div class="form-group">
                                <label for="join-id">아이디</label>
                                <input type="text" id="join-id" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="join-pw">비밀번호</label>
                                <input type="password" id="join-pw" class="form-control input-sm">
                                <p class="help-block">* 영문 대소문자/숫자/특수문자를 혼용하여 2종류 10~16자 또는 3종류 8~16자</p>
                            </div>
                            <div class="form-group">
                                <label for="join-pw">비밀번호 확인</label>
                                <input type="password" id="join-repw" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="join-email">이메일</label>
                                <input type="email" id="join-email" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="join-mobile">휴대폰번호</label>
                                <input type="text" id="join-mobile" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="join-recomid">추천인 아이디</label>
                                <input type="text" id="join-recomid" class="form-control input-sm">
                            </div>
                            <div class="form-group agree">
                                <label>
                                    <input type="checkbox"> 14세 이상입니다.(필수)
                                </label>
                                <p class="help-block">
                                    회원가입에 필요한 최소한의 정보만 입력 받음으로써 고객님의 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.
                                </p>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="button" class="btn btn-default btn-cancel">취소</button>
                                    <button type="button" class="btn btn-default btn-submit">확인</button>
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