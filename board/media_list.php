<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
</head>
<body>
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
            <div class="media-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>title</th>
                            <th>date</th>
                            <th>hit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="title"><a class="title" href="#">매혹적인 '미란다커 콜라보 패키지' 공개</a></td>
                            <td><time>2016.02.01</time></td>
                            <td>654</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="title"><a class="title" href="#">매혹적인 '미란다커 콜라보 패키지' 공개</a></td>
                            <td><time>2016.02.01</time></td>
                            <td>543</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="title"><a class="title" href="#">매혹적인 '미란다커 콜라보 패키지' 공개</a></td>
                            <td><time>2016.02.01</time></td>
                            <td>454</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="title"><a class="title" href="#">매혹적인 '미란다커 콜라보 패키지' 공개</a></td>
                            <td><time>2016.02.01</time></td>
                            <td>432</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="title"><a href="#">매혹적인 '미란다커 콜라보 패키지' 공개</a></td>
                            <td><time>2016.02.01</time></td>
                            <td>121</td>
                        </tr>
                    </tbody>
                </table>
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