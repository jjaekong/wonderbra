<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership join">
        <div class="container">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="membership-wrapper">
                    <div class="membership-inner">
                        <div class="page-header">
                            <h2 class="page-title">JOIN</h2>
                        </div>
                        <ol aria-hidden="true">
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
                                        <tr class="userid">
                                            <td>아이디</td>
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                                <button type="button" class="btn btn-default btn-check-id">아이디 중복확인</button>
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
                                        <tr class="username">
                                            <td>이름</td>
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="birth">
                                            <td>생년월일</td>
                                            <td>
                                                <select name="" class="form-control">
                                                    <option value="">선택</option>
                                                </select>
                                                <select name="" class="form-control">
                                                    <option value="">선택</option>
                                                </select>
                                                <select name="" class="form-control">
                                                    <option value="">선택</option>
                                                </select>
                                                <label>
                                                    <input type="radio"> 남
                                                </label>
                                                <label>
                                                    <input type="radio"> 여
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="email">
                                            <td>이메일</td>
                                            <td>
                                                <label>
                                                    <input type="email" class="form-control">
                                                </label>
                                                <button type="button" class="btn btn-default btn-check-email">이메일 중복확인</button>
                                                <p>
                                                    <label>
                                                        <input type="radio"> 메일수신
                                                    </label>
                                                    <label>
                                                        <input type="radio"> 메일수신안함
                                                    </label>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="addr zipcode">
                                            <td rowspan="3">주소</td>
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                                <span>-</span>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                                <button type="button" class="btn btn-default btn-zipcode">우편번호 검색</button>
                                            </td>
                                        </tr>
                                        <tr class="addr default">
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="addr details">
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr class="mobile">
                                            <td>핸드폰</td>
                                            <td>
                                                <label>
                                                    <input type="text" class="form-control">
                                                </label>
                                                <p>
                                                    <label>
                                                        <input type="radio"> SMS수신
                                                    </label>
                                                    <label>
                                                        <input type="radio"> SMS수신안함
                                                    </label>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-default btn-prev">이전</a>
                                        <button type="submit" class="btn btn-default btn-submit">다음</button>
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