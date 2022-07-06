@extends('layouts.app')
@section('content')
<body>
  <div id="wrapper">
    <section>
        <ul class="slick01">
            <li class="slick-slide"><a href=""><img alt="画像1" src="{{ asset('storage/testimage.jpeg') }}" style="" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像2" src="{{ asset('storage/testimage.jpeg') }}" style="" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="" /></a></li>
        </ul>
    </section>
    <section id="top_category">
          <h1>カテゴリから探す</h1>
          <ul class="top_category flex">
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href="/category"><h2>ベッド</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href="/product"><h2>Tシャツ</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href="/category"><h2>Tシャツ</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href=""><h2>Tシャツ</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
          </ul>
    </section>
  </div>
</body>
@endsection
<style>
</style>
<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="{{ asset('/js/slick-1.8.1/slick/slick.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/slick-1.8.1/slick/slick.css') }}"/>
<script>  
$(document).ready(function() {
  $('.slick01').slick({
    autoplay: true,
    dots: true,
    slidesToShow: 2,
    // centerPadding: "50px",
    arrows: true,
    centerMode:true,
	  // centerPadding:"1%",
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        centerPadding: "0",
      }
    },
  ]
  });
});
</script>