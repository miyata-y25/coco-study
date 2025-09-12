<?php include(__DIR__ . '/../common/header.php'); ?>
<?php use Netra\Lib as nlib; ?>

<section class="sec --contact" id="link09">
    <h2 class="sec__ttl">
        <span class="main en">CONTACT</span>
        <span class="sub">お問い合わせフォーム 確認画面</span>
    </h2>
    <p class="sec__txt center">入力内容をご確認いただきましたら<br class="sp-show">｢送信する」ボタンを押してください。</p>
    <form method="post" action="<?php echo Config::$base_url; ?>/thanks" enctype="multipart/form-data">
        <div class="contact-area">
            <dl class="contact-area__form">
                <dt>お名前</dt>
                <dd><?php echo nlib\Util::h($values['name']); ?></dd>
                <dt>フリガナ</dt>
                <dd><?php echo nlib\Util::h($values['kana']); ?></dd>
            </dl>
            <dl class="contact-area__form">
                <dt>お住まい</dt>
                <dd>
                    〒<?php echo nlib\Util::h($values['zip']); ?><br>
                    <?php echo nlib\Util::h($values['address']); ?>
                </dd>
            </dl>
            <dl class="contact-area__form">
                <dt>電話番号</dt>
                <dd><?php echo nlib\Util::h($values['tel']); ?></dd>
            </dl>
            <dl class="contact-area__form">
                <dt>メールアドレス</dt>
                <dd><?php echo nlib\Util::h($values['email']); ?></dd>
            </dl>
            <dl class="contact-area__form">
                <dt>お問い合わせ内容</dt>
                <dd><?php echo nlib\Util::h($values['content']); ?></dd>
            </dl>
            <button type="submit" class="submit-btn">送信する</button>
            <input type="hidden" id="csrf_token_key" name="csrf_token_key" value="<?php echo nlib\Util::h($csrf_token_key); ?>" />
        </div>
    </form>
</section>

<?php include(__DIR__ . '/../common/footer.php'); ?>