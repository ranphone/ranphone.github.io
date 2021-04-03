@extends('template.app')
@section('content')

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post">
                        <h3>{{$artikel_detail->judul}}</h3>
                        <figure class="figure-img">
                            <img class="img-responsive" src="{{ asset('uploads/'.$artikel_detail->gambar)}}"
                                width="600px" height="600px" alt="">
                        </figure>
                        {!! $artikel_detail->body !!}
                    </div>
                    <div class="post-shares sticky-shares">
                        <a target ="_blank" href="https://www.facebook.com/firman.nur.372"><i class="fa fa-facebook"></i></a>
                        <a target ="_blank" href="https://twitter.com/Randy11365378"><i class="fa fa-twitter"></i></a>
                        <a target ="_blank" href="https://www.instagram.com/randy_nur13/"><i class="fa fa-instagram"></i></a>
                        <a target ="_blank" href="https://www.youtube.com/channel/UCGIOwUKbq3AcPUHFeQRTUlg"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>



            </div>
            <!-- /Post content -->

            <!-- aside -->
            <div class="col-md-4">
                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Featured Posts</h2>
                    </div>

                    @foreach ($artikelterkait as $item)
                    <div class="post post-thumb">
                            <a class="post-img" href="{{ route('artikel.detail', $item->judul) }}"><img src="{{ asset('uploads/'.$item->gambar)}}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="{{ route('artikel.kategori', $item->kategori->nama_kategori) }}">{{$item->kategori->nama_kategori}}</a>
                                    <span class="post-date">{{$item->created_at->diffForHumans()}}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ route('artikel.detail', $item->judul) }}">{{$item->judul}}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach



                </div>
                <!-- /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            @foreach ($categori as $c)
                            <li><a href="{{ route('artikel.kategori',$c->slug) }}"
                                    class="cat-1">{{$c->nama_kategori}}<span>{{$c->artikel_count}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->
            </div>
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

@push('categoris')
<ul class="footer-links">
    @foreach ($categori as $item)
    <li><a href="{{ route('artikel.kategori',$item->slug) }}">{{$item->nama_kategori}}</a></li>
    @endforeach
</ul>
@endpush
@endsection
