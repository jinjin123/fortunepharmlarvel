@include('global')
<?php
$page="home";
$name_lang="name_".$lang;
$slogan_lang="slogan_".$lang;
$img_lang="img_".$lang;
$home_path=$GLOBALS['home_directory'];
$seo="香港幸福医药、幸福伤风素、幸福科达琳、发烧、风寒风热感冒、流感、头痛、治疗感冒咳嗽最快的方法、感冒吃什么药好得快、流鼻涕鼻塞怎么办";
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body id="index">
    <div id="wrapper">
        @include('layouts/sidebar')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            @include('layouts/header')
            <section id="main">
                <div class="container-fluid">
                    <!-- desktop -->
                    <div class="desktop-main main-wrapper hidden-xs">
                        <div class="col-sm-9-4 row-sm-9-4">
                            <div class="col-sm-12 row-sm-9-4 nopadding">
                                <!-- block1 -->
                                <div class="index-wrapper">
                                    <div id="banner-wrapper" class="banner-wrapper carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <?php $x=0;?>
                                            <?php foreach ($homesliders as $homeslider):?>
                                            <li data-target="#banner-wrapper" data-slide-to="{{$x}}" class="<?=$x==0?'active':''?>"></li>
                                            <?php $x++;?>
                                            <?php endforeach;?>

                                        </ol>
                                        <div class="carousel-inner" role="listbox">

                                            <?php $x=0;?>
                                            <?php foreach ($homesliders as $homeslider):?>
                                            <div class="<?=$x==0?'item active':'item'?>"><a target="<?=$homeslider->linktype=="ex"?'_blank':'_self';?>" href="<?=$homeslider->linktype=="ex"?"$homeslider->link":"$home_path$lang/$homeslider->link";?>"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/full/{{$homeslider->$img_lang}}"/></a></div>
                                            <?php $x++;?>
                                            <?php endforeach;?>



                                        </div>
                                    </div>
                                </div>
                                <!-- block1 -->
                            </div>
                        </div>
                        <div class="col-sm-9-3 row-sm-9-4">
                            <div class="col-sm-4 row-sm-9-1 nopadding">
                                <!-- block5 -->
                                <div class="index-wrapper">
                                    <a href="{{$GLOBALS['home_directory']}}{{$lang}}/product/hongkong/1/0" class="link-wrapper style1">
                                        <h3>{{$menus[1]->$name_lang}}</h3>
                                        <p>{{$menus[1]->$slogan_lang}}</p>
                                    </a>
                                </div>
                                <!-- block5 -->
                            </div>
                            <div class="col-sm-4 row-sm-9-1 nopadding">
                                <!-- block6 -->
                                <div class="index-wrapper">
                                    <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_01.jpg"/>
                                </div>
                                <!-- block6 -->
                            </div>
                            <div class="col-sm-4 row-sm-9-1 nopadding">
                                <!-- block7 -->
                                <div class="index-wrapper">
                                    <a href="{{$GLOBALS['home_directory']}}{{$lang}}/product/hongkong/8/0" class="link-wrapper style1">
                                        <h3>兒童產品</h3>
                                        <p>為兒童走多步</p>
                                    </a>
                                </div>
                                <!-- block7 -->
                            </div>
                            <div class="col-sm-8 row-sm-9-2 nopadding">
                                <div class="col-sm-12 row-sm-9-1 nopadding">
                                    <!-- block8 -->
                                    <div class="index-wrapper">
                                    <a href="{{$GLOBALS['home_directory']}}{{$lang}}/advertisements/0" class="video-wrapper">
                                    <?php if($lang=='cht'):?>
                                    <p class="video-text1">按此</p>
                                    <p class="video-text2">欣賞廣告</p>
                                    <?php elseif($lang=='chs'):?>
                                    <p class="video-text1">按此</p>
                                    <p class="video-text2">欣赏广告</p>
                                    <?php else:?>
                                       <p class="video-text1">Click Here</p>
                                    <p class="video-text2">Watching Advertisment</p>
                                    <?php endif;?>
                                    </a>
                                    </div>
                                    <!-- block8 -->
                                </div>
                                <div class="col-sm-6 row-sm-9-1 nopadding">
                                    <!-- block9 -->
                                    <div class="index-wrapper">
                                        <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_02.jpg"/>
                                    </div>
                                    <!-- block9 -->
                                </div>
                                <div class="col-sm-6 row-sm-9-1 nopadding">
                                    <!-- block10 -->
                                    <div class="index-wrapper">
                                        <a href="{{$GLOBALS['home_directory']}}{{$lang}}/company-history" class="link-wrapper style1">
                                            <h3>{{$menus[5]->$name_lang}}</h3>
                                            <p>{{$menus[5]->$slogan_lang}}</p>
                                        </a>
                                    </div>
                                    <!-- block10 -->
                                </div>
                            </div>
                            <div class="col-sm-4 row-sm-9-2 nopadding">
                                <!-- block11 -->
                                <div class="index-wrapper">
                                    <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_05.jpg"/>
                                </div>
                                <!-- block11 -->
                            </div>
                            <div class="col-sm-4 row-sm-9-1 nopadding">
                                <!-- block4 -->
                                <div class="index-wrapper">
                                    <a href="{{$GLOBALS['home_directory']}}{{$lang}}/product_take" class="link-wrapper style1">
                                            <h3>{{$menus[2]->$name_lang}}</h3>
                                        <p>{{$menus[2]->$slogan_lang}}</p>
                                    </a>
                                </div>
                                <!-- block4 -->
                            </div>
                            <div class="col-sm-4 row-sm-9-1 nopadding">
                                <!-- block12 -->
                                <div class="index-wrapper">
                                    <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_03.jpg"/>
                                </div>
                                <!-- block12 -->
                            </div>
                            <div class="col-sm-4 row-sm-9-1 nopadding">
                                <!-- block13 -->
                                <div class="index-wrapper">
                                    <a href="{{$GLOBALS['home_directory']}}{{$lang}}/faq/0" class="link-wrapper style1">
                                        <h3>{{$menus[3]->$name_lang}}</h3>
                                        <p>{{$menus[3]->$slogan_lang}}</p>
                                    </a>
                                </div>
                                <!-- block13 -->
                            </div>
                        </div>
                        <div class="col-sm-9-2 row-sm-9-4">
                            <div class="col-sm-12 row-sm-9-2 nopadding">
                                <!-- block14 -->
                                <div class="index-wrapper">
                                    <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_07.jpg"/>
                                </div>
                                <!-- block14 -->
                            </div>
                            <div class="col-sm-6 row-sm-9-2 nopadding">
                                <div class="col-sm-12 row-sm-9-1 nopadding">
                                    <!-- block15 -->
                                    <div class="index-wrapper">
                                        <a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips" class="link-wrapper style1">
                                            <h3>{{$menus[4]->$name_lang}}</h3>
                                        <p>{{$menus[4]->$slogan_lang}}</p>
                                        </a>
                                    </div>
                                    <!-- block15 -->
                                </div>
                                <div class="col-sm-12 row-sm-9-1 nopadding">
                                    <!-- block16 -->
                                    <div class="index-wrapper">
                                        <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_04.jpg"/>
                                    </div>
                                    <!-- block16 -->
                                </div>
                            </div>
                            <div class="col-sm-6 row-sm-9-2 nopadding">
                                <!-- block17 -->
                                <div class="index-wrapper">
                                    <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_06.jpg"/>
                                </div>
                                <!-- block17 -->
                            </div>
                        </div>
                        <div class="col-sm-9-3 row-sm-9-1">
                            <!-- block18 -->
                            <div class="index-wrapper">
                            <a target="<?=$homebanners[0]->linktype=="ex"?'_blank':'_self';?>"  href="<?=$homebanners[0]->linktype=="ex"?$homebanners[0]->link:$home_path.$lang."/".$homebanners[0]->link;?>">
                                    <div class="info-label">{{$homebanners[0]->$name_lang}}</div>
                                    <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$homebanners[0]->$img_lang}}"/>
                                </a>
                            </div>
                            <!-- block18 -->
                        </div>
                        <div class="col-sm-9-3 row-sm-9-1">
                            <!-- block19 -->
                            <div class="index-wrapper">
                                    <a target="<?=$homebanners[1]->linktype=="ex"?"_blank":"_self";?>" href="<?=$homebanners[1]->linktype=="ex"?$homebanners[1]->link:$home_path.$lang."/".$homebanners[1]->link;?>">
                                    <div class="info-label">{{$homebanners[1]->$name_lang}}</div>
                                    <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$homebanners[1]->$img_lang}}"/>
                                </a>
                            </div>
                            <!-- block19 -->
                        </div>
                        <div class="col-sm-9-3 row-sm-9-1">
                            <!-- block20 -->
                            <div class="index-wrapper">
                                    <a target="<?=$homebanners[2]->linktype=="ex"?"_blank":"_self";?>"  href="<?=$homebanners[2]->linktype=="ex"?$homebanners[2]->link:$home_path.$lang."/".$homebanners[2]->link;?>">
                                    <div class="info-label">{{$homebanners[2]->$name_lang}}</div>
                                    <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$homebanners[2]->$img_lang}}"/>
                                </a>
                            </div>
                            <!-- block20 -->
                        </div>
                    </div>
                    <!-- desktop -->

                    <!-- mobile -->
                    <div class="mobile-main main-wrapper visible-xs">
                        <div class="col-xs-12 row-xs-12 nopadding">
                            <!-- block1 -->
                            <div class="index-wrapper">
                                <div id="banner-wrapper-mobile" class="banner-wrapper carousel slide" data-ride="carousel2">
                                    <ol class="carousel-indicators">
                                        <?php $x=0;?>
                                            <?php foreach ($homesliders as $homeslider):?>
                                            <li data-target="#banner-wrapper-mobile" data-slide-to="{{$x}}" class="<?=$x==0?'active':''?>"></li>
                                            <?php $x++;?>
                                            <?php endforeach;?>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <?php $x=0;?>
                                            <?php foreach ($homesliders as $homeslider):?>
                                                <div class="<?=$x==0?'item active':'item'?>"><a target="<?=$homeslider->linktype=="ex"?'_blank':'_self';?>" href="<?=$homeslider->linktype=="ex"?"$homeslider->link":"$home_path$lang/$homeslider->link";?>"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/full/{{$homeslider->$img_lang}}"/></a></div>
                                            <?php $x++;?>
                                            <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <!-- block1 -->
                        </div>
                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block5 -->
                            <div class="index-wrapper">
                                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/home" class="link-wrapper style1">
                                    <h3>{{$menus[0]->$name_lang}}</h3>
                                    <p>{{$menus[0]->$slogan_lang}}</p>
                                </a>
                            </div>
                            <!-- block5 -->
                        </div>
                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block6 -->
                            <div class="index-wrapper">
                                <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_01.jpg"/>
                            </div>
                            <!-- block6 -->
                        </div>
                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block7 -->
                            <div class="index-wrapper">
                                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/product/hongkong/8/0" class="link-wrapper style1">
                                <h3>兒童產品</h3>
                                <p>為兒童走多步</p>
                                </a>
                            </div>
                            <!-- block7 -->
                        </div>
                        <div class="col-xs-8 row-xs-4 nopadding">
                            <!-- block8 -->
                            <div class="index-wrapper">
                                    <a href="{{$GLOBALS['home_directory']}}{{$lang}}/advertisements/0" class="video-wrapper">
                                    <?php if($lang=='cht'):?>
                                    <p class="video-text1">按此</p>
                                    <p class="video-text2">欣賞廣告</p>
                                    <?php elseif($lang=='chs'):?>
                                    <p class="video-text1">按此</p>
                                    <p class="video-text2">欣赏广告</p>
                                    <?php else:?>
                                       <p class="video-text1">Click Here</p>
                                    <p class="video-text2">Watching Advertisment</p>
                                    <?php endif;?>
                                    </a>
                            </div>
                            <!-- block8 -->
                        </div>
                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block15 -->
                            <div class="index-wrapper">
                                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/product/hongkong/1/0" class="link-wrapper style1">
                                    <h3>{{$menus[1]->$name_lang}}</h3>
                                    <p>{{$menus[1]->$slogan_lang}}</p>
                                </a>
                            </div>
                            <!-- block15 -->
                        </div>

                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block3 -->
                            <div class="index-wrapper">
                                <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_02.jpg"/>
                            </div>
                            <!-- block3 -->
                        </div>

                        <div class="col-xs-8 row-xs-4 nopadding">
                            <!-- block2 -->
                            <div class="index-wrapper">
                                <a href="{{$GLOBALS['home_directory']}}/{{$lang}}/company-history" class="link-wrapper style1">
                                <h3>{{$menus[5]->$name_lang}}</h3>
                                    <p>{{$menus[5]->$slogan_lang}}</p>
                                </a>
                            </div>
                            <!-- block2 -->
                        </div>

                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block4 -->
                            <div class="index-wrapper">
                                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/product_take" class="link-wrapper style1">
                                    <h3>{{$menus[2]->$name_lang}}</h3>
                                    <p>{{$menus[2]->$slogan_lang}}</p>
                                </a>
                            </div>
                            <!-- block4 -->
                        </div>
                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block13 -->
                            <div class="index-wrapper">
                                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/faq/0" class="link-wrapper style1">
                                <h3>{{$menus[3]->$name_lang}}</h3>
                                    <p>{{$menus[3]->$slogan_lang}}</p>
                                </a>
                            </div>
                            <!-- block13 -->
                        </div>
                        <div class="col-xs-4 row-xs-4 nopadding">
                            <!-- block16 -->
                            <div class="index-wrapper">
                            <img src="{{$GLOBALS['home_directory']}}assets/img/index_img_04.jpg"/>
                            </div>
                            <!-- block16 -->
                        </div>
                        <div class="col-xs-12 row-xs-4 nopadding">
                            <!-- block18 -->
                            <div class="index-wrapper">
                                <a target="<?=$homebanners[0]->linktype=="ex"?'_blank':'_self';?>"  href="<?=$homebanners[2]->linktype=="ex"?$homebanners[0]->link:$home_path.$lang."/".$homebanners[0]->link;?>">
                                    <div class="info-label">{{$homebanners[0]->$name_lang}}</div>
                                <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$homebanners[0]->$img_lang}}"/>
                                </a>
                            </div>
                            <!-- block18 -->
                        </div>
                        <div class="col-xs-12 row-xs-4 nopadding">
                            <!-- block19 -->
                            <div class="index-wrapper">
                                <a target="<?=$homebanners[1]->linktype=="ex"?'_blank':'_self';?>"  href="<?=$homebanners[2]->linktype=="ex"?$homebanners[1]->link:$home_path.$lang."/".$homebanners[1]->link;?>">
                                    <div class="info-label">{{$homebanners[1]->$name_lang}}</div>
                                        <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$homebanners[1]->$img_lang}}"/>
                                </a>
                            </div>
                            <!-- block19 -->
                        </div>
                        <div class="col-xs-12 row-xs-4 nopadding">
                            <!-- block20 -->
                            <div class="index-wrapper">
                                <a target="<?=$homebanners[2]->linktype=="ex"?'_blank':'_self';?>"  href="<?=$homebanners[2]->linktype=="ex"?$homebanners[2]->link:$home_path.$lang."/".$homebanners[2]->link;?>">
                                    <div class="info-label">{{$homebanners[2]->$name_lang}}</div>
                                    <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$homebanners[2]->$img_lang}}"/>
                                </a>
                            </div>
                            <!-- block20 -->
                        </div>
                    </div>
                    <!-- mobile -->
                </div>
            </section>
            @include('layouts/footer')
        </div>
        <!-- Page Content -->
    </div>
</body>
</html>
