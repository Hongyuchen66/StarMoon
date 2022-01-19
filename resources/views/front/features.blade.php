@extends('layouts.template')
@section('title','星月文旅-園區特色')

@section('css')
<!-- CSS -->
<link rel="stylesheet" href="{{asset('css/features.css')}}">
<!-- Swiper css -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@section('main')
<div class="page-wrapper">
    <!-- 滿版照片 -->
    <div class="head">
        <div class="main">
            <div class="main-title">
                <h5>Features</h5>
            </div>
            <hr>
            <div class="room-type">
                {{-- <span>景觀婚宴館</span>
                <span>親子遊戲區</span>
                <span>戶外溫泉區</span> --}}
                <span hidden><a href="{{route('features.list','type_id=2')}}" class="tab">景觀婚宴館</a></span>

                @foreach ($featureTypes as $featureType)
                <span><a href="{{route('features.list','type_id='.$featureType->id)}}"
                        class="tab">{{$featureType->title}}</a></span>

                @endforeach
            </div>
        </div>
    </div>

    <section class="content">
        <div class="pic">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($featureImages as $feature)
                    <div class="swiper-slide">
                        <img src="{{Storage::url($feature->image_url)}}" />
                    </div>
                    @endforeach
                    {{-- <div class="swiper-slide">
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
                    </div> --}}
                </div>

            </div>

            <div class="down-Swiper">
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($featureImages as $feature)
                        <div class="swiper-slide">
                            <img src="{{Storage::url($feature->image_url)}}" />
                        </div>
                        @endforeach
                        {{-- <div class="swiper-slide">
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
                        </div> --}}
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
                <span class="title">LANDSCAPE BANQUET</span>
                <span class="title">HALL</span>

                @foreach ($features as $feature)
                <span class="subtitle">
                    <span class="area">{{$feature->title}}</span>
                    <span class="opentime">開放時間 11:00 - 21:00</span>
                    <span class="onlineorder">線上預約</span>
                </span>

                <span class="memo" disabled name="" id="" cols="50" rows="16">
                    {!!$feature->description!!}
                </span>
                @endforeach
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