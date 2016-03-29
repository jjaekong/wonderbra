<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board">
        <div class="page-header">
            <h2 class="title">REVIEW</h2>
        </div>
        <div class="container">
            <div class="review-write">
                <table class="table">
                    <colgroup>
                        <col style="width: 70px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>이름</th>
                            <td>원더브라</td>
                        </tr>
                        <tr>
                            <th>비밀번호</th>
                            <td>
                                <label>
                                    <input type="password" class="form-control input-sm">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td>
                                <label>
                                    <input type="email" class="form-control input-sm">
                                </label>
                            </td>
                        </tr>
                        <tr class="rating">
                            <th>평점</th>
                            <td>
                                <label>
                                    <input type="radio">
                                    <img src="/design/wonderbra/mobile/images/ico_star_5.png" alt="5점" width="50">
                                </label>
                                <label>
                                    <input type="radio">
                                    <img src="/design/wonderbra/mobile/images/ico_star_4.png" alt="4점" width="50">
                                </label>
                                <label>
                                    <input type="radio">
                                    <img src="/design/wonderbra/mobile/images/ico_star_3.png" alt="3점" width="50">
                                </label>
                                <label>
                                    <input type="radio">
                                    <img src="/design/wonderbra/mobile/images/ico_star_2.png" alt="2점" width="50">
                                </label>
                                <label>
                                    <input type="radio">
                                    <img src="/design/wonderbra/mobile/images/ico_star_1.png" alt="1점" width="50">
                                </label>
                            </td>
                        </tr>
                        <tr class="title">
                            <th>제목</th>
                            <td>
                                <label>
                                    <input type="text" class="form-control input-sm">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td><textarea cols="100" rows="10" class="form-control input-sm"></textarea></td>
                        </tr>
                        <tr>
                            <th>첨부파일</th>
                            <td>
                                <label>
                                    <input type="file" class="form-control input-sm">
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-cancel">취소</a>
                        <a href="#" class="btn btn-default btn-submit">확인</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>