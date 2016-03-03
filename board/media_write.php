<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="board media">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">MEDIA</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">ALL</a></li>
                    <li role="presentation"><a href="#">MAGAZINE</a></li>
                    <li role="presentation"><a href="#">NEWS</a></li>
                    <li role="presentation"><a href="#">VIDEO</a></li>
                </ul>
            </div>
            <div class="sorter">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="view">
                            <strong>VIEW</strong>
                            <ul>
                                <li class="active"><a href="#"><img src="/design/wonderbra/images/sub/ico_view_col.gif" alt=""></a></li>
                                <li><a href="#"><img src="/design/wonderbra/images/sub/ico_view_row.gif" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-write">
                <form action="#" method="post">
                    <table class="table">
                        <colgroup>
                            <col width="200">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <td><label for="media-writer">이름</label></td>
                                <td><input id="media-writer" type="text" class="form-control" name="#"></td>
                            </tr>
                            <tr>
                                <td><label for="media-password">비밀번호</label></td>
                                <td><input id="media-password" type="password" class="form-control" name="#"></td>
                            </tr>
                            <tr>
                                <td><label for="media-title">제목</td>
                                <td><input id="media-title" type="text" class="form-control" name="#"></td>
                            </tr>
                            <tr>
                                <td><label for="media-content">내용</label></td>
                                <td><textarea id="media-content" class="form-control" cols="10" rows="5" name="#"></textarea></td>
                            </tr>
                            <tr>
                                <td><label for="media-attach">첨부파일</td>
                                <td><input id="media-attach" type="file" class="form-control" name="#"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-default btn-cancel">취소</a>
                            <button type="submit" class="btn btn-default btn-submit">확인</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>