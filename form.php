<?php 
 if(isset($_COOKIE['form_submittion'])){
    if($_COOKIE['form_submittion'] == 1){
        header('location: vote.php');
    }
 }

 $day1start = new DateTime('2023-6-1 12:00:00');
 $day1end = new DateTime('2023-6-2 14:00:00');
 $day2start = new DateTime('2023-6-6 9:00:00');
 $day2end = new DateTime('2023-6-6 12:15:00');
 $now = new DateTime('now');
 if($day1start < $now && $now < $day1end){

 }elseif($day2start < $now && $now < $day2end){

 }else{
    header('location: vote.php');
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>投票ページ-彩西祭2023</title>
        <meta name="description" content="2023年度浜松西高等学校・同中等部文化祭「彩西祭」公式ウェブサイトへようこそ。当日の情報から準備の様子まで、様々なことを発信していきます。" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
        <!-- Favicon設定-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link type="image/x-icon" rel="icon" href="favicon.ico">
        <!-- Googlebot-->
        <meta name="robots" content="noindex">
        <!-- OG image settings-->
        <meta property="og:description" content="2023年度浜松西高等学校・同中等部文化祭「彩西祭」公式ウェブサイトへようこそ。当日の情報から準備の様子まで、様々なことを発信していきます。">
        <meta property="og:image" content="file/og_image.png">
         <!--Google Fonts読み込み-->
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Zen+Kaku+Gothic+Antique:wght@500;700&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-V9BGKPTSGR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-V9BGKPTSGR');
        </script>
    </head>
    <body>
        <header>
            <a href="index.html"><img id="header_icon" src="files/header_icon.png"></a>
            <!--  ハンバーガーボタン  -->
            <div class="hamburger"><span></span><span></span><span></span></div>
            <nav class="hamburger_list">
                <div id="header_top" class="header_menu"><a href="index.html" class="header_menu"><h1>トップページ</h1></a></div>
                <div id="header_contents" class="header_menu toggle_menu"><a href="index.html#section_contents" class="header_menu"><h1>コンテンツ</h1></a><div class="subMenu"><span></span><span></span></div></div>
                <a class="menu_open" href="pamphlet.html"><h3>デジタル版パンフレット</h3></a>
                <a class="menu_open" href="themeillust.html"><h3>テーマイラスト紹介</h3></a>
                <a class="menu_open" href="map.html"><h3>校内マップ</h3></a>
                <a class="menu_open" href="tenji.html"><h3>展示内容紹介</h3></a>
                <div id="header_articles" class="header_menu"><a href="articles.html"><h1>記事一覧</h1></a></div>
                <div id="header_about" class="header_menu"><a href="about.html" class="header_menu"><h1>彩西祭について</h1></a></div>
            </nav>
            <div class="circle-bg"></div>
        </header>
        <iframe name="to_success" style="display:none;" onload="if(submitted){window.location='submitted.html';}"></iframe>
        <form id="voting_form" action="https://docs.google.com/forms/d/e/1FAIpQLScoQ9qllKNb7BU6SHNCXMxxlj4cZ20PQBQ2O1FxU5BddVed6Q/formResponse" method="post" target="to_success" onsubmit="submitted=true;">
            <div id="top" style=" display:none;"></div>
            <div class="section">
                <div class="page1">
                        <div id="question1" class="title">
                            <h3>１．当てはまるものを選んでください<span class="red">(必須)</span></h3>
                            <p><input type="radio" name="entry.1503197076" id="option_seito" value="中等部生">中等部生</p>
                            <p><input type="radio" name="entry.1503197076" id="option_seito" value="高校生">高校生</p>
                            <p><input type="radio" name="entry.1503197076" id="option_ippan" value="一般の方">一般の方</p>
                        </div>
                        <div id="question2" class="title">
                            <h3>２．所属するHRを選んでください<span class="red">(必須)</span></h3>
                            <p><input type="radio" name="entry.538058966" value="1AHR">1AHR</p>
                            <p><input type="radio" name="entry.538058966" value="1BHR">1BHR</p>
                            <p><input type="radio" name="entry.538058966" value="1CHR">1CHR</p>
                            <p><input type="radio" name="entry.538058966" value="1DHR">1DHR</p>
                            <p><input type="radio" name="entry.538058966" value="2AHR">2AHR</p>
                            <p><input type="radio" name="entry.538058966" value="2BHR">2BHR</p>
                            <p><input type="radio" name="entry.538058966" value="2CHR">2CHR</p>
                            <p><input type="radio" name="entry.538058966" value="2DHR">2DHR</p>
                            <p><input type="radio" name="entry.538058966" value="3AHR">3AHR</p>
                            <p><input type="radio" name="entry.538058966" value="3BHR">3BHR</p>
                            <p><input type="radio" name="entry.538058966" value="3CHR">3CHR</p>
                            <p><input type="radio" name="entry.538058966" value="3DHR">3DHR</p>
                            <p><input type="radio" name="entry.538058966" value="11HR" onclick="$('#group11,#kurat_11HR').addClass('hide_default');">11HR</p>
                            <p><input type="radio" name="entry.538058966" value="12HR" onclick="$('#group12,#kurat_12HR').addClass('hide_default');">12HR</p>
                            <p><input type="radio" name="entry.538058966" value="13HR" onclick="$('#group13,#kurat_13HR').addClass('hide_default');">13HR</p>
                            <p><input type="radio" name="entry.538058966" value="14HR" onclick="$('#group14,#kurat_14HR').addClass('hide_default');">14HR</p>
                            <p><input type="radio" name="entry.538058966" value="15HR" onclick="$('#group15,#kurat_15HR').addClass('hide_default');">15HR</p>
                            <p><input type="radio" name="entry.538058966" value="16HR" onclick="$('#group16,#kurat_16HR').addClass('hide_default');">16HR</p>
                            <p><input type="radio" name="entry.538058966" value="17HR" onclick="$('#group17,#kurat_17HR').addClass('hide_default');">17HR</p>
                            <p><input type="radio" name="entry.538058966" value="21HR" onclick="$('#group21,#kurat_21HR').addClass('hide_default');">21HR</p>
                            <p><input type="radio" name="entry.538058966" value="22HR" onclick="$('#group22,#kurat_22HR').addClass('hide_default');">22HR</p>
                            <p><input type="radio" name="entry.538058966" value="23HR" onclick="$('#group23,#kurat_23HR').addClass('hide_default');">23HR</p>
                            <p><input type="radio" name="entry.538058966" value="24HR" onclick="$('#group24,#kurat_24HR').addClass('hide_default');">24HR</p>
                            <p><input type="radio" name="entry.538058966" value="25HR" onclick="$('#group25,#kurat_25HR').addClass('hide_default');">25HR</p>
                            <p><input type="radio" name="entry.538058966" value="26HR" onclick="$('#group26,#kurat_26HR').addClass('hide_default');">26HR</p>
                            <p><input type="radio" name="entry.538058966" value="31HR" onclick="$('#group31,#kurat_31HR').addClass('hide_default');">31HR</p>
                            <p><input type="radio" name="entry.538058966" value="32HR" onclick="$('#group32,#kurat_32HR').addClass('hide_default');">32HR</p>
                            <p><input type="radio" name="entry.538058966" value="33HR" onclick="$('#group33,#kurat_33HR').addClass('hide_default');">33HR</p>
                            <p><input type="radio" name="entry.538058966" value="34HR" onclick="$('#group34,#kurat_34HR').addClass('hide_default');">34HR</p>
                            <p><input type="radio" name="entry.538058966" value="35HR" onclick="$('#group35,#kurat_35HR').addClass('hide_default');">35HR</p>
                            <p><input type="radio" name="entry.538058966" value="36HR" onclick="$('#group36,#kurat_36HR').addClass('hide_default');">36HR</p>
                        </div>
                        <div id="question3" class="title">
                            <h3>３．所属する部活動を選んでください<span class="red">(必須)</span></h3>
                            <p><input type="radio" name="entry.290451178" value="科学研究部自然化学班" onclick="$('#group46').addClass('hide_default');">科学研究部自然科学班</p>
                            <p><input type="radio" name="entry.290451178" value="科学研究部工学情報班" onclick="$('#group45').addClass('hide_default');">科学研究部工学情報班</p>
                            <p><input type="radio" name="entry.290451178" value="国際文化部" onclick="$('#group50').addClass('hide_default');">国際文化部</p>
                            <p><input type="radio" name="entry.290451178" value="演劇部" onclick="$('#group47').addClass('hide_default');">演劇部</p>
                            <p><input type="radio" name="entry.290451178" value="美術写真部美術班" onclick="$('#group41').addClass('hide_default');">美術写真部美術班</p>
                            <p><input type="radio" name="entry.290451178" value="美術写真部写真班" onclick="$('#group42').addClass('hide_default');">美術写真部写真班</p>
                            <p><input type="radio" name="entry.290451178" value="吹奏楽部" onclick="$('#group48').addClass('hide_default');">吹奏楽部</p>
                            <p><input type="radio" name="entry.290451178" value="弦楽部" onclick="$('#group49').addClass('hide_default');">弦楽部</p>
                            <p><input type="radio" name="entry.290451178" value="百人一首部" onclick="$('#group44').addClass('hide_default');">百人一首部</p>
                            <p><input type="radio" name="entry.290451178" value="生活文化部" onclick="$('#group43').addClass('hide_default');">生活文化部</p>
                            <p><input type="radio" name="entry.290451178" value="その他">その他</p>
                        </div>
                    </div>
                <div class="page2 hide_default">
                    <div id="question4" class="title">
                        <h2>HR展賞</h2>
                        <h5>入場したHR展示を0点～2点の中で評価してください</h5>
                        <div class="point_box">
                            <p class="points">0点</p>
                            <p class="points">1点</p>
                            <p class="points">2点</p>
                        </div>
                        <div class="hide_default" id="group11">
                            <label for="">11HR</label>
                            <div class="test">
                                <input type="radio" name="entry.885215657" value="０点">
                                <input type="radio" name="entry.885215657" value="１点">
                                <input type="radio" name="entry.885215657" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group12">
                            <label for="">12HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1150789038" value="０点">
                                <input type="radio" name="entry.1150789038" value="１点">
                                <input type="radio" name="entry.1150789038" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group13">
                            <label for="">13HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1923943701" value="０点">
                                <input type="radio" name="entry.1923943701" value="１点">
                                <input type="radio" name="entry.1923943701" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group14">
                            <label for="">14HR</label>
                            <div class="test">
                                <input type="radio" name="entry.755345731" value="０点">
                                <input type="radio" name="entry.755345731" value="１点">
                                <input type="radio" name="entry.755345731" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group15">
                            <label for="">15HR</label>
                            <div class="test">
                                <input type="radio" name="entry.72649444" value="０点">
                                <input type="radio" name="entry.72649444" value="１点">
                                <input type="radio" name="entry.72649444" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group16">
                            <label for="">16HR</label>
                            <div class="test">
                                <input type="radio" name="entry.797552058" value="０点">
                                <input type="radio" name="entry.797552058" value="１点">
                                <input type="radio" name="entry.797552058" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group17">
                            <label for="">17HR</label>
                            <div class="test">
                                <input type="radio" name="entry.36314777" value="０点">
                                <input type="radio" name="entry.36314777" value="１点">
                                <input type="radio" name="entry.36314777" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group21">
                            <label for="">21HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1356478900" value="０点">
                                <input type="radio" name="entry.1356478900" value="１点">
                                <input type="radio" name="entry.1356478900" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group22">
                            <label for="">22HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1159793844" value="０点">
                                <input type="radio" name="entry.1159793844" value="１点">
                                <input type="radio" name="entry.1159793844" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group23">
                            <label for="">23HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1697085817" value="０点">
                                <input type="radio" name="entry.1697085817" value="１点">
                                <input type="radio" name="entry.1697085817" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group24">
                            <label for="">24HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1735837588" value="０点">
                                <input type="radio" name="entry.1735837588" value="１点">
                                <input type="radio" name="entry.1735837588" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group25">
                            <label for="">25HR</label>
                            <div class="test">
                                <input type="radio" name="entry.593853303" value="０点">
                                <input type="radio" name="entry.593853303" value="１点">
                                <input type="radio" name="entry.593853303" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group26">
                            <label for="">26HR</label>
                            <div class="test">
                                <input type="radio" name="entry.177526831" value="０点">
                                <input type="radio" name="entry.177526831" value="１点">
                                <input type="radio" name="entry.177526831" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group31">
                            <label for="">31HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1368722233" value="０点">
                                <input type="radio" name="entry.1368722233" value="１点">
                                <input type="radio" name="entry.1368722233" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group32">
                            <label for="">32HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1670704581" value="０点">
                                <input type="radio" name="entry.1670704581" value="１点">
                                <input type="radio" name="entry.1670704581" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group33">
                            <label for="">33HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1483849224" value="０点">
                                <input type="radio" name="entry.1483849224" value="１点">
                                <input type="radio" name="entry.1483849224" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group34">
                            <label for="">34HR</label>
                            <div class="test">
                                <input type="radio" name="entry.42765907" value="０点">
                                <input type="radio" name="entry.42765907" value="１点">
                                <input type="radio" name="entry.42765907" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group35">
                            <label for="">35HR</label>
                            <div class="test">
                                <input type="radio" name="entry.614844642" value="０点">
                                <input type="radio" name="entry.614844642" value="１点">
                                <input type="radio" name="entry.614844642" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group36">
                            <label for="">36HR</label>
                            <div class="test">
                                <input type="radio" name="entry.1290732062" value="０点">
                                <input type="radio" name="entry.1290732062" value="１点">
                                <input type="radio" name="entry.1290732062" value="２点">
                            </div>
                        </div>
                    </div>
                    <div id="question5" class="title">
                        <h2>部展賞</h2>
                        <h5>入場した部活動展示を0点～2点の中で評価してください</h5>
                        <div class="point_box">
                            <p class="points">0点</p>
                            <p class="points">1点</p>
                            <p class="points">2点</p>
                        </div>
                        <div class="hide_default" id="group41">
                            <label class="text_decoration" for="">美術写真部美術班</label>
                            <div class="test">
                                <input type="radio" name="entry.2047245777" value="０点">
                                <input type="radio" name="entry.2047245777" value="１点">
                                <input type="radio" name="entry.2047245777" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group42">
                            <label class="text_decoration" for="">美術写真部写真班</label>
                            <div class="test">
                                <input type="radio" name="entry.2097788876" value="０点">
                                <input type="radio" name="entry.2097788876" value="１点">
                                <input type="radio" name="entry.2097788876" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group43">
                            <label class="text_decoration" for="">生活文化部</label>
                            <div class="test">
                                <input type="radio" name="entry.77105171" value="０点">
                                <input type="radio" name="entry.77105171" value="１点">
                                <input type="radio" name="entry.77105171" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group44">
                            <label class="text_decoration" for="">百人一首部</label>
                            <div class="test">
                                <input type="radio" name="entry.1871474642" value="０点">
                                <input type="radio" name="entry.1871474642" value="１点">
                                <input type="radio" name="entry.1871474642" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group45">
                            <label class="text_decoration" for="">科学研究部工学情報班</label>
                            <div class="test">
                                <input type="radio" name="entry.1653191176" value="０点">
                                <input type="radio" name="entry.1653191176" value="１点">
                                <input type="radio" name="entry.1653191176" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group46">
                            <label class="text_decoration" for="">科学研究部自然科学班</label>
                            <div class="test">
                                <input type="radio" name="entry.1540895753" value="０点">
                                <input type="radio" name="entry.1540895753" value="１点">
                                <input type="radio" name="entry.1540895753" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group47">
                            <label class="text_decoration" for="">演劇部</label>
                            <div class="test">
                                <input type="radio" name="entry.1073777215" value="０点">
                                <input type="radio" name="entry.1073777215" value="１点">
                                <input type="radio" name="entry.1073777215" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group48">
                            <label class="text_decoration" for="">吹奏楽部</label>
                            <div class="test">
                                <input type="radio" name="entry.43992030" value="０点">
                                <input type="radio" name="entry.43992030" value="１点">
                                <input type="radio" name="entry.43992030" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group49">
                            <label class="text_decoration" for="">弦楽部</label>
                            <div class="test">
                                <input type="radio" name="entry.1268132499" value="０点">
                                <input type="radio" name="entry.1268132499" value="１点">
                                <input type="radio" name="entry.1268132499" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group50">
                            <label class="text_decoration" for="">国際文化部</label>
                            <div class="test">
                                <input type="radio" name="entry.1092554946" value="０点">
                                <input type="radio" name="entry.1092554946" value="１点">
                                <input type="radio" name="entry.1092554946" value="２点">
                            </div>
                        </div>
                        <div class="hide_default" id="group51">
                            <label class="text_decoration" for="">囲碁将棋部</label>
                            <div class="test">
                                <input type="radio" name="entry.1588147744" value="０点">
                                <input type="radio" name="entry.1588147744" value="１点">
                                <input type="radio" name="entry.1588147744" value="２点">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="page3 hide_default">
                    <div id="question6" class="title">
                        <h2>クラT賞<span class="red">(必須)</span></h2>
                        <h5>クラスTシャツのデザインで良いと思ったHRを１つ選んでください。以下の写真をご参考ください。</h5>
                        <p><input type="radio" name="entry.1755872211" value="1AHR">1AHR</p><div id="kurat_1AHR" class="image"></div>
                        <p><input type="radio" name="entry.1755872211" value="1BHR">1BHR</p><div id="kurat_1BHR" class="image"></div>
                        <p><input type="radio" name="entry.1755872211" value="1CHR">1CHR</p><div id="kurat_1CHR" class="image"></div>
                        <p><input type="radio" name="entry.1755872211" value="1DHR">1DHR</p><div id="kurat_1DHR" class="image"></div>
                        <p><input type="radio" name="entry.1755872211" value="投票しない">投票しない</p>
                    </div>
                </div>
                <div class="page4 hide_default">
                    <div id="question7" class="title">
                        <h2>クラT賞<span class="red">(必須)</span></h2>
                        <h5>クラスTシャツのデザインで良いと思ったHRを１つ選んでください。以下の写真をご参考ください。</h5>
                        <p><input type="radio" name="entry.1445752978" value="2AHR">2AHR</p><div id="kurat_2AHR" class="image"></div>
                        <p><input type="radio" name="entry.1445752978" value="2BHR">2BHR</p><div id="kurat_2BHR" class="image"></div>
                        <p><input type="radio" name="entry.1445752978" value="2CHR">2CHR</p><div id="kurat_2CHR" class="image"></div>
                        <p><input type="radio" name="entry.1445752978" value="2DHR">2DHR</p><div id="kurat_2DHR" class="image"></div>
                        <p><input type="radio" name="entry.1445752978" value="投票しない">投票しない</p>
                    </div>
                </div>
                <div class="page5 hide_default">
                    <div id="question8" class="title">
                        <h2>クラT賞<span class="red">(必須)</span></h2>
                        <h5>クラスTシャツのデザインで良いと思ったHRを１つ選んでください。以下の写真をご参考ください。</h5>
                        <p><input type="radio" name="entry.2049555148" value="3AHR">3AHR</p><div id="kurat_3AHR" class="image"></div>
                        <p><input type="radio" name="entry.2049555148" value="3BHR">3BHR</p><div id="kurat_3BHR" class="image"></div>
                        <p><input type="radio" name="entry.2049555148" value="3CHR">3CHR</p><div id="kurat_3CHR" class="image"></div>
                        <p><input type="radio" name="entry.2049555148" value="3DHR">3DHR</p><div id="kurat_3DHR" class="image"></div>
                        <p><input type="radio" name="entry.2049555148" value="投票しない">投票しない</p>
                    </div>
                </div>
                <div class="page6 hide_default">
                    <div id="question9" class="title">
                        <h2>クラT賞<span class="red">(必須)</span></h2>
                        <h5>クラスTシャツのデザインで良いと思ったHRを１つ選んでください。以下の写真をご参考ください。</h5>
                        <p><input type="radio"  name="entry.130477202" value="11HR">11HR</p><div id="kurat_11HR" class="image"></div>
                        <p><input type="radio"  name="entry.130477202" value="12HR">12HR</p><div id="kurat_12HR" class="image"></div>
                        <p><input type="radio"  name="entry.130477202" value="13HR">13HR</p><div id="kurat_13HR" class="image"></div>
                        <p><input type="radio" name="entry.130477202" value="14HR">14HR</p><div id="kurat_14HR" class="image"></div>
                        <p><input type="radio"  name="entry.130477202" value="15HR">15HR</p><div id="kurat_15HR" class="image"></div>
                        <p><input type="radio"  name="entry.130477202" value="16HR">16HR</p><div id="kurat_16HR" class="image"></div>
                        <p><input type="radio" name="entry.130477202" value="17HR">17HR</p><div id="kurat_17HR" class="image"></div>
                        <p><input type="radio" name="entry.130477202" value="投票しない">投票しない</p>
                    </div>
                </div>
                <div class="page7 hide_default">
                    <div id="question10" class="title">
                        <h2>クラT賞<span class="red">(必須)</span></h2>
                        <h5>クラスTシャツのデザインで良いと思ったHRを１つ選んでください。以下の写真をご参考ください。</h5>
                        <p><input type="radio" name="entry.353120643" value="21HR">21HR</p><div id="kurat_21HR" class="image"></div>
                        <p><input type="radio" name="entry.353120643" value="22HR">22HR</p><div id="kurat_22HR" class="image"></div>
                        <p><input type="radio" name="entry.353120643" value="23HR">23HR</p><div id="kurat_23HR" class="image"></div>
                        <p><input type="radio" name="entry.353120643" value="24HR">24HR</p><div id="kurat_24HR" class="image"></div>
                        <p><input type="radio" name="entry.353120643" value="25HR">25HR</p><div id="kurat_25HR" class="image"></div>
                        <p><input type="radio" name="entry.353120643" value="26HR">26HR</p><div id="kurat_26HR" class="image"></div>
                        <p><input type="radio" name="entry.353120643" value="投票しない">投票しない</p>
                    </div>
                </div>
                <div class="page8 hide_default">
                    <div id="question11" class="title">
                        <h2>クラT賞<span class="red">(必須)</span></h2>
                        <h5>クラスTシャツのデザインで良いと思ったHRを１つ選んでください。以下の写真をご参考ください。</h5>
                        <p><input type="radio" name="entry.1661289845" value="31HR">31HR</p><div id="kurat_31HR" class="image"></div>
                        <p><input type="radio" name="entry.1661289845" value="32HR">32HR</p><div id="kurat_32HR" class="image"></div>
                        <p><input type="radio" name="entry.1661289845" value="33HR">33HR</p><div id="kurat_33HR" class="image"></div>
                        <p><input type="radio" name="entry.1661289845" value="34HR">34HR</p><div id="kurat_34HR" class="image"></div>
                        <p><input type="radio" name="entry.1661289845" value="35HR">35HR</p><div id="kurat_35HR" class="image"></div>
                        <p><input type="radio" name="entry.1661289845" value="36HR">36HR</p><div id="kurat_36HR" class="image"></div>
                        <p><input type="radio" name="entry.1661289845" value="投票しない">投票しない</p>
                    </div>
                </div>
                <div class="page9 hide_default">
                    <div id="question12" class="title">
                        <h3>ベストコーディネート賞<span class="red">(必須)</span></h3>
                        <h5>異装のデザインで良いと思ったHR・部活動を１つ選んでください。以下の写真をご参考ください。</h5>
                        <p><input type="radio" name="entry.401001952" value="11HR">11HR</p><div id="isou_11HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="13HR">13HR</p><div id="isou_13HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="14HR">14HR</p><div id="isou_14HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="21HR">21HR</p><div id="isou_21HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="25HR">25HR</p><div id="isou_25HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="31HR">31HR</p><div id="isou_31HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="32HR">32HR</p><div id="isou_32HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="33HR">33HR</p><div id="isou_33HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="34HR">34HR</p><div id="isou_34HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="35HR">35HR</p><div id="isou_35HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="36HR">36HR</p><div id="isou_36HR" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="百人一首部">百人一首部</p><div id="isou_karuta" class="image"></div>
                        <p><input type="radio" name="entry.401001952" value="投票しない">投票しない</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="buttons">
            <a class="button unavailable_button" id="returnButton" onclick="pageReturn()">＜戻る</a>
            <a class="button" id="forwardButton" onclick="pageForward()">次に進む＞</a>
            <button id="submit" class="button hide_default" type="submit" onclick="document.cookie = 'form_submittion = 1;Expires:3;'   ">送信する</button>
        </div>
        </form>
        <footer>
            <div class="footer_contents">
                <div class="footer_icon"><img src="files/header_icon.svg" alt=""></div>
                <div class="footer_items" id="footer_items_1">
                    <a href="about.html"><img src="files/footer_about.svg" alt=""></a>
                    <a href="map.html"><img src="files/footer_map.svg" alt=""></a>
                    <a href="timetable.html"><img src="files/footer_timetable.svg" alt=""></a>
                </div>
                <div class="footer_items" id="footer_items_2">
                    <a href="tenji.html"><img src="files/footer_display.svg" alt=""></a>
                    <a href="http://www.edu.pref.shizuoka.jp/hamamatsunishi-h/home.nsf/IndexFormView?OpenView"><img src="files/footer_HP.svg" alt=""></a>
                    <a href="access.html"><img src="files/footer_access.svg" alt=""></a>
                </div>
                <div class="school_addres"><img src="files/school_addres.svg" alt=""></div>
            </div>
        </footer>
        <!--jQuery読み込み-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--Hamburger buttond JS-->
        <script>
            $(function() {
                $('.hamburger').click(function() {
                    $(this).toggleClass('active');
                    
                    if ($(this).hasClass('active')) {
                        $('.hamburger_list').addClass('active');
                        $(".circle-bg").addClass('circleactive');//丸背景にcircleactiveクラスを付与
                    } else {
                        $('.hamburger_list').removeClass('active');
                        $(".circle-bg").removeClass('circleactive');//丸背景にcircleactiveクラスを付与
                    }
                });

                $('.subMenu').click(function() {
                    $(this).toggleClass('active');
                    
                    if ($(this).hasClass('active')) {
                        $('.subMenu').addClass('active');
                        $('.menu_open').addClass('active');
                    } else {
                        $('.subMenu').removeClass('active');
                        $('.menu_open').removeClass('active');
                    }
                });
            });

            $('input[name="entry.1503197076"]').change(function(){
                var result = $(this).val();
                switch(result){
                    case "一般の方":
                        $('#question2').addClass('question_hidden');
                        $('input[name="entry.538058966"]').prop('disabled',true);
                        $('#question3').addClass('question_hidden');
                        $('input[name="entry.290451178"]').prop('disabled',true);
                        break;
                    default:
                        $('#question2').removeClass('question_hidden');
                        $('input[name="entry.538058966"]').prop('disabled',false);
                        $('#question3').removeClass('question_hidden');
                        $('input[name="entry.290451178"]').prop('disabled',false);
                }
            })


            let page = 1;

            function pageReturn(){
                if(page == 2){
                    $('.page1').removeClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').addClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
                else if(page == 3){
                    $('.page1').addClass('hide_default');
                    $('.page2').removeClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions9 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions9);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').removeClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
                else if(page == 4){
                    $('.page1').addClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page3').removeClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions10 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions10);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').removeClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
                else if(page == 5){
                    $('.page1').addClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page4').removeClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions11 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions11);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').removeClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
                else if(page == 6){
                    $('.page1').addClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page5').removeClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions12 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions12);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').removeClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
                else if(page == 7){
                    $('.page1').addClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page6').removeClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions13 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions13);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').removeClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
                else if(page == 8){
                    $('.page1').addClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page7').removeClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions14 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions14);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').removeClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
                else if(page == 9){
                    $('.page1').addClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page8').removeClass('hide_default');
                    $('.page9').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions15 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions15);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').removeClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
            }

            function pageForward(){
                if(page == 1){
                    var result1 = $('input[name="entry.1503197076"]:checked').val();
                    if(result1){
                    $('.page9').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page3').addClass('hide_default');
                    $('.page2').removeClass('hide_default');
                    $('.page1').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions1 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions1);
                    $('#returnButton').removeClass('unavailable_button');
                    $('#forwardButton').removeClass('hide_default');
                    $('#submit').addClass('hide_default');
                    page++;
                    }else{
                        alert("回答していない項目があります。");
                    }
                }
                else if(page == 2){
                    $('.page9').addClass('hide_default');
                    $('.page8').addClass('hide_default');
                    $('.page7').addClass('hide_default');
                    $('.page6').addClass('hide_default');
                    $('.page5').addClass('hide_default');
                    $('.page4').addClass('hide_default');
                    $('.page3').removeClass('hide_default');
                    $('.page2').addClass('hide_default');
                    $('.page1').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions2 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions2);
                    $('#returnButton').removeClass('unavailable_button');
                    $('#forwardButton').removeClass('hide_default');
                    $('#submit').addClass('hide_default');
                    page++;
                }
                else if(page == 3){
                    var result1 = $('input[name="entry.1755872211"]:checked').val();
                    if(result1){
                        $('.page9').addClass('hide_default');
                        $('.page8').addClass('hide_default');
                        $('.page7').addClass('hide_default');
                        $('.page6').addClass('hide_default');
                        $('.page5').addClass('hide_default');
                        $('.page4').removeClass('hide_default');
                        $('.page3').addClass('hide_default');
                        $('.page2').addClass('hide_default');
                        $('.page1').addClass('hide_default');
                        //スクロールさせる条件を指定
                        var scrollToOptions3 = {
                            top : 0, //スクロール位置にページ最上部を指定
                            behavior : 'smooth' //スムーズに移動させる条件を指定
                        };
                        //スクロールを実施する
                        window.scrollTo(scrollToOptions3);
                        $('#returnButton').removeClass('unavailable_button');
                        $('#forwardButton').removeClass('hide_default');
                        $('#submit').addClass('hide_default');
                        page++;
                    }else{
                        alert("回答していない項目があります。");
                    }
                }
                else if(page == 4){
                    var result1 = $('input[name="entry.1445752978"]:checked').val();
                    if(result1){
                        $('.page9').addClass('hide_default');
                        $('.page8').addClass('hide_default');
                        $('.page7').addClass('hide_default');
                        $('.page6').addClass('hide_default');
                        $('.page5').removeClass('hide_default');
                        $('.page4').addClass('hide_default');
                        $('.page3').addClass('hide_default');
                        $('.page2').addClass('hide_default');
                        $('.page1').addClass('hide_default');
                        //スクロールさせる条件を指定
                        var scrollToOptions4 = {
                            top : 0, //スクロール位置にページ最上部を指定
                            behavior : 'smooth' //スムーズに移動させる条件を指定
                        };
                        //スクロールを実施する
                        window.scrollTo(scrollToOptions4);
                        $('#returnButton').removeClass('unavailable_button');
                        $('#forwardButton').removeClass('hide_default');
                        $('#submit').addClass('hide_default');
                        page++;
                    }else{
                        alert("回答していない項目があります。");
                    }
                }
                else if(page == 5){
                    var result1 = $('input[name="entry.2049555148"]:checked').val();
                    if(result1){
                        $('.page9').addClass('hide_default');
                        $('.page8').addClass('hide_default');
                        $('.page7').addClass('hide_default');
                        $('.page6').removeClass('hide_default');
                        $('.page5').addClass('hide_default');
                        $('.page4').addClass('hide_default');
                        $('.page3').addClass('hide_default');
                        $('.page2').addClass('hide_default');
                        $('.page1').addClass('hide_default');
                        //スクロールさせる条件を指定
                        var scrollToOptions5 = {
                            top : 0, //スクロール位置にページ最上部を指定
                            behavior : 'smooth' //スムーズに移動させる条件を指定
                        };
                        //スクロールを実施する
                        window.scrollTo(scrollToOptions5);
                        $('#returnButton').removeClass('unavailable_button');
                        $('#forwardButton').removeClass('hide_default');
                        $('#submit').addClass('hide_default');
                        page++;
                    }else{
                        alert("回答していない項目があります。");
                    }
                }
                else if(page == 6){
                    var result1 = $('input[name="entry.130477202"]:checked').val();
                    if(result1){
                        $('.page9').addClass('hide_default');
                        $('.page8').addClass('hide_default');
                        $('.page7').removeClass('hide_default');
                        $('.page6').addClass('hide_default');
                        $('.page5').addClass('hide_default');
                        $('.page4').addClass('hide_default');
                        $('.page3').addClass('hide_default');
                        $('.page2').addClass('hide_default');
                        $('.page1').addClass('hide_default');
                        //スクロールさせる条件を指定
                        var scrollToOptions6 = {
                            top : 0, //スクロール位置にページ最上部を指定
                            behavior : 'smooth' //スムーズに移動させる条件を指定
                        };
                        //スクロールを実施する
                        window.scrollTo(scrollToOptions6);
                        $('#returnButton').removeClass('unavailable_button');
                        $('#forwardButton').removeClass('hide_default');
                        $('#submit').addClass('hide_default');
                        page++;
                    }else{
                        alert("回答していない項目があります。");
                    }
                }
                else if(page == 7){
                    var result1 = $('input[name="entry.353120643"]:checked').val();
                    if(result1){
                        $('.page9').addClass('hide_default');
                        $('.page8').removeClass('hide_default');
                        $('.page7').addClass('hide_default');
                        $('.page6').addClass('hide_default');
                        $('.page5').addClass('hide_default');
                        $('.page4').addClass('hide_default');
                        $('.page3').addClass('hide_default');
                        $('.page2').addClass('hide_default');
                        $('.page1').addClass('hide_default');
                        //スクロールさせる条件を指定
                        var scrollToOptions7 = {
                            top : 0, //スクロール位置にページ最上部を指定
                            behavior : 'smooth' //スムーズに移動させる条件を指定
                        };
                        //スクロールを実施する
                        window.scrollTo(scrollToOptions7);
                        $('#returnButton').removeClass('unavailable_button');
                        $('#forwardButton').removeClass('hide_default');
                        $('#submit').addClass('hide_default');
                        page++;
                    }else{
                        alert("回答していない項目があります。");
                    }
                }
                else if(page == 8){
                    var result1 = $('input[name="entry.1661289845"]:checked').val();
                    if(result1){
                        $('.page9').removeClass('hide_default');
                        $('.page8').addClass('hide_default');
                        $('.page7').addClass('hide_default');
                        $('.page6').addClass('hide_default');
                        $('.page5').addClass('hide_default');
                        $('.page4').addClass('hide_default');
                        $('.page3').addClass('hide_default');
                        $('.page2').addClass('hide_default');
                        $('.page1').addClass('hide_default');
                        //スクロールさせる条件を指定
                        var scrollToOptions8 = {
                            top : 0, //スクロール位置にページ最上部を指定
                            behavior : 'smooth' //スムーズに移動させる条件を指定
                        };
                        //スクロールを実施する
                        window.scrollTo(scrollToOptions8);
                        $('#returnButton').removeClass('unavailable_button');
                        $('#forwardButton').addClass('hide_default');
                        $('#submit').removeClass('hide_default');
                        page++;
                    }else{
                        alert("回答していない項目があります。");
                    }
                }
            }
        </script>
        <script>
            function on_submit(){
                // ボタン 'btn' を disabled に。
                document.getElementById('submit').disabled = true;
            }
            document.getElementById('voting_form').addEventListener('submit',on_submit);
        </script>
        <?php
        $count = 11;
        while($count <= 51) {
            if(isset($_COOKIE[$count])){
            if($_COOKIE[$count] == 1){
            ?>
        <script>
            $(<?php echo "\"#group".$count."\""; ?>).removeClass("hide_default");
        </script>
        <?php
            }}
           $count++;
        }
        ?>
        <script>
            console.log('Radio: ', formElements.radio.entry.538058966);
        </script>
    </body>
</html>
