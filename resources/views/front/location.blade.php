@extends('layouts.template')
@section('title','星月文旅-交通指南')

@section('css')
<!-- Bootstrap 5 Css Core -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- CSS -->
<link rel="stylesheet" href="{{asset('./css/location.css')}}">
@endsection

@section('main')
<div class="page-wrapper">
    <div class="main">
        <!-- 滿版照片 -->
        <div class="head"></div>

        <section class="content">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.3973715138773!2d120.69972994930951!3d24.332646872126368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34690ffcd9a0b4b5%3A0x447fadfcfa6b8033!2z5pif5pyI5paH5peFIHwg5rqr5rOJIHwg5aW95a6i5rCR5a6_!5e0!3m2!1szh-TW!2stw!4v1641477430635!5m2!1szh-TW!2stw"
                width=100% height=100% style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- <div class="titleArea"><a href="#">交通指南</a></div> -->
            <a href="#">
                <div id="triangle" class="triangle-right"></div>
            </a>
            <div class="loaction">
                <div class="contentBox cubeinfo01" href="javascript: void(0);">
                    <a class="close1" href="javascript: void(0);"></a>

                    <div class="articleBox">
                        <div class="articleArea">
                            <h3 class="car">開車</h3>
                            <div>
                                (一)走國道1號：</div>
                            <div>
                                國1下→往外埔（大摩天輪）方向→約3分鐘車程即可抵達。</div>
                            <div>
                                (二)走國道3號：</div>
                            <div>
                                國3下→往后里（大摩天輪）方向→約5至10分鐘車程可抵達。</div>

                            <h3 class="bus">公車</h3>
                            <p>
                                豐原客運214號：
                                后里馬場或大甲火車站發車→六分月眉北路口站牌下車 →步行約5分鐘抵達。</p>
                            <p>豐原客運215號：
                                豐原或大甲體育場發車→麗寶樂園站下車→步行約20分鐘抵達</p>
                            <p>統聯客運155號：
                                高鐵台中站或麗寶樂園發車→麗寶樂園站下車→步行約20分鐘抵達</p>
                            <p>統聯客運155副線：
                                高鐵台中站或麗寶樂園發車→月眉北路口站牌下車→步行約15分鐘抵達</p>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <footer class="footer">
            <div class="align">
                <span class="addr">台中市后里區月眉北路486號(大摩天輪正後方)</span>
                <span class="tel">電話：04-26831671 / 傳真：04-26834003</span>
            </div>
        </footer>

    </div>
</div>

@endsection

@section('js')
<script>
    var isShow = false;
    $("#triangle").click(function () {
        if (isShow == true) {
            $(".loaction").animate({ 'left': '-1000px' }, 1000, function () {
            $('#triangle').removeClass('triangle-left');
            $('#triangle').addClass('triangle-right');
            isShow = false;
            });
        } else {
            $(".loaction").animate({ 'left': '290px' }, 1000, function () {
            $('#triangle').removeClass('triangle-right');
            $('#triangle').addClass('triangle-left');
            isShow = true;
            });
        }      
    });
</script>
@endsection