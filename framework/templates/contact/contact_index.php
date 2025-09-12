<?php include(__DIR__ . '/contact_index_header.php'); ?>
<?php use Netra\Lib as nlib; ?>


<section class="sec --contact" id="link09">
    <h2 class="sec__ttl">
        <span class="main en">CONTACT</span>
        <span class="sub">お問い合わせフォーム</span>
    </h2>
    <p class="sec__txt">各種お問い合わせの他、ご意見などもお聞かせください。</p>
    <form class="h-adr" method="post" action="<?php echo Config::$base_url; ?>/confirm#link09" enctype="multipart/form-data">
        <span class="p-country-name" style="display:none;">Japan</span>
        <div class="contact-area">
            <dl class="contact-area__form">
                <dt><label for="form_name">お名前</label><span class="need">必須</span></dt>
                <dd>
                    <input type="text" id="form_name" name="name" placeholder="" value="<?php echo nlib\Util::h($values['name']); ?>">
                    <?php echo $values['name_error_message']; ?>
                </dd>
                <dt><label for="form_name_kana">フリガナ</label></dt>
                <dd>
                    <input type="text" id="form_name_kana" name="kana" placeholder="" value="<?php echo nlib\Util::h($values['kana']); ?>">
                    <?php echo $values['kana_error_message']; ?>
                </dd>
            </dl>
            <dl class="contact-area__form">
                <dt><label for="form_postal">お住まい</label></dt>
                <dd>
                    〒<input type="text" id="form_postal" name="zip" class="input_postal p-postal-code" placeholder="" value="<?php echo nlib\Util::h($values['zip']); ?>">
                    <?php echo $values['zip_error_message']; ?>
                    <a href="#" class="postal-btn">郵便番号から住所を検索</a>
                    <input type="text" id="form_address" name="address" class="p-region p-locality p-street-address p-extended-address" value="<?php echo nlib\Util::h($values['address']); ?>">
                    <?php echo $values['address_error_message']; ?>
                </dd>
            </dl>
            <dl class="contact-area__form">
                <dt><label for="form_tel">電話番号</label><span class="need">必須</span></dt>
                <dd><input type="text" id="form_tel" name="tel" placeholder="" value="<?php echo nlib\Util::h($values['tel']); ?>">
                <?php echo $values['tel_error_message']; ?></dd>
            </dl>
            <dl class="contact-area__form">
                <dt><label for="form_email">メールアドレス</label><span class="need">必須</span></dt>
                <dd><input type="email" id="form_email" name="email" placeholder="" value="<?php echo nlib\Util::h($values['email']); ?>">
                <?php echo $values['email_error_message']; ?></dd>
            </dl>
            <dl class="contact-area__form">
                <dt><label for="form_email_check">メールアドレス（確認用）</label><span class="need">必須</span></dt>
                <dd><input type="email" id="form_email_check" name="email_check" placeholder="" value="<?php echo nlib\Util::h($values['email_check']); ?>">
                <?php echo $values['email_check_error_message']; ?></dd>
            </dl>
            <dl class="contact-area__form">
                <dt><label for="form_content">お問い合わせ内容</label><span class="need">必須</span></dt>
                <dd><textarea id="form_content" name="content"><?php echo nlib\Util::h($values['content']); ?></textarea>
                <?php echo $values['content_error_message']; ?></dd>
            </dl>
            <div class="policy-area">
                <h3 class="policy-area__head">ココスタディ　プライバシーポリシー</h3>
                <p class="policy-area__txt">[ココスタディ]（以下、「当施設」といいます）は、利用者の皆様の個人情報を適切に保護・管理することを重要な責務と認識し、以下のとおりプライバシーポリシーを定め、個人情報の保護に努めます。</p>
                <h4 class="policy-area__ttl">1. 取得する個人情報</h4>
                <p class="policy-area__txt">当施設は、以下の情報を利用者から取得することがあります。</p>
                <ul class="policy-area__ul">
                    <li>氏名</li>
                    <li>住所</li>
                    <li>電話番号</li>
                    <li>メールアドレス</li>
                    <li>年齢または生年月日</li>
                    <li>利用日時・回数・滞在時間等の利用履歴</li>
                    <li>お問い合わせ内容</li>
                    <li>防犯カメラによる映像記録</li>
                </ul>
                <h4 class="policy-area__ttl">2. 個人情報の利用目的</h4>
                <p class="policy-area__txt">取得した個人情報は、以下の目的で利用いたします。</p>
                <ul class="policy-area__ul">
                    <li>施設利用管理</li>
                    <li>予約やキャンセルの受付・確認</li>
                    <li>お問い合わせ対応</li>
                    <li>お知らせや重要事項の通知</li>
                    <li>防犯および安全管理</li>
                    <li>利用状況の分析によるサービス改善</li>
                </ul>
                <h4 class="policy-area__ttl">3. 個人情報の第三者提供について</h4>
                <p class="policy-area__txt">当施設は、法令に基づく場合を除き、本人の同意なく第三者に個人情報を提供することはありません。</p>
                <h4 class="policy-area__ttl">4. 個人情報の管理</h4>
                <p class="policy-area__txt">当施設は、個人情報の漏えい、紛失、改ざんおよび不正アクセスを防止するため、適切なセキュリティ対策を講じます。</p>
                <h4 class="policy-area__ttl">5. 個人情報の開示・訂正・削除について</h4>
                <p class="policy-area__txt">利用者ご本人から個人情報の開示、訂正、利用停止、削除等の申し出があった場合は、ご本人確認の上、速やかに対応いたします。</p>
                <h4 class="policy-area__ttl">6. 法令遵守と見直し</h4>
                <p class="policy-area__txt">当施設は、個人情報の保護に関する法令およびその他の規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
                <h4 class="policy-area__ttl">7. お問い合わせ窓口</h4>
                <p class="policy-area__txt">本ポリシーに関するお問い合わせは、090-3920-9064 までご連絡ください。</p>
            </div>
            <div class="agree-check"><label for="agree_check">
                <input type="checkbox" id="agree_check" name="agree" value="同意する" <?php echo $values['agree'] == '同意する' ? 'checked="checked"': ''; ?>>上記にご了承いただけましたら<br>｢確認する」ボタンを押してください。</label>
                <?php echo $values['agree_error_message']; ?>
                </div>
            <button type="submit" class="submit-btn" id="contact_submit">確認する</button>
            <input type="hidden" id="csrf_token_key" name="csrf_token_key" value="<?php echo nlib\Util::h($csrf_token_key); ?>" />
        </div>
    </form>
</section>

<?php include(__DIR__ . '/contact_index_footer.php'); ?>