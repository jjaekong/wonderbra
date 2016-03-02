<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="special event board">
        <div class="page-header">
            <div class="container">
                <h2 class="page-title">EVENT</h2>
            </div>
        </div>
        <div class="container">
            <div class="category">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">ALL</a></li>
                    <li role="presentation"><a href="#">EVENT NOW</a></li>
                    <li role="presentation"><a href="#">EVENT FINISHED</a></li>
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
            <div class="board-view">
                <article>
                    <header>
                        <h3>매혹적인 '미란다커 콜라보 패키지' 공개</h3>
                        <time>2016.02.01</time>
                    </header>
                    <div class="details">
                        <div>
                            <p class="text-center"><img src="/design/wonderbra/images/dummy/img_special_event.jpg"></p>
                        </div>
                    </div>
                </article>
                <div class="reply-form">
                    <div>
                        <h5>댓글쓰기</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="reply-content">댓글 내용</label>
                                <textarea id="reply-content" class="form-control" cols="10" rows="3"></textarea>
                                <button class="btn btn-default" type="submit">확인</button>
                            </div>
                        </form>
                    </div>
                </div>
                <ul class="util">
                    <li class="edit"><a href="#">수정</a></li>
                    <li class="delete"><a href="#">삭제</a></li>
                    <li class="reply"><a href="#">답변</a></li>
                </ul>
                <a class="btn btn-default btn-list" href="#">목록</a>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>