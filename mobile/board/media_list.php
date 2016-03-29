<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board">
        <div class="page-header">
            <h2 class="title">MEDIA</h2>
        </div>
        <div class="container">
            <div class="category">
                <ul>
                    <li role="presentation" class="active"><a href="#">ALL</a></li>
                    <li role="presentation"><a href="#">MAGAZINE</a></li>
                    <li role="presentation"><a href="#">NEWS</a></li>
                    <li role="presentation"><a href="#">VIDEO</a></li>
                </ul>
            </div>
            <div class="media-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>title</th>
                            <th>date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11</td>
                            <td class="title"><a href="#">사이즈 문의합니다.</a></td>
                            <td>2016.02.01</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="title"><a href="#">안녕하세요~ 원더브라 입니다.</a></td>
                            <td>2016.02.01</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td class="title"><a href="#">사이즈 문의합니다.</a></td>
                            <td>2016.02.01</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="title"><a href="#">안녕하세요~ 원더브라 입니다.</a></td>
                            <td>2016.02.01</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-write">글쓰기</a>
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