@extends('master')
@section('content')
<head>
    <title>Tin tức</title>
</head>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">TRANG CHỦ<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="{{ url('/news') }}">TIN TỨC</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="image">
										<img src="{{ URL::asset($news->image) }}" alt="{{$news->title}}">
									</div>
									<div class="blog-detail">
										<h2 class="blog-title">{{$news->title}}</h2>
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i>Đăng bởi: Admin</a><a href="#"><i class="fa fa-calendar"></i>{{$news->created_at}}</a><a href="#"><i class="fa fa-comments"></i>Bình luận ({{count($comments)}})</a></span>
										</div>
										<div class="content">
											<p>{{$news->content}}</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="comments">
										<h3 class="comment-title">Bình luận ({{count($comments)}})</h3>
                                        @foreach($comments as $cmt)
										<div class="single-comment">
											<img src="{{ URL::asset('images\avatars\avatar.png') }}" alt="#">
											<div class="content">
                                                <b>{{$cmt->name}}
                                                    <sup style="color: red">
                                                    @if ($cmt->is_admin==1)
                                                        Admin
                                                    @else
                                                        Khách hàng
                                                    @endif
                                                    </sup>
                                                </b>:{{ ' ' }}
                                                {{$cmt->content}}
                                                <br>
                                                {{$cmt->created_at}}
                                                @if (isset(Auth::user()->id))
                                                @if ($cmt->id==Auth::user()->id|| Auth::user()->is_admin)
                                                <form class="form" action="{{route('delete-comment',$cmt->cmtId)}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn-dlt">Delete</button>
                                                </form>
                                                @else
                                            @endif
                                                @endif
											</div>
                                        </div>
                                        @endforeach
                                        <br>
                                        <br>
									</div>
                                </div>
								<div class="col-12">
									<div class="reply">
										<div class="reply-head">
                                            <br>
                                            <h2 class="reply-title">Để lại bình luận</h2>
                                            @if(isset(Auth::user()->id))
											<form class="form" action="{{route('comment',$news->id)}}" method="post">
											@csrf
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<label>Bình luận của bạn<span>*</span></label>
															<textarea id="content" name="content" placeholder=""></textarea>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group button">
															<button type="submit" class="btn">Gửi</button>
														</div>
													</div>
												</div>
											</form>
                                            @else
                                            @include('page/non-login')
                                            @endif
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<div class="single-widget recent-post">
                                <h3 class="title">Bài viết gần đây</h3>
                                @foreach($news_tt as $news_crl)
								<div class="single-post">
									<div class="image">
										<img src="{{ URL::asset($news_crl->image) }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="{{ url('news',$news_crl->id) }}">{{$news_crl->title}}</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>{{$news_crl->created_at}}</li>
                                            <li>
                                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                                @foreach ( $count_comment as $count)
                                                @if ($count->idNews==$news_crl->id)
                                                 {{ $count->count_cmt  }}
                                                @endif
                                                @endforeach

                                            </li>
										</ul>
									</div>
                                </div>
                                @endforeach
							</div>
							<div class="single-widget newsletter">
								<h3 class="title">THEO DÕI CHÚNG TÔI</h3>
								<div class="letter-inner">
									<p>Theo dõi chúng tôi để nhận được tin tức một cách nhanh nhất có thể.</p>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
                                            <label>Email của bạn<span>*</span></label>
                                            <input class="input-email" type="email" name="email" placeholder="" required="required">
                                        </div>
                                        <div class="form-group button">
                                            <button type="submit" class="btn">Gửi</button>
                                        </div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        @endsection
