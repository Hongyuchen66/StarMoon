@extends('layouts.app')
@section('title','輪播圖片和Solgan管理')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
th,td{
    text-align: center;
    vertical-align: middle; 
}
</style>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">輪播圖片和Slogan管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('carousels.create')}}" class="btn btn-success">新增輪播圖片和Slogan</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Slogan</th>
                                <th width="250">圖片</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carousels as $carousel)
                                <tr>
                                    <td>{{$carousel->slogan}}</td>
                                    <td><img src="{{Storage::url($carousel->image_url)}}" alt="" width="200"></td>
                                    <td>
                                        <a href="{{route('carousels.edit',['carousel'=>$carousel->id])}}" class="btn btn-primary">編輯</a>                                    
                                        <button class="btn btn-danger delete-btn">刪除</button> 
                                        <form class="d-none" action="{{route('carousels.destroy',['carousel'=>$carousel->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#my-table').DataTable({
            "order":[],
            language:{
                url:"{{asset('js/datatable-zh.json')}}"
            }
        });
    });

    const deleteEles =document.querySelectorAll('.delete-btn');
    deleteEles.forEach(function(deleteEle){
        deleteEle.addEventListener('click',function(){
            if(confirm('你確定要刪除這筆資料嗎？')){
                this.nextElementSibling.submit();
            }
        })
    })
</script>
@endsection