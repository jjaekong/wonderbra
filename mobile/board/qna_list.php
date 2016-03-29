<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board">
        <div class="page-header">
            <h2 class="title">Q &amp; A</h2>
        </div>
        <div class="container">
            <div class="search-area">
                <div class="form-group">
                    <select name="" class="form-control input-sm">
                        <option value="">전체</option>
                    </select>
                    <label>
                        <input type="text" class="form-control input-sm">
                    </label>
                    <button type="button" class="btn btn-default btn-search">
                        <span class="glyphicon glyphicon-search"></span>
                        <span class="sr-only">검색</span>
                    </button>
                </div>
            </div>
            <div class="qna-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>product</th>
                            <th>title</th>
                            <th>writer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11</td>
                            <td><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="title"><a href="#">사이즈 문의합니다.</a></td>
                            <td>작성자</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="title"><a href="#"><img src="/design/wonderbra/mobile/images/ico_balloon.png" alt="" width="12"> 안녕하세요~ 원더브라 입니다.</a></td>
                            <td>원더브라</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td><img class="img-responsive" src="/design/wonderbra/mobile/images/dummy/img_product_thumb.jpg" alt=""></td>
                            <td class="title"><a href="#">사이즈 문의합니다.</a></td>
                            <td>작성자</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="title"><a href="#"><img src="/design/wonderbra/mobile/images/ico_balloon.png" alt="" width="12"> 안녕하세요~ 원더브라 입니다.</a></td>
                            <td>원더브라</td>
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