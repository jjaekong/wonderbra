<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="board qna">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">Q &amp; A</h2>
            </div>
        </div>
        <div class="container">
            <div class="search">
                <form class="form-inline" action="#" method="post">
                    <div class="form-group">
                        <select class="form-control" name="">
                            <option value="#">전체</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="board-keyword">검색어</label>
                        <input type="text" class="form-control" id="board-keyword">
                    </div>
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                        <span class="sr-only">검색</span>
                    </button>
                </form>
            </div>
            <div class="qna-list">
                <table class="table">
                    <colgroup>
                        <col width="100">
                        <col width="100">
                        <col>
                        <col width="100">
                        <col width="100">
                        <col width="100">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>product</th>
                            <th>title</th>
                            <th>writer</th>
                            <th>date</th>
                            <th>hit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11</td>
                            <td><img src="/design/wonderbra/images/dummy/img_qna_thumb.jpg" alt="썸네일"></td>
                            <td class="title"><a href="#">사이즈 문의합니다</a></td>
                            <td>작성자</td>
                            <td><time>2016.02.01</time></td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="title"><a href="#"><img src="/design/wonderbra/images/sub/ico_answer.gif" alt="답변"> 안녕하세요 원더브라입니다.</a></td>
                            <td>작성자</td>
                            <td><time>2016.02.01</time></td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td><img src="/design/wonderbra/images/dummy/img_qna_thumb.jpg" alt="썸네일"></td>
                            <td class="title"><a href="#">사이즈 문의합니다</a></td>
                            <td>작성자</td>
                            <td><time>2016.02.01</time></td>
                            <td>76</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="title"><a href="#"><img src="/design/wonderbra/images/sub/ico_answer.gif" alt="답변"> 안녕하세요 원더브라입니다.</a></td>
                            <td>작성자</td>
                            <td><time>2016.02.01</time></td>
                            <td>76</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default">글쓰기</a>
                    </p>
                </div>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="이전">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="다음">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>