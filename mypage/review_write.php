<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="mypage review board">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">구매후기</h2>
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
                    <li role="presentation" class="active"><a href="#">구매후기</a></li>
                    <li role="presentation"><a href="#">위시리스트</a></li>
                    <li role="presentation"><a href="#">최근 본 상품목록</a></li>
                    <li role="presentation"><a href="#">상품 Q&amp;A</a></li>
                    <li role="presentation"><a href="#">1:1문의</a></li>
                    <li role="presentation"><a href="#">회원정보수정</a></li>
                    <li role="presentation"><a href="#">회원탈퇴</a></li>
                </ul>
            </div>
            <div class="ordered-item">
                <table class="table">
                    <colgroup>
                        <col style="width: 150px;">
                        <col>
                        <col style="width: 150px;">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td><img src="/design/wonderbra/images/dummy/img_review_1.gif" alt=""></td>
                            <td class="title">
                                <a href="#">[Wonderbra] 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T</a>
                                <p class="option">[사이즈 : 75B(90) 1개]</p>
                            </td>
                            <td>59,000 won</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="review-write">
                <table class="table">
                    <colgroup>
                        <col style="width: 200px">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>작성자</th>
                            <td>원더브라</td>
                        </tr>
                        <tr class="password">
                            <th>비밀번호</th>
                            <td>
                                <label>
                                    <input type="password" class="form-control">
                                </label>
                            </td>
                        </tr>
                        <tr class="email">
                            <th>이메일</th>
                            <td>
                                <label>
                                    <input type="email" class="form-control">
                                </label>
                            </td>
                        </tr>
                        <tr class="point">
                            <th>평점</th>
                            <td>
                                <label>
                                    <input type="radio"> <img src="/design/wonderbra/images/sub/img_star_5.gif" alt="5점">
                                </label>
                                <label>
                                    <input type="radio"> <img src="/design/wonderbra/images/sub/img_star_4.gif" alt="4점">
                                </label>
                                <label>
                                    <input type="radio"> <img src="/design/wonderbra/images/sub/img_star_3.gif" alt="3점">
                                </label>
                                <label>
                                    <input type="radio"> <img src="/design/wonderbra/images/sub/img_star_2.gif" alt="2점">
                                </label>
                                <label>
                                    <input type="radio"> <img src="/design/wonderbra/images/sub/img_star_1.gif" alt="1점">
                                </label>
                            </td>
                        </tr>
                        <tr class="title">
                            <th>제목</th>
                            <td>
                                <label>
                                    <input type="text" class="form-control">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>
                                <textarea cols="100" rows="10" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>첨부파일</th>
                            <td>
                                <input type="file" class="form-control">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-cancel">취소</a>
                        <button type="button" class="btn btn-default btn-submit">확인</button>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>