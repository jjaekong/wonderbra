<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage myinfo">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">회원정보수정</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#">주문내역/배송조회</a></li>
                    <li role="presentation"><a href="#">취소/교환/환불 조회</a></li>
                    <li role="presentation"><a href="#">적립금 내역</a></li>
                    <li role="presentation"><a href="#">할인쿠폰 내역</a></li>
                    <li role="presentation"><a href="#">B-money 내역</a></li>
                    <li role="presentation"><a href="#">쿠폰등록</a></li>
                    <li role="presentation" class="br"></li>
                    <li role="presentation"><a href="#">구매후기</a></li>
                    <li role="presentation"><a href="#">위시리스트</a></li>
                    <li role="presentation"><a href="#">최근 본 상품목록</a></li>
                    <li role="presentation"><a href="#">상품 Q&amp;A</a></li>
                    <li role="presentation"><a href="#">1:1문의</a></li>
                    <li role="presentation" class="active"><a href="#">회원정보수정</a></li>
                    <li role="presentation"><a href="#">회원탈퇴</a></li>
                </ul>
            </div>
            <div class="edit-form">
                <table class="table">
                    <colgroup>
                        <col width="200">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr class="name">
                            <td>아이디</td>
                            <td>TEST</td>
                        </tr>
                        <tr>
                            <td>비밀번호</td>
                            <td>
                                <label>
                                    <input class="form-control" type="password">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>비밀번호 확인</td>
                            <td>
                                <label>
                                    <input class="form-control" type="password">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>이름</td>
                            <td>
                                <label>
                                    <input class="form-control" type="text">
                                </label>
                            </td>
                        </tr>
                        <tr class="birth">
                            <td>생년월일</td>
                            <td>
                                <select class="form-control">
                                    <option value="">선택</option>
                                </select>
                                <select class="form-control">
                                    <option value="">선택</option>
                                </select>
                                <select class="form-control">
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
                        <tr>
                            <td>이메일</td>
                            <td>
                                <label>
                                    <input class="form-control" type="email">
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
                        <tr class="addr">
                            <td>주소</td>
                            <td>
                                <p class="zipcode">
                                    <label>
                                        <input class="form-control" type="text">
                                    </label>
                                    <span>-</span>
                                    <label>
                                        <input class="form-control" type="text">
                                    </label>
                                    <button type="button" class="btn btn-default btn-zipcode">우편번호 검색</button>
                                </p>
                                <p class="default">
                                    <label>
                                        <input class="form-control" type="text">
                                    </label>
                                </p>
                                <p class="details">
                                    <label>
                                        <input class="form-control" type="text">
                                    </label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>핸드폰</td>
                            <td>
                                <label>
                                    <input class="form-control" type="text">
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
                        <a href="#" class="btn btn-default btn-cancel">취소</a>
                        <button type="submit" class="btn btn-default btn-submit">확인</button>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>