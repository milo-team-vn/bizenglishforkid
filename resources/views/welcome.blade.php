@php
        $config = \App\Models\Cofig::first();
@endphp
@extends('layout.app')
@section('slider')
    <script src="https://unpkg.com/scrollreveal"></script>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        {{--        <ol class="carousel-indicators">--}}
        {{--            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
        {{--            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
        {{--            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
        {{--        </ol>--}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <a href="https://docs.google.com/forms/d/1hAzf5BeeEF6ou6PTAcQHMOf1mmuo63MDlvgqGEBbC4Y/viewform?edit_requested=true" class="link-style-none"> -->
                    <img class="d-block w-100"
                         src="{{asset('uploads/banner-1.jpg')}}"
                         alt="First slide">
                         <div class="carousel-caption w-50 mx-auto d-none mb-5 zoom-loop d-md-block">
                            <a class="link-style-none"
                            href="https://docs.google.com/forms/d/1hAzf5BeeEF6ou6PTAcQHMOf1mmuo63MDlvgqGEBbC4Y/viewform?edit_requested=true">
                            <div class="btn-pink w-50 m-auto py-3 rounded font-weight-bold text-white text-center">
                            <i class="fas fa-hand-point-right"></i> Đăng ký tư vấn và học thử miễn phí
                            </div>
                            </a>
                        </div>


            </div>
            {{--            <div class="carousel-item">--}}
            {{--                <img class="d-block w-100"--}}
            {{--                     src="{{asset('uploads/banner-2.jpg')}}"--}}
            {{--                     alt="Second slide">--}}
            {{--            </div>--}}
            {{--            <div class="carousel-item">--}}
            {{--                <img class="d-block w-100"--}}
            {{--                     src="{{asset('uploads/banner-3.jpg')}}"--}}
            {{--                     alt="Third slide">--}}
            {{--            </div>--}}
        </div>
        {{--        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
        {{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--            <span class="sr-only">Previous</span>--}}
        {{--        </a>--}}
        {{--        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
        {{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--            <span class="sr-only">Next</span>--}}
        {{--        </a>--}}
    </div>
@endsection
@section('content')
    <link href="{{asset('asset/css/index.css')}}" rel="stylesheet">
    <div class="custom-back-ground-01">
        <div class="p-lg-5 p-2 bg-pink">
            <div class="container h2 text-center"><span class="text-origin text-uppercase">Biz </span>English <span
                    class="text-pink">For Kids</span></div>
            <div class="col-12 p-2 h4 text-center pb-2 pb-lg-0">Trường Học Tiếng Anh Trực Tuyến Cho Trẻ Em
            </div>
        </div>
        <div class="d-block zoom-loop d-md-none">
                           <a class="link-style-none "
                            href="https://docs.google.com/forms/d/1hAzf5BeeEF6ou6PTAcQHMOf1mmuo63MDlvgqGEBbC4Y/viewform?edit_requested=true">
                            <div class="btn-pink w-50 m-auto rounded font-weight-bold text-white text-center">
                            <small><i class="fas fa-hand-point-right"></i> Đăng ký tư vấn và học thử miễn phí</small>
                            </div>
                            </a>
        </div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12 text-center  text-white  mb-lg-5">
                        <div class="p-3 rounded shadow">
                            <img src="{{asset("uploads/intro-1.png")}}" class="pb-2 w-100">
                            <p><b class="text-origin">HỌC ONLINE TẠI NHÀ</b></p>
                            <p class="text-secondary font-weight-bold">Bạn không cần mất thời gian đưa bé tới trung
                                tâm học. Bé có thể ngồi tại nhà để học và
                                giỏi tiếng Anh chỉ với chiếc điện thoại, máy
                                tính hoặc ipad kết nối Internet.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 text-center  text-white  mb-lg-5">
                        <div class="p-3 rounded shadow">
                            <img src="{{asset("uploads/intro-2.png")}}" class="pb-2 w-100">
                            <p><b class="text-origin">LỘ TRÌNH CÁ NHÂN HÓA</b></p>
                            <p class="text-secondary font-weight-bold">Học 1 kèm 1 ,giáo viên hiểu rõ trình độ
                                bé, dạy bé theo lộ trình được cá nhân hóa
                                phù hợp nhất với bé – đảm bảo hiệu quả gấp
                                nhiều lần so với học tại trung tâm.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 text-center text-white  mb-lg-5">
                        <div class="p-3  rounded shadow">
                            <img src="{{asset("uploads/intro-3.png")}}" class="pb-2 w-100">
                            <p><b class="text-origin">CHI PHÍ THẤP</b></p>
                            <p class="text-secondary font-weight-bold">Học 1 kèm 1 nhưng học phí mỗi buổi thấp
                                hơn so với học lớp 10 – 12 bạn tại trung tâm.
                                Đảm bảo bé có thể học tiếng Anh lâu dài mà
                                không lo lắng về vấn đề tài chính.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-origin" style="height: 1px ;opacity: 0.3"></div>
    <div class="pb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 p-2 py-5 h2 text-center text text-origin">BÉ CÓ THỂ HỌC GÌ ?</div>
                <div class="col-md-3 col-sm-6 col-12 p-1 d-flex">
                    <div class=" shadow d-flex flex-column justify-content-between p-1 bg-white rounded">
                        <a href="{{route('tag',['slug'=>'hoc-giao-tiep-online-1-1.html'])}}"
                           class="link-style-none ">
                            <div class="p-3">
                                <div>
                                    <img src="{{asset('uploads/learning-1.png')}}" class="pb-2 w-100">
                                </div>
                                <div class=" text-origin"><b>HỌC GIAO TIẾP
                                        ONLINE 1-1</b></div>
                                <p>Học giao tiếp Online 1 -
                                    1 với giáo viên Việt Nam
                                    – gv nước ngoài.</p>
                            </div>
                        </a>
                        <a href="{{route('tag',['slug'=>'hoc-giao-tiep-online-1-1.html'])}}"
                           class="btn btn-origin show">Xem
                            chi tiết</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 p-1 d-flex">
                    <div class=" shadow d-flex flex-column justify-content-between p-1 bg-white rounded">
                        <a href="{{route('tag',['slug'=>'luyen-thi-chung-chi-quoc-te.html'])}}"
                           class="link-style-none ">
                            <div class="p-3">
                                <div>
                                    <img src="{{asset('uploads/learning-2.png')}}" class="pb-2 w-100">
                                </div>
                                <div class=" text-origin"><b>LUYỆN THI CHỨNG CHỈ QUỐC TẾ</b></div>
                                <p>Luyện thi chứng chỉ IELTS,
                                    Starter, Mover, Flyer.</p>
                            </div>
                        </a>
                        <a href="{{route('tag',['slug'=>'luyen-thi-chung-chi-quoc-te.html'])}}"
                           class="btn btn-origin show">Xem
                            chi tiết</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 p-1 d-flex">
                    <div class=" shadow d-flex flex-column justify-content-between p-1 bg-white rounded">
                        <a href="{{route('tag',['slug'=>'hoc-theo-sach-giao-khoa-tren-lop.html'])}}"
                           class="link-style-none ">
                            <div class="p-3">
                                <div>
                                    <img src="{{asset('uploads/learning-3.png')}}" class="pb-2 w-100">
                                </div>
                                <div class=" text-origin"><b>HỌC THEO SÁCH GIÁO
                                        KHOA TRÊN LỚP</b></div>
                                <p>Học theo chương trình sách
                                    giáo khoa của bộ giáo dục.</p>
                            </div>
                        </a>
                        <a href="{{route('tag',['slug'=>'hoc-theo-sach-giao-khoa-tren-lop.html'])}}"
                           class="btn btn-origin show">Xem
                            chi tiết</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 p-1 d-flex">
                    <div class=" shadow d-flex flex-column justify-content-between p-1 bg-white rounded">
                        <a href="{{route('tag',['slug'=>'luyen-thi-dai-hoc.html'])}}"
                           class="link-style-none">
                            <div class="p-3">
                                <div>
                                    <img src="{{asset('uploads/learning-4.png')}}" class="pb-2 w-100"/>
                                </div>
                                <div class=" text-origin"><b>LUYỆN THI ĐẠI HỌC</b></div>
                                <p>Luyện thi đại học môn
                                    tiếng Anh</p>
                            </div>
                        </a>
                        <a href="{{route('tag',['slug'=>'luyen-thi-dai-hoc.html'])}}"
                           class="btn btn-origin show">Xem
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-lg-5  m-auto">
        <a class="link-style-none "
           href="https://docs.google.com/forms/d/1hAzf5BeeEF6ou6PTAcQHMOf1mmuo63MDlvgqGEBbC4Y/viewform?edit_requested=true">
            <div class="btn-pink w-25 m-auto py-3 rounded font-weight-bold text-white text-center">
                <i class="fas fa-hand-point-right"></i> Đăng ký tư vấn và
                học thử miễn phí
            </div>
        </a>
    </div>

    @php
        $arrComment = [];
        $comments = \App\Models\Comment::where('teacher_id','=','999999')->orderBy('updated_at','DESC')->limit(8)->get();
        foreach ($comments as $index => $comment){
            $arrComment[$index]['avatar'] = $comment->users()->first()->avatar;
            if($arrComment[$index]['avatar'] == null){
                $arrComment[$index]['avatar'] = "https://i.pinimg.com/originals/fa/02/02/fa0202572e8aa734cedb154c413a4846.jpg";
            }
            $arrComment[$index]['name'] = $comment->users()->first()->name;
            $arrComment[$index]['comment'] = $comment->content;
        }
    @endphp
    <div class="container-fluid custom-back-ground-02">
        <div class="container" id="giaovien">
            <div class="row">
                <div class="col-12 pt-5 text-uppercase text-origin h2 text-center pb-2">GIÁO VIÊN CỦA CHÚNG TÔI</div>
                <div class="col-md-6 col-12 text-center d-flex justify-content-between flex-column mb-lg-0 mb-5 ">
                    <div class="p-3 shadow rounded">
                        {{--                        <img src="{{asset('uploads/teacher-vn.png')}}" class="pb-2 w-100">--}}
                        <p class="mt-1 text-uppercase text-origin"><b>Giáo viên Việt Nam</b></p>
                        <p>Giáo viên Việt Nam với chứng chỉ IELTS 6.5 – 8.0 hoặc
                            du học sinh tại Mỹ - Châu Âu.
                        </p>
                        <div class="YTB-Video">
                           {!!$config->f_video!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-center d-flex justify-content-between flex-column mb-lg-0 mb-5 ">
                    <div class="p-3 shadow rounded">

                        {{--                        <img src="{{asset('uploads/teacher-pl.png')}}" class="pb-2 w-100">--}}
                        <p class="mt-1 text-uppercase text-origin"><b>Giáo viên Philippines</b></p>
                        <p>Giáo viên Philippines nổi tiếng là những người chuyên
                            dạy tiếng Anh cho trẻ em trên toàn thế giới.
                        </p>
                        <div class="YTB-Video">
                            {!!$config->s_video!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-origin" >
            <div class="container " >
                <div class="row">

                    <div class="col-12 pt-5 text-uppercase h2 text-center">Tìm kiếm giáo viên</div>
                    <div class="col-12 h5 pb-2 text-center text-dark">Bạn có thể tìm cho bé giáo viên Việt Nam hoặc giáo viên nước ngoài phù hợp nhất về khóa học, mức chi phí và thới gian học.
                    </div>
                     <div class="p-5 d-flex w-100 align-items-center justify-content-center">
                   <button class="btn btn-origin shadow">
                    <a class="link-style-none text-white"href="{{route('filter')}}">
                       <i class="fas fa-search"></i> Tìm kiếm ngay</a>
                                          </button>
                                      </div>
                </div>
            </div>
        </div>
    </div>


    <div class="" style="height: 1px ;opacity: 0.3"></div>
    <div class="container-fluid ">
        <div class="text-center text-uppercase p-5 h2 text-origin">CẢM NHẬN CỦA HỌC VIÊN</div>
        <div class="container ">
            <div id="comment" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#comment" data-slide-to="0" class="active"></li>
                    <li data-target="#comment" data-slide-to="1"></li>
                    <li data-target="#comment" data-slide-to="2"></li>
                    <li data-target="#comment" data-slide-to="3"></li>
                </ul>
                <div class="carousel-inner bg-origin text-white shadow opacity-1">
                    @if(isset($comments))
                        @foreach($arrComment as $index => $comment)
                            <div class="carousel-item @if($index==0) active @endif">
                                <div class="d-block w-75 m-auto  shadow  p-3 rounded">
                                    <div class="row align-items-center ">
                                        <div class="avatar col-md-3 m-0 ">
                                            <img
                                                src="{{$arrComment[$index]['avatar']}}"
                                                class="w-100 rounded-circle img-fix">
                                        </div>
                                        <div class="col-md-9">
                                            <h5>{{$arrComment[$index]['name']}}</h5>
                                            <p>{{$arrComment[$index]['comment']}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2"></div>
                                @if(isset($arrComment[$index+1]))
                                    <div class="d-block w-75 m-auto  shadow p-3 rounded">
                                        <div class="row align-items-center ">
                                            <div class="avatar col-md-3 m-0 ">
                                                <img
                                                    src="{{$arrComment[$index+1]['avatar']}}"
                                                    class="w-100 rounded-circle img-fix">
                                            </div>
                                            <div class="col-md-9">
                                                <h5>{{$arrComment[$index+1]['name']}}</h5>
                                                <p>{{$arrComment[$index+1]['comment']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="d-block w-75 m-auto shadow  p-3 rounded">
                                        <div class="row align-items-center ">
                                            <div class="avatar col-md-3 m-0 ">
                                                <img
                                                    src="{{$arrComment[0]['avatar']}}"
                                                    class="w-100 rounded-circle img-fix">
                                            </div>
                                            <div class="col-md-9">
                                                <h5>{{$arrComment[0]['name']}}</h5>
                                                <p>{{$arrComment[0]['comment']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @if(backpack_auth()->check())
            <div class="bg-origin p-1 rounded">
                <div class="container p-5">
                    <div class="h3 text-white mb-2">Đánh giá của bạn</div>
                    <form class="rating bg-white rounded p-5" action="{{route('save.comment',['id'=>'999999'])}}"
                          method="post">
                        @csrf
                        <input type="hidden" value="999999" name="teacher_id">
                        <input type="hidden" value="{{backpack_user()->id}}" name="user_id">
                        <input type="radio" id="star5" name="rate" value="5"/>
                        <label for="star5" title="text">5 <i class="fas fa-star text-origin mr-2"></i></label>
                        <input type="radio" id="star4" name="rate" value="4"/>
                        <label for="star4" title="text">4 <i class="fas fa-star text-origin mr-2"></i></label>
                        <input type="radio" id="star3" name="rate" value="3"/>
                        <label for="star3" title="text">3 <i class="fas fa-star text-origin mr-2"></i></label>
                        <input type="radio" id="star2" name="rate" value="2"/>
                        <label for="star2" title="text">2 <i class="fas fa-star text-origin mr-2"></i></label>
                        <input type="radio" id="star1" name="rate" value="1"/>
                        <label for="star1" title="text">1 <i class="fas fa-star text-origin mr-2"></i></label>
                        <div class="mt-2">
                            <textarea class="form-control" name="contents" placeholder="Đánh giá của bạn"
                                      required></textarea>
                        </div>
                        <div class="text-right pt-2">
                            <button class="btn btn-origin pointed" type="submit">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
         <!--    <div class="text-center text-origin">*Bạn cần đăng nhập để đánh giá</div> -->
        @endif
    </div>
    {{--    <div class="container-fluid bg-origin text-white">--}}
    {{--        <div class="container py-5">--}}
    {{--            <div class="row m-0">--}}
    {{--                <div class="col-md-4 text-center">--}}
    {{--                    <div class="h3">Số giảng viên</div>--}}
    {{--                    <div class="h1">{{\App\Models\User::where('role','=',1)->count()}}+</div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4 text-center">--}}
    {{--                    <div class="h3">Số học viên</div>--}}
    {{--                    <div class="h1">1250+</div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4 text-center">--}}
    {{--                    <div class="h3">Khóa học</div>--}}
    {{--                    <div class="h1">{{\App\Models\Course::count()}}</div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="container-fluid">
        <div class="p-lg-3 w-100">
            <a class="link-style-none"
               href="https://docs.google.com/forms/d/1hAzf5BeeEF6ou6PTAcQHMOf1mmuo63MDlvgqGEBbC4Y/viewform?edit_requested=true">
                <div class="btn-pink w-25 m-auto py-3 rounded font-weight-bold text-white text-center">
                    <i class="fas fa-hand-point-right"></i> Đăng ký tư vấn và
                    học thử miễn phí
                </div>
            </a>
        </div>
        {{--        <div class="row m-0 align-items-center contact">--}}
        {{--            <div class="col-md-6 col-12 p-5">--}}
        {{--                <div class="bg-secondary opacity h2  p-5 text-center">HÃY CHIA SẺ NHU CẦU HỌC TẬP CỦA BẠN--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 col-12 p-5 bg-light" id="study-register">--}}
        {{--                <form action="{{route('save.customer')}}" method="post">--}}
        {{--                    @csrf--}}
        {{--                    <div class="form-group">--}}
        {{--                        <label class="text-origin font-weight-bold" for="exampleInputEmail1">Họ và tên</label>--}}
        {{--                        <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" required>--}}
        {{--                    </div>--}}
        {{--                    <div class="form-group">--}}
        {{--                        <label class="text-origin font-weight-bold" for="exampleInputEmail1">Email</label>--}}
        {{--                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"--}}
        {{--                               aria-describedby="emailHelp" required>--}}
        {{--                        <small id="emailHelp" class="form-text text-muted">Chúng tôi không bao giờ chia sẻ email của--}}
        {{--                            bạn</small>--}}
        {{--                    </div>--}}
        {{--                    <div class="form-group">--}}
        {{--                        <label class="text-origin font-weight-bold" for="exampleInputPassword1">Số điện thoại</label>--}}
        {{--                        <input type="text" class="form-control" id="exampleInputPassword1" name="phone" required>--}}
        {{--                    </div>--}}
        {{--                    <div class="form-group">--}}
        {{--                        <label class="text-origin font-weight-bold" for="exampleCheck1">Nhu cầu học tập của bạn</label>--}}
        {{--                        <textarea maxlength="255" name="message" class="form-control" id="exampleCheck1"--}}
        {{--                                  required></textarea>--}}
        {{--                    </div>--}}
        {{--                    <button type="submit" class="btn btn-origin show">Gửi đi</button>--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    <script>
        $('.carousel').carousel({
            interval: 3000
        })
        ScrollReveal().reveal('.container', {delay: 500});
    </script>
@endsection

