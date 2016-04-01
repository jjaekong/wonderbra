<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub mypage point">
        <div class="page-header">
            <h2 class="title">적립금 내역</h2>
        </div>
        <div class="container">
            <div class="point-list">
                <table class="table">
                    <colgroup>
                        <col style="width:80px">
                        <col>
                        <col style="width:80px">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>날짜</th>
                            <th>내역</th>
                            <th>적립금</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2016.02.24</td>
                            <td class="details">적립금으로 물품구입 -10,000원</td>
                            <td><i class="minus">-10,000 원</i></td>
                        </tr>
                        <tr>
                            <td>2016.02.24</td>
                            <td>관리자가 임의로 적립금 수정(우수고객등)</td>
                            <td><i class="plus">10,000 원</i></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td class="details">총 사용가능 적립금</td>
                            <td>40,000 원</td>
                        </tr>
                    </tfoot>
                </table>
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
            <div class="notify">
                <ul>
                    <li>적립된 금액이 0원 이상 누적되었을 때, 사용하실 수 있습니다.</li>
                    <li>결제 시 적립금 사용 여부를 확인할 수 있는 안내문이 나옵니다.</li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>