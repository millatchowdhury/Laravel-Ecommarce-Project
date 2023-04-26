@extends('layouts.admin_app')

@section('admin_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Page Update</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Update Page</h3>
                </div>
                
                
                <form action="{{route('page.update', $page->id)}}" method="POST">
                    @csrf
                <div class="card-body">

                    <div class="form-group">
                    <label for="">Page Position</label>
                        <select class="form-control" name="page_position" id="">
                            <option value="1" @if ($page->page_position == 1) selected @endif>Line One</option>
                            <option value="2"{{($page->page_position == 2) ? "selected" : ""}}>Line Two</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="">Page Name</label>
                    <input type="text" class="form-control" id="" name="page_name" placeholder="Page Name" value="{{$page->page_name}}">
                    </div>

                    <div class="form-group">
                    <label for="">Page Title</label>
                    <input type="text" class="form-control" id="" name="page_title" placeholder="Page Title" value="{{$page->page_title}}">
                    </div>

                    <div class="form-group">
                    <label for="">Page Description</label>
                    <textarea class="form-control textarea" name="page_description">{{$page->page_description}}</textarea>
                    <small>This data will show on your webpage</small>
                    </div>

               
              
                </div>
                
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Page</button>
                </div>
                </form>
                </div>
        </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
