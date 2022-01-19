<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>星月文旅-首頁</title>

    {{-- Google驗證 --}}
    {!! htmlScriptTagJsApi() !!}

    {{-- icon link --}}
    <link rel="icon" href="{{asset('img/favicon.ico')}}" />

    <!-- bookblock CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bookblock.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/demo1.css')}}" />
    <script src="{{asset('js/modernizr.custom.js')}}"></script>

    <!-- Swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/index2.css">
    <!-- Swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- 聯絡我們css -->
    <link rel="stylesheet" href="./css/contact.css">

</head>

<body>
    <!-- nav -->
    <div class="navbar collapse navbar-collapse">
        <div class="logo"></div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#introduce">
                    <h3>TOP</h3>
                </a></li>
            <li class="nav-item"><a href="{{route('rooms.list')}}" target="_blank">
                    <h3>房型介紹</h3>
                </a></li>
            <li class="nav-item"><a href="{{route('features.list')}}" target="_blank">
                    <h3>園區特色</h3>
                </a></li>
            <li class="nav-item"><a href="#news">
                    <h3>最新消息</h3>
                </a></li>
            <li class="nav-item"><a href="#evaluation">
                    <h3>評價</h3>
                </a></li>
            <li class="nav-item"><a href="{{route('location')}}" target="_blank">
                    <h3>交通資訊</h3>
                </a></li>
            <li class="nav-item"><a class="nav-link"
                    href="https://booking.owlting.com/smbnb?lang=zh_TW&start=2022-01-09&end=2022-01-10&adult=1&child=0&infant=0"
                    target="_blank">
                    <h3>線上訂房</h3>
                </a>
            </li>
            <li class="nav-item"><a class="btn popup-btn" href="#letmeopen">
                    <h3>聯絡我們</h3>
                </a></li>
        </ul>
    </div>

    <!-- 內容區-整個右邊 -->
    <div class=" content">

        <!-- 第一頁~理念 -->
        <section class="introduce" id="introduce">

            <div class="introduce-top-photo photo">
                <div class="sky">
                    <div class="stars">
                        <div class="falling-stars">
                            <div class="star-fall"></div>
                            <div class="star-fall"></div>
                            <div class="star-fall"></div>
                            <div class="star-fall"></div>
                        </div>
                        <div class="small-stars">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                        <div class="medium-stars">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                        </div>
                    </div>
                    <div class="moon-wrapper">
                        <div class="moonlight moonlight-1">
                            <div class="moonlight moonlight-2">
                                <div class="moonlight moonlight-3">
                                    <div class="moonlight moonlight-4">
                                        <div class="moon">
                                            <div class="shadow shadow-1"></div>
                                            <div class="shadow shadow-2"></div>
                                            <div class="shadow shadow-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="introduce-top-info info">
                <h3>碰見的每一個瞬間　都是一個正好的時間　所以旅行　然後遇見　滿天星月<h3>
                        <h2> 您旅行中的家 星月文旅</h2>

                        <!-- 照片切換本 -->
                        <div class="main clearfix">
                            <div class="bb-custom-wrapper">
                                <div id="bb-bookblock" class="bb-bookblock">
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL01.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL02.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL03.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL04.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL05.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL06.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL07.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL08.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL09.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL10.jpg')}}" width="100%" height="400px" />
                                    </div>
                                    <div class="bb-item">
                                        <img src="{{asset('img/FL11.jpg')}}" width="100%" height="400px" />
                                    </div>
                                </div>
                                <nav>
                                    <a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First
                                        page</a>
                                    <a id="bb-nav-prev" href="#"
                                        class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
                                    <a id="bb-nav-next" href="#"
                                        class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
                                    <a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last
                                        page</a>
                                </nav>
                            </div>
                        </div>
            </div>

            <div class="introduce-middle-photo photo">
                <div id="hearts">
                    <div class="heart1">&hearts;</div>
                    <div class="heart2">&hearts;</div>
                    <div class="heart3">&hearts;</div>
                    <div class="heart4">&hearts;</div>
                    <div class="heart5">&hearts;</div>
                    <div class="heart6">&hearts;</div>
                    <div class="heart7">&hearts;</div>
                    <div class="heart8">&hearts;</div>
                </div>
            </div>

            <div class="introduce-bottom-info info">
                <h2>關於　星月文旅</h2>
                <h3>我們坐落於外埔河階地制高點<br>
                    可以看到超遼闊的河谷景觀　俯瞰附近地區的房舍街景　遠望充滿力量大山大海<br>
                    傍晚吹著微風、看夕陽暈染天空的景色…<br>
                    <br>
                    與您分享 這片天地
                </h3>
            </div>

            <div class="introduce-bottom-photo photo"></div>
        </section>


        <!-- 房型介紹 -->
        <section class="room-type">
            <div class="info">
                <h2>房型介紹</h2>
                <h3>每間房間皆有獨立大泡湯池　享受私密空間</h3>

            </div>
            <div class="wrapper">
                <div class="wrapper-photo"><img src="{{asset('img/room01_1.jpg')}}" width="100%" height="100%" alt="">
                </div>
                <div class="wrapper-photo"><img src="{{asset('img/room01_2.png')}}" width="100%" height="100%" alt="">
                </div>
                <div class="room01 room">
                    <h3>簡約雙人房</h3>
                    <h4>靜謐空間沉澱心靈　單純慢活回歸本心</h4>
                    <br>
                    <h4><a href="{{route('rooms.list')}}" target="_blank">更多介紹</a></h4>
                </div>
                <div class="room02 room">
                    <h3>精品雙人房</h3>
                    <h4>製造浪漫瞬間　享受彼此愛戀</h4>
                    <br>
                    <h4><a href="{{route('rooms.list')}}" target="_blank">更多介紹</a></h4>
                </div>
                <div class="wrapper-photo"><img src="{{asset('img/room02_1.jpg')}}" width="100%" height="100%" alt="">
                </div>
                <div class="wrapper-photo"><img src="{{asset('img/room02_2.jpg')}}" width="100%" height="100%" alt="">
                </div>
                <div class="wrapper-photo"><img src="{{asset('img/room03_1.jpg')}}" width="100%" height="100%" alt="">
                </div>
                <div class="wrapper-photo"><img src="{{asset('img/room03_2.jpg')}}" width="100%" height="100%" alt="">
                </div>
                <div class="room03 room">
                    <h3>家庭四人房</h3>
                    <h4>溫馨大空間　感受家人間的美好時光</h4>
                    <br>
                    <h4><a href="{{route('rooms.list')}}" target="_blank">更多介紹</a></h4>
                </div>
            </div>



        </section>

        <!-- 園區特色 -->
        <section class="feature">
            <div class="feature-top-photo photo"></div>

            <div class="info">
                <h2>園區特色</h2>
            </div>

            <div class="feature-photo01 photo"></div>

            <div class="feature-info">
                <h4>靜謐戶外溫泉區</h4>
                <h4><a href="{{route('features.list')}}" target="_blank">更多介紹</a></h4>
            </div>

            <div class="feature-photo02 photo"></div>

            <div class="feature-info">
                <h4>家庭親子互動活動區</h4>
                <h4><a href="{{route('features.list')}}" target="_blank">更多介紹</a></h4>
            </div>

            <div class="feature-photo03 photo"></div>

            <div class="feature-info">
                <h4>精緻餐飲－星月大地</h4>
                <h4><a href="{{route('features.list')}}" target="_blank">更多介紹</a></h4>
            </div>

            <div class="feature-photo04 photo"></div>

        </section>

        <!-- 最新消息 -->
        <section class="news" id="news">
            <!-- 星月文旅 https://www.facebook.com/smbnb-->
            <div class="swiper news-contain">
                <div class="swiper-wrapper">
                    @foreach ($news as $item)
                    <div class="swiper-slide">{!!$item->image_url!!}
                    </div>
                    @endforeach
                    {{-- <div class="swiper-slide"><iframe
                            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsmbnb%2Fposts%2F1020317485212165&show_text=true&width=500"
                            width="500" height="515" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="swiper-slide"><iframe
                            src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsmbnb%2Fvideos%2F647212469752050%2F&show_text=true&width=560&t=0"
                            width="560" height="429" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                            allowFullScreen="true"></iframe></div>
                    <div class="swiper-slide"><iframe
                            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsmbnb%2Fposts%2F970210260222888&show_text=true&width=500"
                            width="500" height="660" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div> --}}
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- 評價專區 -->
        <section class="evaluation" id="evaluation">
            <div class="swiper-evaluation">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper evaluation-wrapper">
                    <!-- Slides -->
                    @foreach ($feedbacks as $feedback)
                    <div class="swiper-slide">
                        <span name="" id="" cols="100" rows="13">
                            {!!$feedback->content!!}
                        </span>
                    </div>
                    @endforeach
                    {{-- <div class="swiper-slide">
                        <span name="" id="" cols="100" rows="13">
                            因為是在小小的山坡上
                            可以看到美麗的夜景，
                            抬頭也可以看到星空，
                        </span>
                    </div>
                    <div class="swiper-slide">
                        <span name="" id="" cols="100" rows="13">
                            文旅房間舒適有質感❤️ 景觀咖啡廳，服務人員超親切，烤肉吃到飽，好好味
                        </span>
                    </div>
                    <div class="swiper-slide">
                        <span name="" id="" cols="100" rows="13">
                            服務人員態度親切，
                            因為隔天台晚起，
                            而早餐在附近的早餐店（亮宅）
                            早餐店又是網美店🤣
                        </span>
                    </div> --}}
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev prev"></div>
                <div class="swiper-button-next"></div>
                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </section>

        <footer class="footer">
            <div class="align">
                <span class="addr">台中市后里區月眉北路486號(大摩天輪正後方)</span>
                <span class="tel">電話：04-26831671 / 傳真：04-26834003</span>
            </div>
        </footer>

        <!-- 跳出視窗內容 -->

        <div class="popup-wrap" id="letmeopen">
            <div class="popup-box transform-out">
                <!-- style="background-image: url(/img/contactus-bgi.png);" -->
                <div class="img">
                    {{-- <img src="{{asset('/img/contactus-bgi.png')}}" alt=""> --}}
                    <div class="contact-title">Contact Us</div>
                </div>
                <form action="{{asset('/contact')}}" method="POST">
                    @csrf
                    <div class="contactus">
                        <table>
                            <tr>
                                <td><label for="name" class="form-label">Name</label></td>
                                <td><input type="text" class="form-control mb-3  @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td><label for="phone" class="form-label">Phone</label></td>
                                <td><input type="text" class="form-control mb-3  @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" value="{{old('phone')}}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td><label for="email" class="form-label">Email</label></td>
                                <td><input type="text" class="form-control mb-3  @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{old('email')}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td><label for="content" class="form-label">Massage</label></td>
                                <td>
                                    <input type="text" class="form-control mb-3  @error('content') is-invalid @enderror"
                                        id="content" name="content" value="{{old('content')}}">

                                    <!-- <textarea type="text" class="form-control mb-3 message_textarea @error('content') is-invalid @enderror"
                    id="content" name="content" cols="30" rows="10">{{old('content')}}</textarea> -->

                                    <!-- 先註解 避免影響HTML排版 -->
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    @error('g-recaptcha-response')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </td>
                            </tr>
                        </table>
                    </div>


                    {!! htmlFormSnippet() !!}
                    <button type="submit" class="btn-contact">Submit</button>

                </form>
                <a class="close-btn popup-close" href="#">x</a>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquerypp.custom.js"></script>
    <script src="js/jquery.bookblock.js"></script>
    <!-- swiper JS  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var Page = (function () {

      var config = {
        $bookBlock: $('#bb-bookblock'),
        $navNext: $('#bb-nav-next'),
        $navPrev: $('#bb-nav-prev'),
        $navFirst: $('#bb-nav-first'),
        $navLast: $('#bb-nav-last')
      },
        init = function () {
          config.$bookBlock.bookblock({
            speed: 800,
            shadowSides: 0.8,
            shadowFlip: 0.7
          });
          initEvents();
        },
        initEvents = function () {

          var $slides = config.$bookBlock.children();

          // add navigation events
          config.$navNext.on('click touchstart', function () {
            config.$bookBlock.bookblock('next');
            return false;
          });

          config.$navPrev.on('click touchstart', function () {
            config.$bookBlock.bookblock('prev');
            return false;
          });

          config.$navFirst.on('click touchstart', function () {
            config.$bookBlock.bookblock('first');
            return false;
          });

          config.$navLast.on('click touchstart', function () {
            config.$bookBlock.bookblock('last');
            return false;
          });

          // add swipe events
          $slides.on({
            'swipeleft': function (event) {
              config.$bookBlock.bookblock('next');
              return false;
            },
            'swiperight': function (event) {
              config.$bookBlock.bookblock('prev');
              return false;
            }
          });

          // add keyboard events
          $(document).keydown(function (e) {
            var keyCode = e.keyCode || e.which,
              arrow = {
                left: 37,
                up: 38,
                right: 39,
                down: 40
              };

            switch (keyCode) {
              case arrow.left:
                config.$bookBlock.bookblock('prev');
                break;
              case arrow.right:
                config.$bookBlock.bookblock('next');
                break;
            }
          });
        };

      return { init: init };

    })();
    </script>
    <script>
        Page.init();
    </script>

    <script>
        // 最新消息
    var swiper2 = new Swiper(".news-contain", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    //評價專區  
    const swiper = new Swiper('.swiper-evaluation', {
      // Optional parameters => vertical/horizontal
      // width: 700,
      // height: 500,
      direction: 'horizontal',
      loop: true,
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
      watchSlidesProgress: true,
      slidesPerView: 'auto',
      centeredSlides: true,
      loopedSlides: 5,
      autoplay: {
        delay: 10000, //10秒切換一次
        disableOnInteraction: false, //避免手動滑動輪播圖後，自動播放失效
      },
      on: {
        progress: function (progress) {
          for (let i = 0;i < this.slides.length;i++) {
            var slide = this.slides.eq(i);
            var slideProgress = this.slides[i].progress;
            let modify = 1;
            if (Math.abs(slideProgress) > 1) {
              modify = (Math.abs(slideProgress) - 1) * 0.5 + 1;
            }
            let translate = slideProgress * modify * 130 + 'px';
            let scale = 1 - Math.abs(slideProgress) / 5;
            let zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
            slide.transform('translateX(' + translate + ') scale(' + scale + ')');
            slide.css('zIndex', zIndex);
            slide.css('opacity', 1);
            if (Math.abs(slideProgress) > 3) {
              slide.css('opacity', 0);
            }
          }
        },
        setTransition: function (transition) {
          for (let i = 0;i < this.slides.length;i++) {
            var slide = this.slides.eq(i)
            slide.transition(transition);
          }
        }
      }
    });

    </script>

    <script>
        // 聯絡我們彈出視窗的js code
    $(".popup-btn").click(function () {
      var href = $(this).attr("href")
      $(href).fadeIn(250);
      $(href).children$("popup-box").removeClass("transform-out").addClass("transform-in");
      e.preventDefault();
    });

    $(".popup-close").click(function () {
      closeWindow();
    });
    function closeWindow() {
      $(".popup-wrap").fadeOut(200);
      $(".popup-box").removeClass("transform-in").addClass("transform-out");
      event.preventDefault();
    }
    </script>

</body>

</html>