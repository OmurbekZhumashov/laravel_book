@extends('layouts.admin_layout')

@section('title', 'Редактирование книги')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование книги: {{$books['title']}}</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
    </div>
    @endif
    <!-- /.content-header -->
 
 
       <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                <form action="{{ route('books.update', $books['id'])}}" method="POST">
              @method('PUT')    
              @csrf
                  
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Называние книги</label>
                    <input type="text" value="{{$books['title']}}" name="title"class="form-control" id="exampleInputEmail1" placeholder="Называние книг">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Автор</label>
                    <input type="text" value="{{$books['author']}}" name="author" class="form-control" id="exampleInputEmail2" placeholder="Автор книги">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Изменить</button>
                </div>
              </form>
    </div>
    </div>

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
