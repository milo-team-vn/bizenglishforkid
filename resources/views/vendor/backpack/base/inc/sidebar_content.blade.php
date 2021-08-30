<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>Bảng
        điều khiển</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('prolife')}}'><i class='nav-icon la la-user'></i> Hồ
        sơ</a></li>
@if(backpack_user()->role == 0)
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('post') }}'><i class='nav-icon la la-pinterest'></i>
            Bài
            viết</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('tags') }}'><i class='nav-icon la la-tags'></i> Nhãn</a>
    </li>
    {{--    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('course') }}'><i class='nav-icon la la-book'></i>Khóa--}}
    {{--            học</a></li>--}}
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i
                class="nav-icon la la-files-o"></i> <span>Quản lý upload</span></a></li>
    {{--    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('customer') }}'><i--}}
    {{--                class='nav-icon la la-people-carry'></i> Khách hàng</a></li>--}}
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('cofig') }}'><i class='nav-icon la la-cog'></i>Cài
            đặt</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i
                class='nav-icon la la-user-alt-slash'></i> Người dùng</a></li>

    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('option') }}'><i class='nav-icon la la-umbrella'></i>
            Tag cho giáo viên</a></li>
@endif

<li class="nav-item nav-dropdown open">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper"></i> Các trang tĩnh</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{route("show.page.edit","about")}}"><i
                    class="nav-icon la la-files-o"></i> <span>Về chúng tôi</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{route("show.page.edit","faq")}}"><i
                    class="nav-icon la la-files-o"></i> <span>Câu hỏi thường gặp</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{route("show.page.edit","how_learn")}}"><i
                    class="nav-icon la la-files-o"></i> <span>Cách thức học</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{route("show.page.edit","payment")}}"><i
                    class="nav-icon la la-files-o"></i> <span>Học phí và thanh toán</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{route("show.page.edit","be_teacher")}}"><i
                    class="nav-icon la la-files-o"></i> <span>Trở thành giáo viên</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{route("show.page.edit","be_client")}}"><i
                    class="nav-icon la la-files-o"></i> <span>Trở thành đối tác của BizEnglish</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{route("show.page.edit","trade_teacher")}}"><i
                    class="nav-icon la la-files-o"></i> <span>Cung cấp giáo viên dạy online</span></a></li>

    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('comment') }}'>
        <i class='nav-icon la la-star'></i>{{backpack_user()->role==0 ?'Đánh giá BizEnglish':'Đánh giá giáo viên '.backpack_user()->name}}
    </a></li>
