
<section class="sec --law" id="link10">
    <h2 class="sec__ttl aco-head">
        <span class="sub sm">特定商取引法に基づく表記</span>
    </h2>
    <dl class="law-dl aco-body">
        <dt>事業者名</dt>
        <dd>株式会社　中村企画</dd>
        <dt>代表者名</dt>
        <dd>代表取締役　中村友則</dd>
        <dt>住所</dt>
        <dd>京都府京都市左京区田中野神町１８番地</dd>
        <dt>電話番号</dt>
        <dd>070-1535-5849</dd>
        <dt>販売価格</dt>
        <dd>
            ・入会金<br>
            ・カード発行手数料<br>
            ・会費<br>
            ・法令に定める税
        </dd>
        <dt>支払い方法</dt>
        <dd>クレジットカード決済</dd>
        <dt>支払時期</dt>
        <dd>利用カード会社引落の規定に準ずる</dd>
        <dt>商品の引渡時期（役務の提供時期）</dt>
        <dd>当社所定の手続き終了後（店頭での利用者承認後）、直ちにご利用いただけます。</dd>
        <dt>返還（返金）に関する事項</dt>
        <dd>WEBで決済及びお支払いいただいた入会時諸費用は、理由の如何に関わらずご返金できません。また、退会、除名に伴う返還（返金）に関しては、当社所定の会員規定に基づきます。</dd>
    </dl>
</section>


</div><!-- /.wrap -->

<ul class="fixed-btn">
    <li><a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=CT9XWHErzN5pnQ8&f=00001" target="_blank" class="web"><img src="assets/img/common/fixed_txt01.svg" alt="Web入会"></a></li>
    <li><a href="https://lin.ee/rmWTMYr" target="_blank" class="mypage"><img src="assets/img/common/fixed_txt02.svg" alt="LINE公式アカウント"></a></li>
</ul>

<footer class="site-footer">
    <p class="copyright">
        Copyrights&copy; COCO STUDY.
    </p>
</footer>



<!---  jQuery 読み込みコード  --->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
$('.aco-head').click(function() {
    $(this).next().slideToggle();
    $(this).toggleClass('active');
});
</script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
function checkBreakPoint() {
	w = $(window).width();
	if (w <= 768) {
        $(".faciliy-slide").not('.slick-initialized').slick({
            infinite: true,
            centerMode: true,
            centerPadding: "10%",
            slidesToShow: 1,
            slidesToScroll: 1,
            swipeToSlide: true,
            responsive: [
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                },
            },
            ],
        });
	} else {
		// PC向け
		$('.faciliy-slide.slick-initialized').slick('unslick');
	}
}
// ウインドウがリサイズする度にチェック
$(window).resize(function(){
	checkBreakPoint();
});
// 初回チェック
checkBreakPoint();
</script>

<link href="assets/css/modaal.css" rel="stylesheet" type="text/css" />
<script src="assets/js/plugin/modaal.min.js"></script>

<!-- お問い合わせフォームjs -->
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<script src="assets/js/contact_form.js"></script>

<script src="assets/js/common.js"></script>
</body>
</html>
