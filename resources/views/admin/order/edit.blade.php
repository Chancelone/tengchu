@extends('admin.layouts.admin')

@section('title', '编辑医生')

@section('content')
 <div class="row">

  <div class="col-md-12">
   <div class="box box-info">
    <div class="box-header with-border">
     <h3 class="box-title">编辑医生</h3>
     <a href="{{url('admin/doctor')}}" class='btn btn-default btn-xs pull-right'>返回上页</a>
    </div>
    <div class="box-body">
     <form class="form-horizontal" action="{{ url('adminApi/doctor/'.$info -> id) }}" method="POST">
      <input type="hidden" name="_method" value="PUT">
      @include('admin.doctor._form', ['form_type' => 'edit'])

      <div class="form-group">
       <div class="col-md-7 col-md-offset-3">
        <button type="submit" class="btn btn-primary">编辑</button>
       </div>
      </div>

     </form>
    </div>
    <!-- /.box-body -->
   </div>
   <!-- /.box -->
  </div>
 </div>
@endsection