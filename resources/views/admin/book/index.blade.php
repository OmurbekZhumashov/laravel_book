@extends('layouts.admin_layout')

@section('title', 'Все книги')

@section('content')
<div class="content-header">
      <div class="container-fluid">
 
          <div class="card">


        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          ID
                      </th>
                      <th>
                          Называние 
                      </th>
                      <th>
                          Автор
                      </th>
                      
                      
                  </tr>
              </thead>
              <tbody>
                  @foreach ($books as $book)
                <tr>
                      <td>
                          {{$book['id']}}
                      </td>
                      <td>
                          {{$book['title']}}
                      </td>
                      <td>
                          {{$book['author']}}
                      </td>
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{route ('books.edit', $book['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редактировать
                          </a>
                          <form action="{{ route('books.destroy', $book['id'])}}" method="POST">
                              @csrf 
                              @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">
                              <i class="fas fa-trash">
                              </i>
                              Удалить
                            </button>
                      </td>
                  </tr>
                  @endforeach 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
  
        
          
       
    </div>
 
    <!-- /.content-header -->
   

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
