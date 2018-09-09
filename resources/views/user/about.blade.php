@extends("layouts.main")
@section("content")
<div class="first-widget parallax" id="blog">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">About</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Home / About</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">

        <div class="col-md-12 blog-posts">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-offset-8 col-sm-offset-8"><img id="gravatar" class="img-circle" src="{{$admin->gravatar}}" alt=""></div>
                    <div class="contact-wrapper" id="self-info">
                        <p>Hello World!</p>
                        <p>我是： {{$admin->name}}</p>
                        <p>我的宣言： {{$admin->autograph}}</p>
                        <p>{{$admin->description}}</p>
                        <p>MR.itzane</p>
                    </div> <!-- /.contact-wrapper -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
<section id="blogPosts" class="parallax">
    <div class="parallax-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title"><i class="fa fa-link"></i></h2>
                    </div> <!-- /.section-header -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row latest-posts">
                <div class="col-md-3 col-sm-6">
                    <div class="blog-post clearfix">
                        <a href="http://www.laruence.com/">[风雪之隅]</a>
                    </div> <!-- /.blog-post -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="blog-post clearfix">
                        <a href="http://rango.swoole.com/">[Rango]</a>
                    </div> <!-- /.blog-post -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="blog-post clearfix">
                        <a href="http://www.ruanyifeng.com">[阮一峰]</a>
                    </div> <!-- /.blog-post -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="blog-post clearfix">
                        <a href="https://www.liaoxuefeng.com/">[廖雪峰]</a>
                    </div> <!-- /.blog-post -->
                </div> <!-- /.col-md-4 -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</section> <!-- /#blogPosts -->
@endsection