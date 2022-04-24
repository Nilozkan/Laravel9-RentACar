@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')

<div class="content-wrapper">
    <!-- Page Heading -->
    <section class="content-header">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
        <h1 class="h3 mb-4 text-gray-800">Add Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a> </li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>

            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
    </section>
</div>

    <!-- End of Main Content -->

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category Elements</h4>

                <form class="forms-sample" action="/admin/category/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="image"  placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Status</label>
                        <select class="form-control" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
