@extends('layouts.admin')

@section("content")
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Về chúng tôi</h1>
    </div>
    {!! Form::open(['method' => 'post']) !!}
    <div>
        <button class="btn btn-primary my-3">Lưu bài viết</button>
        <textarea name="contents" id="content-ck" class="form-control" rows="20" placeholder="Nhập mô tả">{!! old('contents', $post->contents ?? '') !!}</textarea>
    </div>
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('vendor/ckfinder/ckfinder.js')}}"></script>
    <script>
        CKEDITOR.replace('content-ck', {
            'filebrowserBrowseUrl' : '/vendor/ckfinder/ckfinder.html',
            'filebrowserImageBrowseUrl' : '/vendor/ckfinder/ckfinder.html?Type=Images',
            'filebrowserFlashBrowseUrl' : '/vendor/ckfinder/ckfinder.html?Type=Flash',
            'filebrowserUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            'filebrowserImageUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            'filebrowserFlashUploadUrl' : '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        })
    </script>
@stop
