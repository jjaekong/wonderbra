<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership join step2 simple">
        <div class="container">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="membership-wrapper">
                    <div class="membership-inner">
                        <div class="page-header">
                            <h2 class="page-title">JOIN</h2>
                        </div>
                        <ol class="steps" aria-hidden="true">
                            <li>1</li>
                            <li class="active">2</li>
                        </ol>
                        <div class="join-form">
                            <form  class="form-horizontal" action="#" method="post">
                                <table class="table">
                                    <colgroup>
                                        <col width="130">
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr class="username">
                                            <td>이름</td>
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="userid">
                                            <td>아이디</td>
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="password">
                                            <td>비밀번호</td>
                                            <td>
                                                <label>
                                                    <input type="password" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="password">
                                            <td>비밀번호 확인</td>
                                            <td>
                                                <label>
                                                    <input type="password" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="email">
                                            <td>이메일</td>
                                            <td>
                                                <label>
                                                    <input type="email" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="userid">
                                            <td>추천인 아이디</td>
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="adult">
                                    <label>
                                        <input type="checkbox"> 14세 이상입니다.(필수)
                                    </label>
                                    <p>회원가입에 필요한 최소한의 정보만 입력 받음으로써 고객님의 개인정보 수집을 최소화하고 편리한 회원가입을 제공합니다.</p>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-default btn-prev">이전</a>
                                        <button type="submit" class="btn btn-default btn-submit">확인</button>
                                    </p>
                                </div>
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