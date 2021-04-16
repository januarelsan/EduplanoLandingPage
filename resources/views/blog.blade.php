@extends('layouts.main')

@section('breadcumb')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">Blog</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
@endsection

@section('content')

<!--====================  Blog Area Start ====================-->
<div class="blog-pages-wrapper section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                <!--======= Single Blog Item Start ========-->
                <div class="single-blog-item blog-grid">
                    <!-- Post Feature Start -->
                    <div class="post-feature blog-thumbnail">
                        <a href="{{ route('blog.detail') }}">
                            <img class="img-fluid" src="{{asset ('assets/images/blog/blog-01-370x230.jpg')}}" alt="Blog Images">
                        </a>
                    </div>
                    <!-- Post Feature End -->

                    <!-- Post info Start -->
                    <div class="post-info lg-blog-post-info">
                        <div class="post-meta">
                            <div class="post-date">
                                <span class="far fa-calendar meta-icon"></span>
                                January 14, 2019
                            </div>
                        </div>

                        <h5 class="post-title font-weight--bold">
                            <a href="{{ route('blog.detail') }}">Ideas for High Returns on Investment</a>
                        </h5>

                        <div class="post-excerpt mt-15">
                            <p>Using the profit accumulator is one such way, and you should understand why it increases your chances of the profits. …</p>
                        </div>
                        <div class="btn-text">
                            <a href="{{ route('blog.detail') }}">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Post info End -->
                </div>
                <!--===== Single Blog Item End =========-->

            </div>

            <div class="col-lg-12 wow move-up">
                <div class="ht-pagination mt-30 pagination justify-content-center">
                    <div class="pagination-wrapper">

                        <ul class="page-pagination">
                            <li><a class="prev page-numbers" href="#">Prev</a></li>
                            <li><a class="page-numbers current" href="#">1</a></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="next page-numbers" href="#">Next</a></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--====================  Blog Area End  ====================-->

@endsection


        






       