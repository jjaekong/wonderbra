<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1" class="membership join step1">
        <div class="container">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="membership-wrapper">
                    <div class="membership-inner">
                        <div class="page-header">
                            <h2 class="page-title">JOIN</h2>
                        </div>
                        <ol class="steps" aria-hidden="true">
                            <li class="active">1</li>
                            <li>2</li>
                        </ol>
                        <div class="agree">
                            <h4><input type="checkbox"> 전체동의</h4>
                            <ul>
                                <li><label><input type="checkbox"> 이용약관</label><button tpye="button" class="btn btn-default btn-details">내용보기</button></li>
                                <li><label><input type="checkbox"> 개인정보 수집 및 이용 안내</label><button tpye="button" class="btn btn-default btn-details">내용보기</button></li>
                                <li>
                                    <label><input type="checkbox"> 마케팅 수신동의</label><p>
                                        (<label><input type="checkbox">이메일</label> <label><input type="checkbox">SMS</label>)
                                    </p>
                                    <div>
                                        <p>
                                            쇼핑몰에서 제공하는 신상품 소식/ 할인쿠폰을 무상으로 보내드립니다!<br>
                                            단, 상품 구매 정보는 수신동의 여부 관계없이 발송됩니다.<br>
                                            <em>제공 동의를 하지 않으셔도 서비스 이용에는 문제가 없습니다.</em>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-default btn-cancel">취소</a>
                                    <button type="button" class="btn btn-default btn-submit">다음</button>
                                </p>
                            </div>
                        </div>
                        <div class="terms">
                            <h4>이용약관</h4>
                            <textarea cols="100" rows="10" class="form-control" readonly="readonly">
인터넷 쇼핑몰 『엠코르셋 주식회사  사이버 몰』회원 약관

제1조(목적)
이 약관은 엠코르셋 주식회사  회사(전자상거래 사업자)가 운영하는 엠코르셋 주식회사  사이버 몰(이하 “몰”이라 한다)에서 제공하는 
인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.

※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」

제1조(목적)
이 약관은 엠코르셋 주식회사  회사(전자상거래 사업자)가 운영하는 엠코르셋 주식회사  사이버 몰(이하 “몰”이라 한다)에서 제공하는 
인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.

※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」
                            </textarea>
                        </div>
                        <div class="privacy">
                            <h4>개인정보 수집·이용</h4>
                            <table class="table">
                                <colgroup>
                                    <col style="width: 80px;">
                                    <col style="width: 220px;">
                                    <col style="width: 220px;">
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>구분</th>
                                        <th>목적</th>
                                        <th>항목</th>
                                        <th>보유기간</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>필수정보</th>
                                        <td>회원제 서비스 이용 / 본인확인</td>
                                        <td>이름, 아이디, 비밀번호, 생일, 성별,<br> 이메일, 주소, 연락처, 휴대폰</td>
                                        <td>회원탈퇴 후 5일까지</td>
                                    </tr>
                                    <tr>
                                        <th>선택정보</th>
                                        <td>마케팅 활용(이벤트, 맞춤형 광고)</td>
                                        <td>휴대폰, 이메일, 쿠키정보</td>
                                        <td>회원탈퇴 후 5일까지</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>* 귀하께서는 쇼핑몰에서 위와 같이 수집하는 개인정보에 대해, 동의하지 않거나 개인정보를 기재하지 않음으로써 거부할 수 있습니다.
   다만, 이때 회원에게 제공되는 서비스가 제한될 수 있습니다. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>