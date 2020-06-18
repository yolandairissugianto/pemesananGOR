@extends('pengguna.templates.default')

<title>Artikel</title>

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Artikel</h1>
        <span>Aritkel berkaitan dengan GOR Trisanja</span>
    </div>
</section>

<div class="content-wrap">
    <div class="container clearfix">

        <div id="posts" class="post-grid grid-container grid-2 clearfix" data-layout="fitRows">
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="{{ asset('images/blog/full/berita1.jpg') }}" data-lightbox="image"><img class="image_fade"
                            src="{{ asset('images/blog/grid/berita1.jpg') }}" alt="Standard Post with Image"></a>
                </div>
                <div class="entry-title">
                    <h2><a href="detail-artikel.html">Wawali Jumadi Hadiri Upacara Peringatan Hari
                        Infanteri di GOR Trisanja Slawi</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i>19 Desember 2019</li>
                </ul>
                <div class="entry-content">
                    <p>Wakil Wali Kota Tegal Muhamad Jumadi, menghadiri upacara Penyerahan Simbul
                        Yudha Wastu Pramuka Jaya dan Peringatan Hari Infanteri ke 71 Tahun 2019, di
                        Lapangan Sepak Bola GOR Trisanja Slawi</p>
                    <a href="detail-artikel.html" class="more-link">Lanjut Membaca</a>
                </div>
            </div>
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="{{ asset('images/blog/full/berita2.jpg') }}" data-lightbox="image"><img class="image_fade"
                            src="{{ asset('images/blog/grid/berita2.jpg') }}" alt="Standard Post with Image"></a>
                </div>
                <div class="entry-title">
                    <h2><a href="detail-artikel.html">Gor Indoor Trisanja Slawi Resmi Dimiliki Pemkab
                        Tegal</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i>29 April 2019</li>
                </ul>
                <div class="entry-content">
                    <p>Penyerahan gor yang diresmikan sejak 25 Januari 2019 lalu oleh Kementerian
                        Pemuda dan Olahraga (Kemenpora) itu diserahkan kepada Pemkab Tegal,
                        bertempat di Ruang Rapat Bupati Tegal.</p>
                    <a href="detail-artikel.html" class="more-link">Lanjut Membaca</a>
                </div>
            </div>
            <div class="entry clearfix">
                <div class="entry-image">
                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="{{ asset('images/blog/full/10.jpg') }}"
                                        data-lightbox="gallery-item"><img class="image_fade"
                                            src="{{ asset('images/blog/grid/10.jpg') }}"
                                            alt="Standard Post with Gallery"></a></div>
                                <div class="slide"><a href="{{ asset('images/blog/full/20.jpg') }}"
                                        data-lightbox="gallery-item"><img class="image_fade"
                                            src="{{ asset('images/blog/grid/20.jpg') }}"
                                            alt="Standard Post with Gallery"></a></div>
                                <div class="slide"><a href="{{ asset('images/blog/full/21.jpg') }}"
                                        data-lightbox="gallery-item"><img class="image_fade"
                                            src="{{ asset('images/blog/grid/21.jpg') }}"
                                            alt="Standard Post with Gallery"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry-title">
                    <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a>
                    </h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> 24th Feb 2014</li>
                    <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a></li>
                    <li><a href="#"><i class="icon-picture"></i></a></li>
                </ul>
                <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem,
                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                    <a href="blog-single-small.html" class="more-link">Read More</a>
                </div>
            </div>
            <div class="entry clearfix">
                <div class="entry-image clearfix">
                    <div class="fslider" data-animation="fade" data-pagi="false" data-lightbox="gallery">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="{{ asset('images/blog/full/2.jpg') }}"
                                        data-lightbox="gallery-item"><img class="image_fade"
                                            src="{{ asset('images/blog/grid/2.jpg') }}"
                                            alt="Standard Post with Gallery"></a></div>
                                <div class="slide"><a href="{{ asset('images/blog/full/3.jpg') }}"
                                        data-lightbox="gallery-item"><img class="image_fade"
                                            src="{{ asset('images/blog/grid/3.jpg') }}"
                                            alt="Standard Post with Gallery"></a></div>
                                <div class="slide"><a href="{{ asset('images/blog/full/12.jpg') }}"
                                        data-lightbox="gallery-item"><img class="image_fade"
                                            src="{{ asset('images/blog/grid/12.jpg') }}"
                                            alt="Standard Post with Gallery"></a></div>
                                <div class="slide"><a href="{{ asset('images/blog/full/13.jpg') }}"
                                        data-lightbox="gallery-item"><img class="image_fade"
                                            src="{{ asset('images/blog/grid/13.jpg') }}"
                                            alt="Standard Post with Gallery"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry-title">
                    <h2><a href="blog-single-thumbs.html">This is a Standard post with Fade Gallery</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> 3rd Mar 2014</li>
                    <li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a></li>
                    <li><a href="#"><i class="icon-picture"></i></a></li>
                </ul>
                <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem,
                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                    <a href="blog-single-thumbs.html" class="more-link">Read More</a>
                </div>
            </div>

            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="{{ asset('images/blog/full/1.jpg') }}" data-lightbox="image"><img class="image_fade"
                            src="{{ asset('images/blog/grid/1.jpg') }}" alt="Standard Post with Image"></a>
                </div>
                <div class="entry-title">
                    <h2><a href="blog-single.html">This is a Standard post with another Preview Image</a>
                    </h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> 5th May 2014</li>
                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 6</a></li>
                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                </ul>
                <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem,
                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                    <a href="blog-single.html" class="more-link">Read More</a>
                </div>
            </div>
            <div class="entry clearfix">
                <div class="entry-image">
                    <iframe frameborder="0" width="480" height="270"
                        src="http://www.dailymotion.com/embed/video/x18murk" allowfullscreen></iframe>
                </div>
                <div class="entry-title">
                    <h2><a href="blog-single-full.html">This is a Standard post with a Dailymotion Video</a>
                    </h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> 11th May 2014</li>
                    <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 9</a></li>
                    <li><a href="#"><i class="icon-film"></i></a></li>
                </ul>
                <div class="entry-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem,
                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                    <a href="blog-single-full.html" class="more-link">Read More</a>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
                <a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
            </div>
        </div>

    </div>
</div>
@endsection