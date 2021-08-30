@extends(backpack_view('layouts.top_left'))

@php
    // Merge widgets that were fluently declared with widgets declared without the fluent syntax:
    // - $data['widgets']['before_content']
    // - $data['widgets']['after_content']
    if (isset($widgets)) {
        foreach ($widgets as $section => $widgetSection) {
            foreach ($widgetSection as $key => $widget) {
                \Backpack\CRUD\app\Library\Widget::add($widget)->section($section);
            }
        }
    }
@endphp

@section('before_breadcrumbs_widgets')
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('section', 'before_breadcrumbs')->toArray() ])
@endsection

@section('after_breadcrumbs_widgets')
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('section', 'after_breadcrumbs')->toArray() ])
@endsection

@section('before_content_widgets')
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('section', 'before_content')->toArray() ])
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @switch($type)
        @case("about")
        <div class="h2">Về chúng tôi</div>@break
        @case("faq")
        <div class="h2">Câu hỏi thường gặp</div>@break
        @case("be_client")
        <div class="h2">Trở thành đối tác của BizEnglish</div>@break
        @case("be_teacher")
        <div class="h2">Trở thành giáo viên</div>@break
        @case("how_learn")
        <div class="h2">Cách thức học</div>@break
        @case("payment")Học phí và cách thanh toán</div>@break
        @case("trade_teacher")
        <div class="h2">Cung cấp giáo viên dạy online</div>@break
    @endswitch

    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/decoupled-document/ckeditor.js"></script>
    <!-- The toolbar will be rendered in this container. -->
    <div class="row">
        <div class="col-md-9 col-12">
            <div id="toolbar-container"></div>

            <!-- This container will become the editable. -->
            <div id="editor" class="bg-white mb-2" style="height: 1000px">
                {!! $old !!}
            </div>
            <form action="{{route("page.store",$type)}}" onsubmit="changeData()" method="post">
                @csrf
                <input id="data" name="{{$type}}" hidden>
                <button type="submit" class="btn btn-success">
                    <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                    <span data-value="save_and_back">Save and back</span>
                </button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <style>
        .ck-file-dialog-button{
            display: none;
        }
    </style>
    <script src="{{asset("asset/js/editor.mjs")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function changeData(){
            var data = $("#editor").html();
            $("#data").val(data);
            return true;
        }
    </script>
@endsection

@section('after_content_widgets')
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('section', 'after_content')->toArray() ])
@endsection
