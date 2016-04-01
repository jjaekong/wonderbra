<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage inquiry">
        <div class="page-header">
            <h2 class="title">1:1문의</h2>
        </div>
        <div class="container">
            <div class="inquiry-list">
                <table class="table">
                    <colgroup>
                        <col>
                        <col style="width: 80px;">
                        <col style="width: 80px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>제목</th>
                            <th>날짜</th>
                            <th>답변여부</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a></td>
                            <td>2016.02.01</td>
                            <td>미답변</td>
                        </tr>
                        <tr>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a></td>
                            <td>2016.02.01</td>
                            <td>답변완료</td>
                        </tr>
                        <tr>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a></td>
                            <td>2016.02.01</td>
                            <td>미답변</td>
                        </tr>
                        <tr>
                            <td class="title"><a href="#">사이즈문의 드립니다.</a></td>
                            <td>2016.02.01</td>
                            <td>답변완료</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <button type="button" class="btn btn-default btn-write">글쓰기</button>
                    </p>
                </div>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>