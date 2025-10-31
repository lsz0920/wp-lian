<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v_1
 
Template Name: 表参道
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main sl">
    <div class="breadcrumbs">
      <div class="breadcrumbs-inn" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    }?>
      </div>
    </div>
    <div id="clinic" class="sl-clinic">
      <div class="sl-clinic-inn sbprice-inn">
        <div class="sl-clinic-inn-ttl subpage-ttl">
          <h1 class="under-line">MED BEAUTY 表参道院</h1>
        </div>
        <div class="sl-clinic-inn-content sbprice-content">
          <div class="sl-clinic-inn-content-desc">
            <p>MED BEAUTY表参道院はMED BEAUTY直営の『LIAN clinic (リアンクリニック)』内にございます。</p>
            <p>当クリニックではスタッフや院内の感染症対策を徹底おりましすので、安心してお越しください。スタッフ一同皆様にお会いできますことを楽しみにしております。ご質問やご予約は公式LINEよりお気軽にご連絡ください。
            </p>
            <p>※7月以降は横浜院は終了し表参道に拡大移転します。</p>
          </div>
          <div class="sl-clinic-inn-content-wr">
            <h2>[ クリニック情報 ]</h2>
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3854738976015!2d139.70931291525832!3d35.6675093801975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca1dfddf717%3A0xebcb80d908ce6ec5!2z44CSMTUwLTAwMDEg5p2x5Lqs6YO95riL6LC35Yy656We5a6u5YmN77yU5LiB55uu77yU4oiS77yR77yTIOelnuWuruWJjeaftOeUsOODk-ODqyAx6ZqO!5e0!3m2!1sja!2sjp!4v1651905330822!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="d-fl sl-clinic-inn-content-wr-ul">
              <ul>
                <li class="d-fl">
                  <h3>住所</h3>
                  <p>〒150-0001<br>
                    渋谷区神宮前4-4-13<br class="sp">神宮前柴田ビル 1階</p>
                </li>
                <li class="d-fl">
                  <h3>診察時間</h3>
                  <p>9:00〜18:00<br>水・日(第1/第3)</p>
                </li>
                <li class="d-fl">
                  <h3>Instagram</h3>
                  <p><a href="https://www.instagram.com/lianclinic_omotesando/" target="_blank">https://www.instagram.com/lianclinic_omotesando/</a></p>
                </li>
              </ul>
              <ul>
                <li class="d-fl">
                  <h3>お支払い方法</h3>
                  <p>現金 / クレジットカード</p>
                </li>
                <li class="d-fl">
                  <h3>電話番号</h3>
                  <p>03-3470-5678</p>
                </li>
                <li class="d-fl">
                  <h3>施術メニュー</h3>
                  <p>眉アートメイク<br>
                    リップアートメイク<br>
                    アイラインアートメイク<br>
                    ヘアラインアートメイク</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="sl-clinic-inn-content-wr">
            <h2>[ 横浜駅(神奈川県)のからの道順 ]</h2>
            <div class="d-fl sl-clinic-inn-content-wr-imgs">
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-01.png" alt="clinic">
                </figure>
                <p>横浜駅中央西口を出ます</p>
              </div>
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-02.png" alt="clinic">
                </figure>
                <p>階段を上がった後に矢印の方向に進みます</p>
              </div>
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-03.png" alt="clinic">
                </figure>
                <p>矢印の方向へ進みます</p>
              </div>
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-04.png" alt="clinic">
                </figure>
                <p>三菱UFJ銀行を右手に進みます</p>
              </div>
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-05.png" alt="clinic">
                </figure>
                <p>カラオケビッグエコーがある横断歩道を右折します</p>
              </div>
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-06.png" alt="clinic">
                </figure>
                <p>真っ直ぐ進みます</p>
              </div>
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-07.png" alt="clinic">
                </figure>
                <p>松屋が入っているビルの2階となります</p>
              </div>
              <div class="sl-clinic-inn-content-wr-imgs-item">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/clinic/clinic-dir-08.png" alt="clinic">
                </figure>
                <p>Kaleido Clinic内にあります</p>
              </div>
            </div>
          </div>
          <div class="sl-clinic-inn-content-wr">
            <h2>[ 所属スタッフ ]</h2>
            <div class="d-fl sl-clinic-inn-content-wr-posts">
              <?php
                $args = array(
                  'post_type' => 'staff',
                  'post_status' => 'publish',
                  'posts_per_page' => 3,
                  'order' => 'ASC',
                );
                $posts = get_posts( $args );
                foreach($posts as $post):
              ?>
              <article id="">
                <a href="<?php echo esc_html( home_url('/') ) ?>staff/#post-<?php the_ID(); ?>">
                  <figure>
                    <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
                  </figure>
                  <h3><?php the_title(); ?></h3>
                </a>
              </article>
              <?php endforeach; ?>
            </div>
            <div class="sl-clinic-inn-content-wr-link">
              <div class="menu-btn more-btn">
                <a href="<?php echo esc_html( home_url('/') ) ?>staff" rel="alternate">VIEW MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="reservation" class="sl-reservation sbprice">
      <div class="menu-inn sl-reservation-inn sbprice-inn">
        <div class="sl-reservation-inn-ttl subpage-ttl">
          <h2 class="under-line">ご予約</h2>
        </div>
        <div class="sl-reservation-inn-content sbprice-content">
          <div class="reservation">
            <div class="reservation-wr">
              <p>ご予約はLINE予約で承っております。</p>
              <?php $contactTxt01 = CFS()->get('text01', 27); $contactTxt02 = CFS()->get('text02', 27); if($contactTxt01 != ''): ?>
              <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                  class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
              <?php endif; ?>
              <a href="https://line.me/R/ti/p/%40115jngom" target="_blank" rel="nofollow noreferrer">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/line-img.png" alt="">
              </a>
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