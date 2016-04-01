<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage inquiry">
        <div class="page-header">
            <h2 class="title">1:1문의</h2>
        </div>
        <div class="container">
            <div class="inquiry-write">
                <table class="table">
                    <colgroup>
                        <col style="width: 80px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>이름</th>
                            <td>원더브라</td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td><label><input type="email" class="form-control"></label></td>
                        </tr>
                        <tr>
                            <th>핸드폰</th>
                            <td><label><input type="text" class="form-control"></label></td>
                        </tr>
                        <tr>
                            <th>제목</th>
                            <td><label><input type="text" class="form-control"></label></td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td><textarea cols="100" rows="10" class="form-control"></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-cancel">취소</a>
                        <button type="button" class="btn btn-default btn-write">글쓰기</button>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>