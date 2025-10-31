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
          <h2 class="under-line">代表からのメッセージ</h2>
        </div>
        <div class="sl-recruit-inn-content">
          <article class="d-fl sl-recruit-inn-content-arti">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/recruit-01.png" alt="recruit">
            </figure>
            <div class="sl-recruit-inn-content-arti-txt">
              <h3>【想いと志をともに出来る仲間へ】</h3>
              <p>メディカルアートメイクという仕事は、お客様の悩みに寄り添い、 <br class="pc">お客様と感動をともに出来る仕事です。<br><br>
                看護師として患者様の生活の質を支える・より質を上げるという点において<br class="pc">深く関わりのある技術であり、ボディイメージの悩みを抱える方々を<br class="pc">これまで支えて来ました。<br><br>また、アートメイクにおけるお客様との関わりは <br class="pc">
                ”技術力×コミュニケーション”力という今までの看護師としての<br class="pc">
                キャリアにおける新しい分野であり、MED BEAUTYではそのキャアリアップを<br class="pc">支える役割をも果たして参りました。<br><br>これからもアーティストそれぞれの高い志や気概をもち<br class="pc">互いに高めあいながら励んでまいります。</p>
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/recruit-02.png" alt="made">
                </figure>
                <p>・多様なメンバーと1つのゴールを目指せる方<br>・スタッフやお客様に対して主体的にコミュニケーションが取れ、 <br class="pc">異なる価値観の中でも、人を尊重出来る方</p>
              </div>
            </article>
            <article class="tpyw-wr">
              <h2 class="tpyw-wr-ttl"><span class="list-no">02</span>ポジティブ思考と実行力を<br class="sp">兼ね備えた人</h2>
              <div class="d-fl tpyw-wr-txt">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/recruit-03.png" alt="made">
                </figure>
                <p>・ポジティブ思考と実行力を兼ね備えた方<br>・組織において、自らがどのような役割で貢献できるかを考えられる方</p>
              </div>
            </article>
            <article class="tpyw-wr">
              <h2 class="tpyw-wr-ttl"><span class="list-no">03</span>アートメイクという仕事に「熱い想い」を持った人</h2>
              <div class="d-fl tpyw-wr-txt">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/recruit-04.png" alt="made">
                </figure>
                <p>・アートメイクという仕事に「熱い想い」を持った方<br>・アートメイクが好き<br>・アートメイクの技術を高めていきたい<br>・アートメイクでお客様をか輝かせたい<br>上記のような向上心のある方。</p>
              </div>
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
            <h3 class="appreq-ttl">MEDBEAUTYのアートメイク専属アーティストを募集します。</h3>
            <!-- <p class="appreq-desc">クリエイティブを一緒に追求できるWEBデザイナーを募集します。
              コーポレートサイトからキャンペーンサイト、あるいはiPhone、iPadアプリ…時には映像やグラフィックなど、幅広い案件をお願いします。
              UI/UXデザインが得意な方、イラストが書ける方、デザインとコーディングどちらもやりたい方、等など、一人ひとりの特技を活かしながら、自分が伸ばしていきたいスキルを高めていく。そんな環境です。ディレクター・クライアント様任せではなく、あなたなりの発想やアイデアを形にして提案する意欲のある方をお待ちしています。
            </p>
            <p class="appreq-info">デザインチームの中心となって、 Webクリエイティブ全般を担当</p> -->
            <table class="appreq-tb">
              <tbody>
                <tr>
                  <th>主な業務内容</th>
                  <td>
                    <p>・リップ、眉、アイラインのアートメイク。それに付随する事務作業。</p>
                  </td>
                </tr>
                <tr>
                  <th>応募資格</th>
                  <td>
                    <p>・正看護師、または准看護師</p>
                    <p>・眉のアートメイクの施術経験は必須。</p>
                    <p>・アートメイクの症例が700例以上<br class="sp">
                      (500以上だが700以 下の場合ご相談ください) </p>
                    <p>・コミュニケーション能力があり、接客業が好きな方。</p>
                  </td>
                </tr>
                <tr>
                  <th>給与</th>
                  <td>
                    <p>出来高制 応相談となります。<br>
                      経験・技術力・接客力を考慮し、面談の上決定します。</p>
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
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-desktop.svg"
                    alt="desktop">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-desktop-sp.png"
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
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-edit.svg"
                    alt="edit">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-edit-sp.png"
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
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-person.svg"
                    alt="person">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-person-sp.png"
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
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-check.svg"
                    alt="check">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit/icon-check-sp.png"
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
