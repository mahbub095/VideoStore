@extends('layouts.backend')
@section('main')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Video Category</h3>
            <!-- BASIC FORM VALIDATION -->
            <div class="row mt">
                <div class="col-lg-10">

                    <div class="form-panel">
                        <form role="form" action="{{ route('category.store') }}" class="form-horizontal style-form" method="post">
                            @csrf
                            <div class="form-group has-success">
                                <label class="col-lg-2 control-label">Category Name</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Enter Category Name" name="name" id="name" class="form-control" >
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
