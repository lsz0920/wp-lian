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
    <div class="breadcrumbs">
      <div class="breadcrumbs-inn">
        <?php
          if(function_exists( 'yoast_breadcrumb' )){
            yoast_breadcrumb( '<div id="breadcrumbs">', '</div>');
          }
        ?>
      </div>
    </div>
    <div id="price" class="sl-pl">
      <div class="sl-pl-inn sbprice-inn">
        <div class="sl-pl-inn-ttl subpage-ttl">
          <h1 class="under-line">Price</h1>
        </div>
        <div class="sl-pl-inn-content sbprice-content">
          <div class="price-list">
            <h2 class="price-list-ttl">Category</h2>
            <p class="price-list-subttl">カテゴリー</p>
            <div class="price-list-wr">
              <ul class="d-fl">
                <li><a href="#sagging" rel="alternate">たるみ治療</a></li>
                <li><a href="#smallface" rel="alternate">小顔治療</a></li>
                <li><a href="#poretreatment" rel="alternate">毛穴治療</a></li>
                <li><a href="#shimichiryo" rel="alternate">シミ治療</a></li>
                <li><a href="#atomeiku" rel="alternate">アートメイク</a></li>
                <li><a href="#chunyuchiryo" rel="alternate">注入治療</a></li>
                <li><a href="#set" rel="alternate">セットメニュー</a></li>
              </ul>
              <div class="price-list-wr-inn">
                <section id="sagging" class="sagging-cure">
                  <h2>たるみ治療</h2>
                  <div class="section-inner">
                    <table>
                      <thead>
                        <tr>
                          <th><span>施術名</span></th>
                          <th><span>部位</span></th>
                          <th><span>回数</span></th>
                          <th><span>価格</span></th>
                          <th><span>モニター価格</span></th>
                          <th><span>アートメイク<br>会員価格<small>※1</small></span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg">
                          <td rowspan="3">
                            <p>ハイフ<br />（ウルトラセルQ＋）</p>
                          </td>
                          <td>
                            <p>初回<br />(フェイスライン) </p>
                          </td>
                          <td>
                            <p>200ショット</p>
                          </td>
                          <td>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>顔</p>
                          </td>
                          <td>
                            <p>400ショット</p>
                          </td>
                          <td>
                            <p>69,300円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                          <td>
                            <p>55,440円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>顔</p>
                          </td>
                          <td>
                            <p>600ショット</p>
                          </td>
                          <td>
                            <p>88,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                          <td>
                            <p>70,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>ハイフリニア<br />（ウルトラセルQ＋）</p>
                          </td>
                          <td>
                            <p>頬〜顎下</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                          </td>
                          <td>
                            <p>39,600円</p>
                            <p>99,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                          <td>
                            <p>31,680円</p>
                            <p>79,200円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td><p>ハイサーマ<br />
                            （ウルトラセルQ<br />
                            プラス400shots＋RF）</p></td>
                          <td>
                            <p>全顔</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                          </td>
                          <td>
                            <p>99,000円</p>
                            <p>242,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>193,600円</p>
                          </td>
                          <td>
                            <p>79,200円</p>
                            <p>193,600円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td rowspan="2">
                            <p>RF<br />（機器名：サーマジェン）</p>
                          </td>
                          <td>
                            <p>頬</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                          </td>
                          <td>
                            <p>39,600円</p>
                            <p>99,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                          <td>
                            <p>31,680円</p>
                            <p>79,200円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>全顔<br>(頬＋目元＋フェイスライン)＋顎下</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                          </td>
                          <td>
                            <p>52,800円</p>
                            <p>143,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                          <td>
                            <p>42,240円</p>
                            <p>114,400円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td><p>リフトアップボトックス</p></td>
                          <td>
                            <p>アラガン社</p>
                            <p>韓国製</p>
                          </td>
                          <td>
                            <p>50単位</p>
                          </td>
                          <td>
                            <p>74,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                          <td>
                            <p>59,840円</p>
                            <p>26,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td rowspan="4">
                            <p><span>※2</span><br />コラーゲン美容鍼<br /> (ショートスレッド)</p>
                          </td>
                          <td><p>モノスレッド</p></td>
                          <td>
                            <p>20本</p>
                            <p>40本</p>
                            <p>60本</p>
                            <p>80本</p>
                            <p>100本</p>
                          </td>
                          <td>
                            <p>66,000円</p>
                            <p>99,000円</p>
                            <p>132,000円</p>
                            <p>165,000円</p>
                            <p>198,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                            <p>138,600円</p>
                          </td>
                          <td>
                            <p>52,800円</p>
                            <p>79,200円</p>
                            <p>105,600円</p>
                            <p>132,000円</p>
                            <p>158,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td><p>強力引き締めスレッド</p></td>
                          <td>
                            <p>20本</p>
                            <p>40本</p>
                            <p>60本</p>
                            <p>80本</p>
                            <p>100本</p>
                          </td>
                          <td>
                            <p>88,000円</p>
                            <p>121,000円</p>
                            <p>154,000円</p>
                            <p>176,000円</p>
                            <p>220,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                            <p>155,400円</p>
                          </td>
                          <td>
                            <p>70,400円</p>
                            <p>96,800円</p>
                            <p>132,200円</p>
                            <p>140,800円</p>
                            <p>177,600円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td><p>ビタミンモノスレッド</p></td>
                          <td>
                            <p>20本</p>
                            <p>40本</p>
                            <p>60本</p>
                            <p>80本</p>
                            <p>100本</p>
                          </td>
                          <td>
                            <p>93,500円	</p>
                            <p>126,500円</p>
                            <p>159,500円</p>
                            <p>192,500円</p>
                            <p>225,500円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                            <p>157,850円</p>
                          </td>
                          <td>
                            <p>74,800円</p>
                            <p>101,200円</p>
                            <p>127,600円</p>
                            <p>154,000円</p>
                            <p>180,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td><p>カスタマイズスレッド</p></td>
                          <td>
                            <p>60本</p>
                            <p>80本</p>
                            <p>100本</p>
                          </td>
                          <td>
                            <p>148,500円</p>
                            <p>181,500円</p>
                            <p>214,500円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>150,150円</p>
                          </td>
                          <td>
                            <p>118,800円</p>
                            <p>145,200円</p>
                            <p>171,600円</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>※1 アートメイク受けてから半年以内<br>※2麻酔代込</p>
                </section>
                <section id="smallface" class="sagging-cure">
                  <h2>小顔治療</h2>
                  <div class="section-inner">
                    <table>
                      <thead>
                        <tr>
                          <th><span>施術名</span></th>
                          <th><span>部位</span></th>
                          <th><span>回数</span></th>
                          <th><span>価格</span></th>
                          <th><span>アートメイク<br>会員価格<small>※1</small></span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg">
                          <td><p>ハイフリニア<br />（ウルトラセルQ＋）</p></td>
                          <td>
                            <p>頬〜顎下</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                          </td>
                          <td>
                            <p>39,600円</p>
                            <p>99,000円</p>
                          </td>
                          <td>
                            <p>31,680円</p>
                            <p>79,200円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>脂肪溶解注射<br />(チンセラ)</p>
                          </td>
                          <td>
                          </td>
                          <td>
                            <p>4cc</p>
                            <p>8cc</p>
                          </td>
                          <td>
                            <p>33,000円</p>
                            <p>66,000円</p>
                          </td>
                          <td>
                            <p>26,400円</p>
                            <p>52,800円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td><p>アラガン社ボトックス</p></td>
                          <td>
                            <p>エラ</p>
                          </td>
                          <td>
                            <p>40単位</p>
                            <p>80単位</p>
                          </td>
                          <td>
                            <p>39,600円</p>
                            <p>74,800円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>韓国製ボトックス</p>
                          </td>
                          <td>
                            <p>エラ</p>
                          </td>
                          <td>
                            <p>40単位</p>
                            <p>80単位</p>
                          </td>
                          <td>
                            <p>19,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>※モニター価格でのご案内なし<br />※1 アートメイク受けてから半年以内</p>
                </section>
                <section id="poretreatment" class="sagging-cure">
                  <h2>毛穴治療</h2>
                  <div class="section-inner">
                    <table>
                      <thead>
                        <tr>
                          <th><span>施術名</span></th>
                          <th><span>部位</span></th>
                          <th><span>回数</span></th>
                          <th><span>価格</span></th>
                          <th><span>アートメイク<br>会員価格<small>※1</small></span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg">
                          <td rowspan="2"><p><span>※3</span><br>マイクロニードルRF</p></td>
                          <td>
                            <p>頬+鼻</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                            <p>10回</p>
                          </td>
                          <td>
                            <p>66,000円</p>
                            <p>188,100円</p>
                            <p>297,000円</p>
                            <p>528,000円</p>
                          </td>
                          <td>
                            <p>52,800円</p>
                            <p>150,480円</p>
                            <p>237,600円</p>
                            <p>422,400円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>全顔</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                            <p>10回</p>
                          </td>
                          <td>
                            <p>77,000円</p>
                            <p>219,450円</p>
                            <p>346,500円</p>
                            <p>616,000円</p>
                          </td>
                          <td>
                            <p>61,600円</p>
                            <p>175,560円</p>
                            <p>277,200円</p>
                            <p>492,800円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td rowspan="2">
                            <p>ピーリング<br />（ミラノリピール）</p>
                          </td>
                          <td>
                            <p>顔</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                          </td>
                          <td>
                            <p>12,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>26,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>ヒップ</p>
                            <p>膝</p>
                            <p>背中上部 / 下部</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>1回</p>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>28,600円</p>
                            <p>22,000円</p>
                            <p>35,200円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td><p>ピーリング<br />（マッサージピール）</p></td>
                          <td>
                            <p>顔</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                          </td>
                          <td>
                            <p>12,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>26,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td rowspan="2">
                            <p>エレクトロポレーション</p>
                          </td>
                          <td>
                            <p><span>※2</span><br>単品</p>
                          </td>
                          <td>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>9,900円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>他施術とセット<br>※2から１剤を選択</p>
                          </td>
                          <td>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>6,600円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td><p>ポアレスボトックス</p></td>
                          <td>
                            <p>アラガン社</p>
                            <p>韓国製</p>
                          </td>
                          <td>
                            <p>50単位</p>
                          </td>
                          <td>
                            <p>74,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>59,840円</p>
                            <p>26,400円</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>※モニター価格でのご案内なし<br>※1 アートメイク受けてから半年以内<br>※2トラネキサム酸 /グリシルグリシン /<br>ビタミンCから１剤を選択
                  <br>※3 麻酔代込</p>
                </section>
                <section id="shimichiryo" class="sagging-cure">
                  <h2>シミ治療</h2>
                  <div class="section-inner">
                    <table>
                      <thead>
                        <tr>
                          <th><span>施術名</span></th>
                          <th><span>部位</span></th>
                          <th><span>回数</span></th>
                          <th><span>価格</span></th>
                          <th><span>アートメイク<br />会員価格<small>※1</small></span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg">
                          <td><p>IPL (アキュライト)</p></td>
                          <td>
                            <p>全顔</p>
                          </td>
                          <td>
                            <p>初回</p>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                          </td>
                          <td>
                            <p>7,700円</p>
                            <p>9,900円</p>
                            <p>28,500円</p>
                            <p>46,200円 </p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>22,800円</p>
                            <p>36,960円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>IPL (アキュプラス)</p>
                          </td>
                          <td>
                            <p>全顔</p>
                          </td>
                          <td>
                            <p>初回</p>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                          </td>
                          <td>
                            <p>12,800円</p>
                            <p>14,300円</p>
                            <p>39,600円</p>
                            <p>64,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>31,680円</p>
                            <p>51,200円</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>※モニター価格でのご案内なし<br>※1 アートメイク受けてから半年以内</p>
                </section>
                <section id="atomeiku" class="sagging-cure">
                  <h2>アートメイク</h2>
                  <div class="section-inner">
                    <table>
                      <thead>
                        <tr>
                          <th><span>施術名</span></th>
                          <th><span>部位</span></th>
                          <th><span>回数</span></th>
                          <th><span>通常価格</span></th>
                          <th><span>モニター価格</span></th>
                          <th><span>友人割<small>※</small></span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg">
                          <td rowspan="3"><p>アートメイク<br />(初回) </p></td>
                          <td>
                            <p>眉</p>
                          </td>
                          <td>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>54,780円</p>
                          </td>
                          <td>
                            <p>部分写真モニター 52,580円<br />全顔写真モニター49,280円</p>
                          </td>
                          <td>
                            <p>49,280円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>リップ</p>
                          </td>
                          <td>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>65,780円</p>
                          </td>
                          <td>
                            <p>部分写真モニター63,580円<br />全顔写真モニター60,280円</p>
                          </td>
                          <td>
                            <p>60,280円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>アイライン</p>
                            <p>アイライン跳ね上げ</p>
                            <p>ヘアライン</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>1回</p>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>45,000円</p>
                            <p>60,000円</p>
                            <p>65,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td rowspan="3">
                            <p>アートメイク<br />(2回目以降) </p>
                          </td>
                          <td>
                            <p>眉</p>
                          </td>
                          <td>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>54,780円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                          <td>
                            <p>49,280円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>リップ</p>
                          </td>
                          <td>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>65,780円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                          <td>
                            <p>60,280円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>アイライン</p>
                            <p>アイライン跳ね上げ</p>
                            <p>ヘアライン</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>1回</p>
                            <p>1回</p>
                          </td>
                          <td>
                            <p>35,000円</p>
                            <p>50,000円</p>
                            <p>55,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>※新たに紹介したご友人が予約した場合に適応<br>※指名料：11,000円〜</p>
                </section>
                <section id="chunyuchiryo" class="sagging-cure">
                  <h2>注入治療</h2>
                  <div class="section-inner">
                    <table>
                      <thead>
                        <tr>
                          <th><span>施術名</span></th>
                          <th><span>部位</span></th>
                          <th><span>回数</span></th>
                          <th><span>価格</span></th>
                          <th><span>アートメイク<br>会員価格<small>※1</small></span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg">
                          <td rowspan="4"><p>アラガン社ボトックス</p></td>
                          <td>
                            <p>肩</p>
                          </td>
                          <td>
                            <p>50単位</p>
                            <p>100単位</p>
                          </td>
                          <td>
                            <p>44,000円</p>
                            <p>84,700円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>エラ</p>
                          </td>
                          <td>
                            <p>40単位</p>
                            <p>80単位</p>
                          </td>
                          <td>
                            <p>39,600円</p>
                            <p>74,800円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>ワキ</p>
                          </td>
                          <td>
                            <p>100単位</p>
                            <p>200単位</p>
                          </td>
                          <td>
                            <p>88,000円</p>
                            <p>169,400円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>顔1部位</p>
                          </td>
                          <td>
                            <p>10-15単位</p>
                          </td>
                          <td>
                            <p>各14,850円</p>
                          </td>
                          <td>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td rowspan="4"><p>韓国製ボトックス</p></td>
                          <td>
                            <p>肩</p>
                          </td>
                          <td>
                            <p>50単位</p>
                            <p>100単位</p>
                          </td>
                          <td>
                            <p>22,000円</p>
                            <p>39,800円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>エラ</p>
                          </td>
                          <td>
                            <p>40単位</p>
                            <p>80単位</p>
                          </td>
                          <td>
                            <p>19,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>ワキ</p>
                          </td>
                          <td>
                            <p>100単位</p>
                            <p>200単位</p>
                          </td>
                          <td>
                            <p>44,000円</p>
                            <p>79,600円</p>
                          </td>
                          <td>
                            <p>—</p>
                            <p>—</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>顔1部位</p>
                          </td>
                          <td>
                            <p>10-15単位</p>
                          </td>
                          <td>
                            <p>各8,800円</p>
							            </td>
                          <td>
							              <p>—</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p>リフトアップボトックス</p>
                          </td>
                          <td>
                            <p>アラガン社</p>
                            <p>韓国製</p>
                          </td>
                          <td>
                            <p>50単位</p>
                          </td>
                          <td>
                            <p>74,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>59,840円</p>
                            <p>26,400円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>ポアレスボトックス</p>
                          </td>
                          <td>
                            <p>アラガン社	</p>
                            <p>韓国製</p>
                          </td>
                          <td>
                            <p>50単位</p>
                          </td>
                          <td>
                            <p>74,800円</p>
                            <p>33,000円</p>
                          </td>
                          <td>
                            <p>59,840円</p>
                            <p>26,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td rowspan="4">
                            <p>水光注射<br>(Dr.手打ち)</p>
                          </td>
                          <td>
                            <p>Ping Grow<br>(全顔 or 首)</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                          </td>
                          <td>
                            <p>39,600円</p>
                            <p>106,920円</p>
                            <p>158,400円</p>
                          </td>
                          <td>
                            <p>31,680円</p>
                            <p>85,536円</p>
                            <p>126,720円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>Ping Grow<br>(全顔 + 首)</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                          </td>
                          <td>
                            <p>63,360円</p>
                            <p>171,000円</p>
                            <p>253,440円</p>
                          </td>
                          <td>
                            <p>50,688円</p>
                            <p>136,800円</p>
                            <p>202,752円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>LIANカクテル<br>(全顔 or 首)</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                          </td>
                          <td>
                            <p>49,500円</p>
                            <p>133,650円</p>
                            <p>198,000円</p>
                          </td>
                          <td>
                            <p>39,600円</p>
                            <p>106,920円</p>
                            <p>158,400円</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td>
                            <p>LIANカクテル<br>(全顔 + 首)</p>
                          </td>
                          <td>
                            <p>1回</p>
                            <p>3回</p>
                            <p>5回</p>
                          </td>
                          <td>
                            <p>79,200円</p>
                            <p>213,840円</p>
                            <p>316,800円</p>
                          </td>
                          <td>
                            <p>63,360円</p>
                            <p>171,072円</p>
                            <p>253,440円</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>※モニター価格でのご案内なし<br />※1 アートメイク受けてから半年以内</p>
                </section>
                <section id="set" class="sagging-cure">
                  <h2>セットメニュー</h2>
                  <div class="section-inner">
                    <table>
                      <thead>
                        <tr>
                          <th><span>セット名</span></th>
                          <th><span>プラン</span></th>
                          <th><span>施術セット</span></th>
                          <th><span>価格(税込)</span></th>
                          <th><span>差額</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg">
                          <td rowspan="3"><p>リフトアップセット</p></td>
                          <td>
                            <p>口横たるみ<br>メンテナンス</p>
                          </td>
                          <td>
                            <p>２リストサーマジェン<br />(頬・フェイスライン)<br />ショートスレッド<br />モノスレッド20本</p>
                          </td>
                          <td>
                            <p>66,000円</p>
                          </td>
                          <td>
                            <p>39,600円お得</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>フェイスラインきゅっ！<br />法令線撃退セット</p>
                          </td>
                          <td>
                            <p>２リストサーマジェン<br />(頬・フェイスライン)<br />ショートスレッド<br />モノスレッド40本</p>
                          </td>
                          <td>
                            <p>99,000円</p>
                          </td>
                          <td>
                            <p>39,600円お得</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>奥からグググ！<br>マイナス５歳フェイス！</p>
                          </td>
                          <td>
                            <p>ハイサーマ<br />（４リフトサーマジェン・<br />ハイフ400ショット）<br />ショートスレッド60本</p>
                          </td>
                          <td>
                            <p>165,000円</p>
                          </td>
                          <td>
                            <p>66,000円お得</p>
                          </td>
                          <td></td>
                        </tr>
                        <tr class="no-bg">
                          <td><p>リフトアップセット<br>オプション</p></td>
                          <td></td>
                          <td>
                            <p>
                            リフトアップボトックス同時施術で20％OFF<br>
                             ショートスレッドの糸追加　20本ごとに33000円</p>
                          </td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr class="bg">
                          <td rowspan="2">
                            <p>小顔セット</p>
                          </td>
                          <td>
                            <p>輪郭改造セットライト</p>
                          </td>
                          <td>
                            <p>顎下脂肪溶解注射4本<br />エラボトックス<br />（韓国製40単位）	</p>
                          </td>
                          <td>
                            <p>49,500円</p>
                          </td>
                          <td>
                            <p>7,800円お得</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>輪郭改造セットプロ </p>
                          </td>
                          <td>
                            <p>顎下脂肪溶解注射8本<br />エラボトックス<br />（韓国製80単位）</p>
                          </td>
                          <td>
                            <p>88,000円</p>
                          </td>
                          <td>
                            <p>11000円お得</p>
                          </td>
                        </tr>
                        <tr class="no-bg">
                          <td><p>小顔セット<br>オプション</td>
                          <td></td>
                          <td>
                            <p>
                            脂肪溶解注射・エラボトックスのどちらか倍量に変更の場合66,000円</p>
                          </td>
                          <td></td>
                        </tr>
                        <tr class="bg">
                          <td rowspan="3">
                            <p>毛穴</p>
                          </td>
                          <td>
                            <p>ニキビ・皮脂毛穴セット</p>
                          </td>
                          <td>
                            <p>ピーリング（各種）<br />内服3種 30日分<br />イオン導入</p>
                          </td>
                          <td>
                            <p>22,000円</p>
                          </td>
                          <td>
                            <p>3,300円お得</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>たるみ毛穴セット</p>
                          </td>
                          <td>
                            <p>ピーリング<br />マイクロニードルRF (頬+鼻)<br />イオン導入</p>
                          </td>
                          <td>
                            <p>82,500円</p>
                          </td>
                          <td>
                            <p>6,200円お得</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>ひらき毛穴セット</p>
                          </td>
                          <td>
                            <p>ピーリング<br />マイクロボトックス<br />イオン導入</p>
                          </td>
                          <td>
                            <p>49,500円</p>
                          </td>
                          <td>
                            <p>6,200円お得</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section id="set" class="sagging-cure">
                  <div class="section-inner">
                    <table style="width: 96%; border-top: 1px solid #D5D5D5;">
                      <tbody>
                        <tr class="no-bg">
                          <td>
                            <p>麻酔</p>
                          </td>
                          <td>
                            <p>ペンレステープ　１枚</p>
                            <p>表面麻酔</p>
                            <p>笑気麻酔</p>
                          </td>
                          <td>
                            <p>1,100円</p>
                            <p>3,300円</p>
                            <p>3,300円</p>
                          </td>
                        </tr>
                        <tr class="bg">
                          <td>
                            <p>注射針</p>
                          </td>
                          <td>
                            <p>マイクロニードルへ変更</p>
                          </td>
                          <td>
                            <p>１施術につき550円プラス</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
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
              <a href="https://line.me/R/ti/p/@115jngom" target="_blank" rel="nofollow noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
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
