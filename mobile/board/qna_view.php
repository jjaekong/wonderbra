<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub board">
        <div class="page-header">
            <h2 class="title">Q &amp; A</h2>
        </div>
        <div class="container">
            <div class="qna-view">
                <table class="table">
                    <colgroup>
                        <col style="width: 100px;">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th colspan="2">사이즈문의</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="content">
                            <td colspan="2">
                                상의 75b구매시 하의는 어떤사이즈로 오나요??? 
                            </td>
                        </tr>
                        <tr class="attach">
                            <th>첨부파일 <img src="/design/wonderbra/mobile/images/ico_attach.png" alt="" width="12"></th>
                            <td><a href="#">20160331001032018070001_b.jpg (276.4 KB)</a></td>
                        </tr>
                    </tbody>
                </table>
                <ul class="util-menu">
                    <li><a href="#"><img src="/design/wonderbra/mobile/images/ico_pencil_sm.png" alt="" width="12"> 수정</a></li>
                    <li><a href="#"><img src="/design/wonderbra/mobile/images/ico_trash.png" alt="" width="12"> 삭제</a></li>
                    <li><a href="#"><img src="/design/wonderbra/mobile/images/ico_balloon.png" alt="" width="12"> 답변</a></li>
                </ul>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-list">목록</a>
                    </p>
                </div>
            </div>
            <div class="reply-write">
                <h5>댓글쓰기</h5>
                <div class="form-group password">
                    <label>PASSWORD <input type="password" class="form-control input-sm" placeholder="패스워드"></label>
                </div>
                <div class="form-group content">
                    <textarea cols="100" rows="10" class="form-control"></textarea>
                    <div class="btn-area">
                        <p>
                            <button type="button" class="btn btn-default btn-submit">확인</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="reply-list">
                <ol>
                    <li>
                        <strong class="writer">원더브라</strong><span class="date">2016.02.01</span>
                        <div class="content">
                            댓글을 남겨주세요. 댓글을 남겨주세요. 댓글을 남겨주세요. <a href="#" class="btn-reply"><img src="/design/wonderbra/mobile/images/ico_balloon.png" alt="" width="12"> 댓글달기</a>
                        </div>
                    </li>
                    <li class="reply-reply">
                        <strong class="writer">원더브라</strong><span class="date">2016.02.01</span>
                        <div class="content">
                            댓글을 남겨주세요. 댓글을 남겨주세요.
                        </div>
                    </li>
                    <li>
                        <strong class="writer">원더브라</strong><span class="date">2016.02.01</span>
                        <div class="content">
                            댓글을 남겨주세요. 댓글을 남겨주세요.
                        </div>
                    </li>
                    <li>
                        <strong class="writer">원더브라</strong><span class="date">2016.02.01</span>
                        <div class="content">
                            댓글을 남겨주세요. 댓글을 남겨주세요.
                        </div>
                    </li>
                </ol>
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