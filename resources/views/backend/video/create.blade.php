@extends('layouts.backend')
@section('main')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Video Category</h3>
            <!-- BASIC FORM VALIDATION -->
            <div class="row mt">
                <div class="col-lg-10">

                    <div class="form-panel">
                        <form role="form" action="{{ route('video.store') }}" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Video Title Name</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Enter Video Title Name" name="title" id="title" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Video Category Name</label>
                                <div class="col-lg-10">
                                    <select name="category_id" class="form-control">
                                        <option value="" disabled selected>Select a Category</option>

                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Video Link </label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Enter Video Link Name" name="link" id="link" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Image </label>
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-theme" type="submit">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
            <!-- FORM VALIDATION -->
        </section>
@stop
