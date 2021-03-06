@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3 mr-2">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Posts Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($posts as $key => $post)
                        <tr>
                            <td> {{$key + 1}}</td>
                            <td> {{$post->title}}</td>
                            <td> {{$post->body}}</td>
                            <td>action</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div>
    </div>
    
@endsection