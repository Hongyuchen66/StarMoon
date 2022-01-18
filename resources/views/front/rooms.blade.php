@extends('layouts.template')
@section('title','星月文旅-房型介紹')

@section('css')
<!-- CSS -->
<link rel="stylesheet" href="{{asset('css/features.css')}}">
<!-- Swiper css -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('main')
<div class="page-wrapper">
<!-- 滿版照片 -->
<div class="head">
    <div class="main">
        <div class="main-title">
            <h5>HOME / ROOM</h5>
        </div>
        <hr>
        <div class="room-type">
            <span>精品雙人房</span>
            <span>簡約雙人房</span>
            <span>家庭四人房</span>
            <span>溫泉湯屋休息</span>
            @foreach ($roomTypes as $roomType)
            <span><a href="#" class="tab">{{$roomType->name}}</a></span>
            {{-- <a href="{{route('rooms','type_id='.$roomType->id)}}" class="tab">{{$roomType->name}}</a> --}}
            @endforeach
        </div>
    </div>
</div>

<section class="content">
    <div class="pic">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                </div>

            </div>

        </div>

        <div class="down-Swiper">
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div> -->
            </div>
            <p>
                <img class="prev" src="{{asset('img/prev.png')}}" alt="" srcset="">
                <img class="next" src="{{asset('img/next.png')}}" alt="" srcset="">
                <!-- <span class="prev">  prev</span> -->
                <!-- <span class="next">next</span> -->
            </p>
        </div>
    </div>

    <div class="right">
        <div class="contain-text">
            <h2 class="title">DELUEX TWIN BEDS</h2>
            <h2 class="title">ROOM</h2>

            <span class="subtitle">
                <span class="area">精品雙人房</span>
                <span class="opentime">免費WIFI</span>
                <span class="onlineorder">線上預約</span>
            </span>
            <textarea class="memo" name="" id="" cols="50" rows="16">
            公共區設施與服務  公共區域 WIFI   嬰兒床 
            嬰兒澡盆         代售旅遊票券    溫泉
            露天浴池         兒童遊戲區      花園
            電梯            轉接頭         行李寄放
            停車場
            </textarea>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper  -->
<script>
    var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,

  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".next",
      prevEl: ".prev",
    },


    thumbs: {
      swiper: swiper,
    },
  });
</script>
@endsection