<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v_1
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main sl">
    <div class="breadcrumbs breadcrumbs02">
      <div class="breadcrumbs-inn">
        <?php
          if(function_exists( 'yoast_breadcrumb' )){
            yoast_breadcrumb( '<div id="breadcrumbs">', '</div>');
          }
        ?>
      </div>
    </div>
    <div id="recruit" class="sl-recruit">
      <div class="sl-recruit-inn">
        <div class="sl-recruit-inn-ttl subpage-ttl subpage-ttl02">
          <h2 class="under-line">院長からのメッセージ</h2>
        </div>
        <div class="sl-recruit-inn-content">
          <article class="d-fl sl-recruit-inn-content-arti">
            <figure>
              <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/recruit/recruit-01.png" alt="recruit">
            </figure>
            <div class="sl-recruit-inn-content-arti-txt">
              <h3>【想いと志をともに出来る仲間へ】</h3>
              <p>美容クリニックでの仕事は、お客様の悩みに寄り添い <br class="pc">お客様と感動をともに出来る仕事です。<br><br>美容クリニックでは医師、看護師、受付カウンセラーなど<br class="pc">様々な職種のスタッフがそれぞれの仕事に責任を持ち、ひとりひとりが"プロ”になることで、<br class="pc">お客様に喜んでいただけるクリニックが作れます。<br><br>リアンクリニックはひととの絆を大切に<br class="pc">美容医療を通じてお客様との絆を大切にしたい<br>という想いを込め誕生したクリニックです。<br><br>働いてくれるスタッフとも絆を大切にし、<br class="pc">永く人に寄り添うことの出来るクリニックを目指しています。<br><br>美容が好き、接客が好き。<br>自分の得意なことを活かし<br class="pc">私たちと一緒にリアンクリニックで働いてくれる方をお待ちしております。</p>
            </div>
          </article>
        </div>
      </div>
    </div>
    <div id="person" class="sl-tpyw">
      <div class="sl-tpyw-inn">
        <div class="sl-tpyw-inn-ttl subpage-ttl">
          <h2 class="under-line">求める人物像</h2>
        </div>
        <div class="sl-tpyw-inn-content">
          <div lcass="tpyw">
            <article class="tpyw-wr">
              <h2 class="tpyw-wr-ttl"><span class="list-no">01</span>多様なメンバーと<br class="sp">1つのゴールを目指せる人</h2>
              <div class="d-fl tpyw-wr-txt">
                <figure>
                  <img loading="lazy" src="https://lianclinic.net/renew2022/wp-content/uploads/recruit-02-new.jpg" alt="made">
                </figure>
                <p>・多様なメンバーと1つのゴールを目指せる方<br>・スタッフやお客様に対して主体的にコミュニケーションが取れ、 <br class="pc">異なる価値観の中でも、人を尊重出来る方</p>
              </div>
            </article>
            <article class="tpyw-wr">
              <h2 class="tpyw-wr-ttl"><span class="list-no">02</span>ポジティブ思考と実行力を<br class="sp">兼ね備えた人</h2>
              <div class="d-fl tpyw-wr-txt">
                <figure>
                  <img loading="lazy" src="https://lianclinic.net/renew2022/wp-content/uploads/recruit-03-new.jpg" alt="made">
                </figure>
                <p>・ポジティブ思考と実行力を兼ね備えた方<br>・組織において、自らがどのような役割で貢献できるかを考えられる方</p>
              </div>
            </article>
            <article class="tpyw-wr">
              <h2 class="tpyw-wr-ttl"><span class="list-no">03</span>仕事に「熱い想い」を持った人</h2>
              <div class="d-fl tpyw-wr-txt">
                <figure>
                  <img loading="lazy" src="https://lianclinic.net/renew2022/wp-content/uploads/recruit-04-new.jpg" alt="made">
                </figure><p>・仕事に「熱い想い」を持った方<br>・美容が好き<br>・美容看護師としての技術力を高めていきたい<br>・お客様を輝かせたい</p></div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <div id="appreq" class="sl-appreq">
      <div class="sl-appreq-inn">
        <div class="sl-appreq-inn-ttl subpage-ttl">
          <h2 class="under-line">募集要項</h2>
        </div>
        <div class="sl-appreq-inn-content">
          <div class="appreq">
            <h3 class="appreq-ttl">LIAN clinicで一緒に働いてくれるメンバーを募集しております。</h3>
            <!-- <p class="appreq-desc">クリエイティブを一緒に追求できるWEBデザイナーを募集します。
              コーポレートサイトからキャンペーンサイト、あるいはiPhone、iPadアプリ…時には映像やグラフィックなど、幅広い案件をお願いします。
              UI/UXデザインが得意な方、イラストが書ける方、デザインとコーディングどちらもやりたい方、等など、一人ひとりの特技を活かしながら、自分が伸ばしていきたいスキルを高めていく。そんな環境です。ディレクター・クライアント様任せではなく、あなたなりの発想やアイデアを形にして提案する意欲のある方をお待ちしています。
            </p>
            <p class="appreq-info">デザインチームの中心となって、 Webクリエイティブ全般を担当</p> -->
            <table class="appreq-tb">
              <tbody>
                <tr>
                  <th>職種</th>
                  <td>
                    <p>美容皮膚科医師</p>
                  </td>
                </tr>
                <tr><th>給与</th><td><p>未経験者：1,800万円〜<br>経験者：2,300万円〜<br>＊ボトックス、ヒアルロン酸、糸リフトの手技が問題なく行える方<br>＊上記の基本給に加えて売り上げに応じてインセンティブを毎月支給</p></td></tr>
                <tr>
                  <th>応募資格</th>
                  <td>
                    <p>１年以上継続して美容外科または皮膚科クリニックでの勤務経験がある方</p></td>
                </tr>
                <tr>
                  <th>勤務時間</th>
                  <td><p>9時～18時00分（休憩60分）
                      <br>定休日:月/水曜日
                      <br>※週4勤務相談可</p>
                  </td>
                </tr>
				        <tr>
                  <th>福利厚生<br>休暇<br>待遇</th>
                  <td><p>休暇：週休2日制・年末年始休暇・夏季休暇・有給休暇・出産/育児休暇・その他休暇<br>有給：6ヶ月経過後の年次有給休暇日数10日<br>昇給年1回/賞与年2回（業績による）<br>交通費支給（万まで）※確認中<br>＊美容施術割引あり</p>
                  </td>
                </tr>
                <tr>
                  <th>勤務地</th>
                  <td>
                    <p>東京　表参道</p>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="appreq-tb" style="margin-top:100px;">
              <tbody>
                <tr>
                  <th>職種</th>
                  <td>
                    <p>美容皮膚科看護師<br></p>
                  </td>
                </tr>
                <tr><th>給与</th><td><p>35万円〜<br>＊前職の給与を考慮<br>＊上記の基本給に加えて売り上げに応じてインセンティブを毎月支給</p></td></tr>
                <tr>
                  <th>応募資格</th>
                  <td>
                    <p>１年以上継続して美容外科または皮膚科クリニックでの勤務経験がある方</p></td>
                </tr>
                <tr>
                  <th>勤務時間</th>
                  <td><p>9時00分～18時00分（休憩60分）<br>定休日:月/水曜日<br>＊今後シフト制に変更予定</p>
                  </td>
                </tr>
				        <tr>
                  <th>福利厚生<br>休暇<br>待遇</th>
                  <td><p>休暇：週休2日制・年末年始休暇・夏季休暇・有給休暇・出産/育児休暇・その他休暇<br>有給：6ヶ月経過後の年次有給休暇日数10日<br>昇給年1回/賞与年2回（業績による）<br>交通費支給（万まで）※確認中<br>＊美容施術割引あり</p>
                  </td>
                </tr>
                <tr>
                  <th>勤務地</th>
                  <td>
                    <p>東京　表参道</p>
                  </td>
                </tr>
              </tbody>
            </table>
			  <table class="appreq-tb" style="margin-top:100px;">
              <tbody>
                <tr>
                  <th>職種</th>
                  <td>
					          <p>受付・カウンセラー</p>
                  </td>
                </tr>
                <tr>
                  <th>応募資格</th>
                  <td>
                    <p>１年以上継続して美容外科または皮膚科クリニックでの勤務経験がある方</p></td>
                </tr>
                <tr><th>給与</th><td><p>受付:22万円〜<br>カウンセラー:25万円〜<br>＊前職の給与を考慮<br>＊上記の基本給に加えて売り上げに応じてインセンティブを毎月支給</p></td></tr>
                      <tr>
                        <th>勤務時間</th>
                        <td>
                          <p>9時～18時00分（休憩60分）<br>定休日:月/水曜日<br>＊今後シフト制に変更予定</p>
                        </td>
                      </tr>
                <tr>
                  <th>福利厚生<br>休暇<br>待遇</th>
                  <td><p>休暇：週休2日制・年末年始休暇・夏季休暇・有給休暇・出産/育児休暇・その他休暇<br>有給：6ヶ月経過後の年次有給休暇日数10日<br>昇給年1回/賞与年2回（業績による）<br>交通費支給（万まで）※確認中<br>＊美容施術割引あり</p>
                  </td>
                </tr>
                <tr>
                  <th>勤務地</th>
                  <td>
                    <p>東京　表参道</p>
                  </td>
                </tr>
              </tbody>
            </table>
			      <table class="appreq-tb" style="margin-top:100px;">
              <tbody>
                <tr><th>職種</th><td><p>ウェブ広報</p></td></tr>
                <tr><th>応募資格</th><td><p>施術風景の撮影、Instagramの投稿画像・リールの作成、Tiktok撮影・編集、Youtubeの撮影、各SNS Up設定、雑務等<br>PhotoshopやIllustratorが使えてWebデザインの実務経験のある方</p></td></tr>
                <tr><th>給与</th><td><p>32万円＋インセンティブ<br>＊上記の基本給に加えて売り上げに応じてインセンティブを毎月支給</p></td></tr>
                      <tr><th>勤務時間</th><td><p>9時00分～18時00分（休憩60分）<br>残業手当あり<br>定休日:月/水曜日<br>＊今後シフト制に変更予定</p></td></tr>
                <tr><th>福利厚生<br>休暇<br>待遇</th><td><p>休暇：週休2日制・年末年始休暇・夏季休暇・有給休暇・出産/育児休暇・その他休暇<br>有給：6ヶ月経過後の年次有給休暇日数10日<br>昇給年1回/賞与年2回（業績による）<br>交通費支給（万まで）※確認中<br>＊美容施術割引あり</p></td>
                </tr>
                <tr>
                  <th>勤務地</th>
                  <td><p>東京　表参道</p>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="appreq-tb" style="margin-top:100px;">
              <tbody>
                <tr>
                  <th>職種</th>
                  <td><p>バックオフィス （パート）</p></td>
                </tr>
                <tr>
                  <th>給与</th>
                  <td><p>時給 1500円</p></td>
                </tr>
                <tr>
                  <th>応募資格</th>
                  <td><p>バックオフィス業務 美容クリニック経験者優遇</p></td>
                </tr>
                <tr>
                  <th>勤務時間</th>
                  <td><p>10-17時 （休憩60分）<br>※ 週3-5日</p></td>
                </tr>
                <tr>
                  <th>待遇</th>
                  <td><p>交通費支給（3万まで）</p><p>美容施術割引あり</p></td>
                </tr>
                <tr>
                  <th>業務内容</th>
                  <td><p>LINEチャット返信、経理、事務作業、撮影補助など</p></td>
                </tr>
                <tr>
                  <th>勤務地</th>
                  <td><p>東京　表参道</p></td>
                </tr>
              </tbody>
            </table>
            <div class="appreq-btn">
              <div class="menu-btn more-btn">
                <a href="<?php echo esc_html( home_url('/') ) ?>inquiry" rel="alternate">ENTRY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="flow" class="sl-rf">
      <div class="sl-rf-inn">
        <div class="sl-rf-inn-ttl subpage-ttl">
          <h2 class="under-line">採用の流れ</h2>
        </div>
        <div class="sl-rf-inn-content">
          <div class="d-fl rf">
            <div class="rf-wr">
              <div class="rf-wr-step">
                <h3>Step 01</h3>
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-desktop.svg"
                    alt="desktop">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-desktop-sp.png"
                    alt="desktop">
                </figure>
              </div>
              <div class="rf-wr-txt">
                <h2>エントリー</h2>
                <p>Web上のお問合せフォームより必要情報の入力をお願いいたします。<br>
                  送信後担当者よりご連絡を差し上げますのでお待ち下さい。</p>
              </div>
            </div>
            <div class="progress">
              <span class="line first"></span>
            </div>
            <div class="rf-wr">
              <div class="rf-wr-step">
                <h3>Step 02</h3>
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-edit.svg"
                    alt="edit">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-edit-sp.png"
                    alt="edit">
                </figure>
              </div>
              <div class="rf-wr-txt">
                <h2>書類提出</h2>
                <p>エントリーシート、履歴書、職務経歴書の提出をお願いします。<br>
                  送付先に関しましては、返信メールにてお知らせいたします。</p>
              </div>
            </div>
            <div class="progress">
              <span class="line"></span>
            </div>
            <div class="rf-wr">
              <div class="rf-wr-step">
                <h3>Step 03</h3>
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-person.svg"
                    alt="person">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-person-sp.png"
                    alt="person">
                </figure>
              </div>
              <div class="rf-wr-txt">
                <h2>面接</h2>
                <p>書類審査通過者のみにご連絡いたします。<br>
                  メールで面接希望日の設定し、当日は本社にて面接いたします。<br>
                  なお、面接時の服装は私服で構いません。</p>
              </div>
            </div>
            <div class="progress">
              <span class="line"></span>
              <span class="arrow"></span>
            </div>
            <div class="rf-wr">
              <div class="rf-wr-step">
                <h3>Step 04</h3>
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-check.svg"
                    alt="check">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-check-sp.png"
                    alt="check">
                </figure>
              </div>
              <div class="rf-wr-txt">
                <h2>採用</h2>
                <p>面接後、1週間以内に結果の通知をメールにてお知らせいたします。<br>
                  なお、入社後半年を試用期間といたします。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>

<?php
get_footer();
