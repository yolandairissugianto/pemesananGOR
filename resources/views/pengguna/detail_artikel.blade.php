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
                        <a href="#"><img src="{{ asset('uploads/admin/article/'. $article -> gambar) }}" width="auto" height="auto" alt=""></a>
                    </div>

                    <div class="entry-content notopmargin">
                        <p>{{ $article -> content }}</p>
                    </div>
                </div>

                <h4>Related Posts:</h4>
                <div class="related-posts clearfix">
                    <div class="col_half nobottommargin">
                        <div class="mpost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="{{ asset('images/blog/small/10.jpg') }}" alt="Blog Single"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">This is an Image Post</a></h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 10th July 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                </ul>
                                <div class="entry-content">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Mollitia nisi perferendis.</div>
                            </div>
                        </div>
                        <div class="mpost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="{{ asset('images/blog/small/20.jpg') }}" alt="Blog Single"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">This is a Video Post</a></h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 24th July 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                                </ul>
                                <div class="entry-content">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Mollitia nisi perferendis.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col_half nobottommargin col_last">
                        <div class="mpost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="{{ asset('images/blog/small/21.jpg') }}" alt="Blog Single"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">This is a Gallery Post</a></h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 8th Aug 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                                </ul>
                                <div class="entry-content">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Mollitia nisi perferendis.</div>
                            </div>
                        </div>
                        <div class="mpost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="{{ asset('images/blog/small/22.jpg') }}" alt="Blog Single"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">This is an Audio Post</a></h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 22nd Aug 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                                </ul>
                                <div class="entry-content">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Mollitia nisi perferendis.</div>
                            </div>
                        </div>
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
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img class="rounded-circle"
                                                    src="{{ asset('images/magazine/small/1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img class="rounded-circle"
                                                    src="{{ asset('images/magazine/small/2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img class="rounded-circle"
                                                    src="{{ asset('images/magazine/small/3.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img class="rounded-circle"
                                                    src="{{ asset('images/magazine/small/1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img class="rounded-circle"
                                                    src="{{ asset('images/magazine/small/2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>
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