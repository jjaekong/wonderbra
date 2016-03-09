<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="popup">
    <main id="content" tabindex="-1" class="mypage review">
        <div class="page-header">
            <div>
                <h2 class="page-title">상품후기등록</h2>
                <p><strong>[TEST]</strong> 님께서 2016년 02월 21일에 주문하신 내역입니다.</p>
            </div>
        </div>
        <div class="category">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="#">주문상세내역</a></li>
                <li role="presentation" class="active"><a href="#">상품후기등록</a></li>
            </ul>
        </div>
        <div class="buying-list">
            <h4>상품후기등록</h4>
            <table class="table">
                <colgroup>
                    <col>
                    <col>
                    <col style="width: 100px;">
                    <col style="width: 100px;">
                    <col style="width: 100px;">
                </colgroup>
                <thead>
                    <tr>
                        <th></th>
                        <th>상품명</th>
                        <th>수량</th>
                        <th>가격</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="/design/wonderbra/images/dummy/img_review_1.gif" alt=""></td>
                        <td class="title">
                            <a href="#">[Wonderbra] 원더브라 Sexy Wire Free 
베이지 브라팬티 WW4H22_T</a>
                            <p class="option">[사이즈 : 75B(90) 1개]</p>
                        </td>
                        <td>1</td>
                        <td>59,000 won</td>
                        <td>
                            <button type="button" class="btn btn-default btn-write">후기작성</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="review-write">
            <table class="table">
                <colgroup>
                    <col style="width: 170px;">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th>작성자</th>
                        <td>원더브라</td>
                    </tr>
                    <tr class="password">
                        <th>비밀번호</th>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr class="email">
                        <th>이메일</th>
                        <td><input type="email" class="form-control"></td>
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
                    <tr>
                        <th>제목</th>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr class="details">
                        <th>내용</th>
                        <td><textarea cols="100" rows="10" class="form-control"></textarea></td>
                    </tr>
                    <tr class="attach">
                        <th>첨부파일</th>
                        <td><input type="file" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area">
                <p>
                    <button type="button" class="btn btn-default btn-cancel">취소</button>
                    <button type="button" class="btn btn-default btn-submit">확인</button>
                </p>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>