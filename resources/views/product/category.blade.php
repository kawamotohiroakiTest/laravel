@extends('layouts.app')
@section('content')

<body>
  <div id="wrapper">
    <section>
        <div class="flex main_search">
            <section class="search">
                <h1>条件で絞り込む</h1>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item accordion-item_search">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button accordion-item_search" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            機能・仕様
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body accordion-item_search">
                            <p><input type="checkbox" id="term1"><label class="product_search_label" for="term1">2層式ポケットコイル</label></p>
                            <p><input type="checkbox" id="term2"><label class="product_search_label" for="term2">3層式ポケットコイル</label></p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-item_search">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button accordion-item_search" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            タイプ
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body accordion-item_search">
                            <p><input type="checkbox" id="term3"><label class="product_search_label" for="term3">硬め</label></p>
                            <p><input type="checkbox" id="term4"><label class="product_search_label" for="term4">普通</label></p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-item_search">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button accordion-item_search" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            価格
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body accordion-item_search">
                            <p><input type="checkbox" id="term5"><label class="product_search_label" for="term5">¥0〜￥10,000</label></p>
                            <p><input type="checkbox" id="term6"><label class="product_search_label" for="term6">¥￥10,000〜￥20,000</label></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 product_search_button">
                    <button class="btn btn-success">条件を絞り込む</button>
                </div>
            </section>
            <section class="content">
                <div class="flex img_detail">
                    <section class="category_main">
                        @if ($count != 0)
                            <h1 class="product_title">{{ $products[0]->bigcategory_name }}</h1>
                            <p>点で支えるポケットコイルが体にフィットします。<br>側面は３Ｄメッシュで通気性向上。</p>
                            <div class="flex category_count_area">
                                <p>全<span class="category_count_all">{{ $count }}</span>件　　　<span>1</span>〜<span>{{ $count }}</span>件</p>
                                <div class="category_count">
                                    <select name="" class="form-select">
                                        <option value="">おすすめ順</option>
                                        <option value="">価格が安い順</option>
                                        <option value="">評価が高い順</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product_list">
                                @foreach($products as $product)
                                    <article>
                                        <a href="/product/{{ $product->id }}">                                
                                            <p class="product_list_img">
                                                <img src="{{ asset('storage/'.$product->products_image) }}">
                                            </p>
                                            <p class="product_content_title">{{ $product->products_name }}</p>
                                            <h2><span>{{ number_format($product->products_price) }}</span>円</h2>
                                            <p><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>☆</i><i>({{ $product->products_review }})</i></p>
                                            <div class="flex product_tag_area">
                                                <div><span>商品コード</span></div>
                                                <div><span>カラー</span></div>
                                                <div><span>サイズ</span></div>
                                                <div><span>素材</span></div>
                                            </div>
                                        </a>
                                    </article>
                                @endforeach
                            </div>
                        @endif
                    </section>
                </div>
                <div class="flex img_detail">
                    <section class="category_main">
                        @if ($count == 0)
                            <h1 class="product_title">該当カテゴリの商品はありません</h1>
                            <p></p>
                            <div class="flex category_count_area">
                                <div class="category_count">
                                </div>
                            </div>
                            <div class="product_list">
                                <p>該当カテゴリーの商品はありません</p>
                            </div>
                        @endif
                    </section>
                </div>
            </section>
        </div>
    </section>

  </div>
</body>
@endsection
