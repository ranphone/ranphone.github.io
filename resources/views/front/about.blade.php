@extends('template.app')
@section('content')
@push('nav')
<ul class="nav-menu nav navbar-nav">
    @foreach ($categori as $item)
    <li class="cat-4"><a href="{{ route('artikel.kategori',$item->slug) }}">{{$item->nama_kategori}}</a></li>
    @endforeach
</ul>
@endpush
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <ul class="page-header-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ul>
                <h1>About</h1>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="section-row">
                    <p>RANPHONE adalah website yang dibuat untuk memberikan informasi tentang smartphone di rentang harga 1-3 juta, yang dimana isinya mengenai review singkat, spesifikasi dan juga harga smartphonenya.</p>
                </div>
                <div class="row section-row">
                    <div class="col-md-6">
                        <figure class="figure-img">
                            <<a href="/" class="logo"><img src="{{asset('front/img/your-logo.png')}}" alt="" style="width: 300px; padding-top: 100px;"></a>
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h3>Visi</h3>
                        <p>RANPHONE memiliki visi untuk memberikan informasi yang terbaik tentang smartphone di rentang harga 1-3 juta agar pembaca mendapatkan informasi yang diinginkannya.</p>
                        <h3>Misi</h3>
                        <p>Visi tersebut saya wujudkan melalui misi untuk terus mengembangkan diri dalam memenuhi kebutuhan pembaca.</p>
                    </div>
                </div>
            </div>


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
