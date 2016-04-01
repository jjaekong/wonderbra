<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage edit">
        <div class="container">
            <section class="member-wrap">
                <div class="inner">
                    <div class="join-area">
                        <div class="page-header">
                            <h2 class="title">JOIN</h2>
                        </div>
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
                                <label for="join-name">이름</label>
                                <input type="text" id="join-name" class="form-control input-sm">
                            </div>
                            <div class="form-group birth">
                                <label>생년월일</label>
                                <p>
                                    <select class="form-control">
                                        <option value=""></option>
                                    </select>
                                    <select class="form-control">
                                        <option value=""></option>
                                    </select>
                                    <select class="form-control">
                                        <option value=""></option>
                                    </select>
                                </p>
                            </div>
                            <div class="form-group sex">
                                <label>성별</label>
                                <p>
                                    <label>
                                        <input type="radio"> 남
                                    </label>
                                    <label>
                                        <input type="radio"> 여
                                    </label>
                                </p>
                            </div>
                            <div class="form-group email">
                                <label for="join-email">이메일</label>
                                <input type="email" id="join-email" class="form-control input-sm">
                                <button type="button" class="btn btn-default btn-check-email">이메일 중복확인
                                </button>
                            </div>
                            <div class="form-group addr">
                                <label>주소</label>
                                <p class="zipcode">
                                    <label><input type="text" class="form-control input-sm"></label>
                                    <button type="button" class="btn btn-default btn-zipcode">우편번호 검색
                                    </button>
                                </p>
                                <p class="default">
                                    <label><input type="text" class="form-control input-sm"></label>
                                </p>
                                <p class="details">
                                    <label><input type="text" class="form-control input-sm"></label>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="join-mobile">휴대폰번호</label>
                                <input type="text" id="join-mobile" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="join-recomid">추천인 아이디</label>
                                <p>1명이 당신을 추천하였습니다.</p>
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