@extends('layouts.front')

@section('title', __('static.product'))

@section('style')
    @parent
    .product-header {
        margin: 28px auto;
    }
    .products {
        padding: 15px 28px;
        overflow: auto;
    }
    .product {
        width: 236px;
        margin: 0 12px 20px 12px;
        float: left;
    }
    .product h4 {
        margin: 30px auto;
    }
    .product a>div {
        margin-top: 5px;
    }
    @foreach ($products as $product)
        .div{{ $product->id }} {
            background: url({{ empty($product->{'image:zh-TW'}) ? (empty($category->{'image:zh-TW'})? '/images/product-default.jpg' : '/storage/'.$category->{'image:zh-TW'}) : '/storage/'.$product->{'image:zh-TW'} }}) center no-repeat;
        }
    @endforeach
    .product>a>div {
        width: 236px;
        height: 236px;
        background-size: 100%;
    }
    .product>a>div>div {
        width: 100%;
        height: 100%;
        background: rgba(0, 167, 193, 0.44);
    }
    .product>a:hover>div {
        background-size: 110%;
    }
    .product>a:hover>div>div {
        background: transparent;
    }
    @media screen and (max-width: 1199px) {
        .product-header {
            margin: 20px 30px 0 30px;
        }
        .products {
            padding: 22px 2.0833vw;
        }
        .product {
            width: 43.75vw;
            margin: 0 2.0833vw 5px 2.0833vw;
        }
        .product>a>div {
            width: 43.75vw;
            height: 43.75vw;
        }
        .product h4 {
            margin: 15px auto;
        }
    }
@endsection

@if (Auth::check())
    @section('js')
        <script src="/js/app.js"></script>
        <script>
            $('.deletecate').on('click', function () {
                if (confirm('確認刪除' + $(this).data('name') + '？'))
                    window.location = '/rmproduct/' + $(this).data('id')
            })
        </script>
    @endsection

    @section('modal')
        <div class="modal fade" id="productModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title" id="productModalLabel">新增產品：{{ $category->{'name:zh-TW'} }}</h4>
                    </div>
                    <form method="POST" action="/addproduct" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="productname" class="control-label">標題：</label>
                                <div class="input-group">
                                    <span class="input-group-addon">繁中</span>
                                    <input type="text" class="form-control" id="productname" name="productname" Required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="producttext" class="control-label">內容：</label>
                                <textarea class="form-control" rows="3" id="producttext" name="producttext" Required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addzhcn"> 簡中
                                    </span>
                                    <input type="text" class="form-control" name="zhcnproductname">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="zhcnproducttext"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="addja"> 日文
                                    </span>
                                    <input type="text" class="form-control" name="japroductname">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="japroducttext"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox" name="adden"> 英文
                                    </span>
                                    <input type="text" class="form-control" name="enproductname">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="enproducttext"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">聯絡信箱：</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="uploadpdf" class="control-label">上傳 PDF：</label>
                                <input type="file" class="form-control" id="uploadpdf" name="uploadpdf">
                            </div>
                            <div class="form-group">
                                <label for="uploadimage" class="control-label">上傳圖片：</label>
                                <input type="file" class="form-control" id="uploadimage" name="uploadimage">
                            </div>
                            <input type="hidden" name="id" value="0">
                            <input type="hidden" name="cid" value="{{ $category->id }}">
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="取消">
                            <input type="submit" class="btn btn-primary" value="送出">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
@endif

@section('content')
    <div class="fixed-width-1100">
        <h5 class="product-header">
            <a href="/product">{{ __('static.product') }}</a> ＞ {{ $category->{'name:'.App::getLocale()} }}
            @if (Auth::check())
                <button type="button" class="id-button-p" data-toggle="modal" data-target="#productModal">新增</button>
            @endif
        </h5>
        <div class="products">
            @foreach($products as $product)
                <div class="product text-center">
                    @if (Auth::check())
                        <button type="button" class="id-button-d deletecate"  data-id="{{ $product->id }}" data-name="{{ $product->{'name:zh-TW'} }}">刪除</button>
                    @endif
                    <a href="/product/{{ $category->id }}/{{ $product->id }}">
                            <div class="div{{ $product->id }}">
                                <div>

                                </div>
                            </div>
                            <h4>{{ $product->{'name:'.App::getLocale()} }}</h4>
                        </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
