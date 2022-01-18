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
    <link rel="stylesheet" href="{{asset('./css/index2.css')}}">

    {{-- 聯絡我們css --}}
    <link rel="stylesheet" href="{{asset('./css/contact.css')}}">

</head>

<body>
    <!-- nav -->
    <div class="navbar">
        <div class="logo"></div>
        <ul>
            <li><a href="#introduce">
                    <h3>TOP</h3>
                </a></li>
            <li><a href="{{route('rooms.list')}}" target="_blank">
                    <h3>房型介紹</h3>
                </a></li>
            <li><a href="#feature">
                    <h3>園區特色</h3>
                </a></li>
            <li><a href="#news">
                    <h3>最新消息</h3>
                </a></li>
            <li><a href="#evaluation">
                    <h3>評價</h3>
                </a></li>
            <li><a href="{{route('location')}}" target="_blank">
                    <h3>交通資訊</h3>
                </a></li>
            <li><a href="https://booking.owlting.com/smbnb?lang=zh_TW&start=2022-01-09&end=2022-01-10&adult=1&child=0&infant=0"
                target="_blank">
                    <h3>線上訂房</h3>
                </a></li>
            <li><a class=" btn popup-btn" href="#letmeopen">
                <h3>聯絡我們</h3>
            </a></li>
        </ul>
    </div>

    <!-- 內容區-整個右邊 -->
    <div class=" content">

                    <!-- 第一頁~理念 -->
                    <section class="introduce">

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
                                                <a id="bb-nav-first" href="#"
                                                    class="bb-custom-icon bb-custom-icon-first">First
                                                    page</a>
                                                <a id="bb-nav-prev" href="#"
                                                    class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
                                                <a id="bb-nav-next" href="#"
                                                    class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
                                                <a id="bb-nav-last" href="#"
                                                    class="bb-custom-icon bb-custom-icon-last">Last
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
                            <div class="wrapper-photo"><img src="{{asset('img/room01_1.jpg')}}" width="100%"
                                    height="100%" alt=""></div>
                            <div class="wrapper-photo"><img src="{{asset('img/room01_2.png')}}" width="100%"
                                    height="100%" alt=""></div>
                            <div class="room01 room">
                                <h3>簡約雙人房</h3>
                                <h4>靜謐空間沉澱心靈　單純慢活回歸本心</h4>
                                <br>
                                <h4>更多介紹</h4>
                            </div>
                            <div class="room02 room">
                                <h3>精品雙人房</h3>
                                <h4>製造浪漫瞬間　享受彼此愛戀</h4>
                                <br>
                                <h4>更多介紹</h4>
                            </div>
                            <div class="wrapper-photo"><img src="{{asset('img/room02_1.jpg')}}" width="100%"
                                    height="100%" alt=""></div>
                            <div class="wrapper-photo"><img src="{{asset('img/room02_2.jpg')}}" width="100%"
                                    height="100%" alt=""></div>
                            <div class="wrapper-photo"><img src="{{asset('img/room03_1.jpg')}}" width="100%"
                                    height="100%" alt=""></div>
                            <div class="wrapper-photo"><img src="{{asset('img/room03_2.jpg')}}" width="100%"
                                    height="100%" alt=""></div>
                            <div class="room03 room">
                                <h3>家庭四人房</h3>
                                <h4>溫馨大空間　感受家人間的美好時光</h4>
                                <br>
                                <h4>更多介紹</h4>
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
                            <h4>更多介紹</h4>
                        </div>

                        <div class="feature-photo02 photo"></div>

                        <div class="feature-info">
                            <h4>家庭親子互動活動區</h4>
                            <h4>更多介紹</h4>
                        </div>

                        <div class="feature-photo03 photo"></div>

                        <div class="feature-info">
                            <h4>精緻餐飲－星月大地</h4>
                            <h4>更多介紹</h4>
                        </div>

                        <div class="feature-photo04 photo"></div>

                    </section>

                    <!-- 最新消息 -->
                    <section class="news">

                    </section>

                    <!-- 評價專區 -->
                    <section class="">

                    </section>

                    <!-- 跳出視窗內容 -->

                    <div class="popup-wrap" id="letmeopen">
                        <div class="popup-box transform-out">
                            <div class="img">
                                <img src="{{asset('/img/contactus-bgi.png')}}" alt="">
                                <div class="contact-title">Contact Us</div>
                            </div>
                            <form action="{{asset('/contact')}}" method="POST">
                                @csrf
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control mb-3  @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{old('name')}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control mb-3  @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{old('phone')}}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control mb-3  @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="content" class="form-label">Massage</label>
                                <textarea type="text"
                                    class="form-control mb-3 message_textarea @error('content') is-invalid @enderror"
                                    id="content" name="content">{{old('content')}}</textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @error('g-recaptcha-response')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
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





    <script>
        var Page = (function() {
            
            var config = {
                    $bookBlock : $( '#bb-bookblock' ),
                    $navNext : $( '#bb-nav-next' ),
                    $navPrev : $( '#bb-nav-prev' ),
                    $navFirst : $( '#bb-nav-first' ),
                    $navLast : $( '#bb-nav-last' )
                },
                init = function() {
                    config.$bookBlock.bookblock( {
                        speed : 800,
                        shadowSides : 0.8,
                        shadowFlip : 0.7
                    } );
                    initEvents();
                },
                initEvents = function() {
                    
                    var $slides = config.$bookBlock.children();

                    // add navigation events
                    config.$navNext.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'next' );
                        return false;
                    } );

                    config.$navPrev.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'prev' );
                        return false;
                    } );

                    config.$navFirst.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'first' );
                        return false;
                    } );

                    config.$navLast.on( 'click touchstart', function() {
                        config.$bookBlock.bookblock( 'last' );
                        return false;
                    } );
                    
                    // add swipe events
                    $slides.on( {
                        'swipeleft' : function( event ) {
                            config.$bookBlock.bookblock( 'next' );
                            return false;
                        },
                        'swiperight' : function( event ) {
                            config.$bookBlock.bookblock( 'prev' );
                            return false;
                        }
                    } );

                    // add keyboard events
                    $( document ).keydown( function(e) {
                        var keyCode = e.keyCode || e.which,
                            arrow = {
                                left : 37,
                                up : 38,
                                right : 39,
                                down : 40
                            };

                        switch (keyCode) {
                            case arrow.left:
                                config.$bookBlock.bookblock( 'prev' );
                                break;
                            case arrow.right:
                                config.$bookBlock.bookblock( 'next' );
                                break;
                        }
                    } );
                };

                return { init : init };

        })();

        // 聯絡我們彈出視窗的code
        $(".popup-btn").click(function() {
        var href = $(this).attr("href")
        $(href).fadeIn(250);
        $(href).children$("popup-box").removeClass("transform-out").addClass("transform-in");
        e.preventDefault();
        });

        $(".popup-close").click(function() {
        closeWindow();
        });
        function closeWindow(){
        $(".popup-wrap").fadeOut(200);
        $(".popup-box").removeClass("transform-in").addClass("transform-out");
        event.preventDefault();
        }
    </script>
    <script>
        Page.init();
    </script>

</body>

</html>