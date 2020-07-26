@extends('pengguna.templates.default')

<title>Detail Artikel</title>

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Detail Artikel</h1>
        <span>Aritkel berkaitan dengan GOR Trisanja</span>
    </div>
</section>

<div class="content-wrap">
    <div class="container clearfix">
        <div class="postcontent nobottommargin clearfix">
            <div class="single-post nobottommargin">

                <div class="entry clearfix">

                    <div class="entry-title">
                        <h2>{{ $article -> title }}</h2>
                    </div>

                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i>{{ $article -> created_at }}</li>
                    </ul>

                    <div class="entry-image">
                        <img src="{{ asset('uploads/admin/article/'. $article -> gambar) }}" width="auto" height="auto" alt="">
                    </div>

                    <div class="entry-content notopmargin">
                        <p>{{ $article -> content }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar nobottommargin col_last clearfix">
            <div class="sidebar-widgets-wrap">
                <div class="widget clearfix">
                    <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
                        <ul class="tab-nav clearfix">
                            <li><a href="#tabs-2">Recent</a></li>
                        </ul>
                            <div class="tab-content clearfix" id="tabs-2">
                                <div id="recent-post-list-sidebar">
                                    @foreach ($recents as $recent)
                                    <div class="spost clearfix">
                                        
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img class="rounded-circle"
                                                    src="{{ asset('uploads/admin/article/'. $recent -> gambar) }}" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">{{ $recent -> title }}</a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>{{ $recent -> created_at }}</li>
                                            </ul>
                                        </div>
                            
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection