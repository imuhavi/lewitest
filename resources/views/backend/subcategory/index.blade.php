@extends('backend.master');
@section('subcategory_active')
active
@endsection
@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="{{ url( routePrefix() . '/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url(routePrefix(). '/subcategory') }}">Subcategory</a></li>
                <li class="active">Subcategory-list</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <div class="text-left">
                          <h4 class="panel-title">Subcategory List</h4>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-info btn-sm" href="{{ url(routePrefix() . '/subcategory/create') }}">Add
                                Subcategory</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th width="120" style="text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a class="btn btn-info" href="#">Edit</a>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Add Subcategory</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="category">Subcategory Name</label>
                                    <input type="text" class="form-control m-t-xxs" id="category"
                                        placeholder="Subcategory name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="category">Choose Parent Category</label>
                                    <select name="" id="category" class="form-control">
                                      <option value="" disabled>Select One</option>
                                      <option value="">Category two</option>
                                      <option value="">Category three</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div><!-- Page Inner -->
@endsection