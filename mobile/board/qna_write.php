<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board">
        <div class="page-header">
            <h2 class="title">Q &amp; A</h2>
        </div>
        <div class="container">
            <div class="qna-write">
                <table class="table">
                    <colgroup>
                        <col style="width: 70px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>이름</th>
                            <td>
                                <label>
                                    <input type="text" class="form-control input-sm">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th>비밀번호</th>
                            <td>
                                <label>
                                    <input type="password" class="form-control input-sm">
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
                                    <input type="text" class="form-control input-sm">
                                </label>
                                <button type="button" class="btn btn-default btn-attach">첨부파일</button>
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