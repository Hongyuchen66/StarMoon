@extends('layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
<style>
    .note-btn.dropdown-toggle:after {
        content:none;
    }
</style>
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/home')}}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{route('feedbacks.index')}}">評價管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯評價</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">評價 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('feedbacks.update',['feedback'=>$feedback->id])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row py-2">
                            <label for="title" class="col-sm-2 col-form-label">標題</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="{{$feedback->title}}" >
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="date" class="col-sm-2 col-form-label">日期</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="date" name="date" value="{{$feedback->date}}" >
                            </div>
                        </div>                        
                        <div class="form-group row py-2">
                            <label for="detail" class="col-sm-2 col-form-label">內容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="detail" rows="5" required>{{$feedback->content}}</textarea>
                            </div>
                        </div>
                        {{-- <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">名字</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="{{$feedback->name}}" required>
                            </div>
                        </div> --}}
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#detail').summernote();
    });
</script>
@endsection
