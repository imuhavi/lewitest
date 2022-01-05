@extends('backend.master')
@section('coupon_active')
active
@endsection
@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url(routePrefix(). '/coupon') }}">Coupon</a></li>
                <li class="active">Coupon-list</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">

        <div class="row">
          @if ( $page == 'index')
             <div class="col-md-10 col-md-offset-1">
                 <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <div class="text-left">
                            <h4 class="panel-title">Coupon List</h4>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-info btn-sm" href="{{ url(routePrefix() . '/coupon/create') }}">Add Coupon</a>
                        </div>
                    </div>

                     <div class="panel-body">
                         <div class="table-responsive">
                             <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                 <thead>
                                     <tr>
                                         <th>Name</th>
                                         <th>Code</th>
                                         <th>Discount</th>
                                         <th>Create date</th>
                                         <th>Start date</th>
                                         <th>Expired date</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ( $data as $item )
                                       <tr>
                                           <td>{{ $item->name }}</td>
                                           <td>{{ $item->code }}</td>
                                           <td>{{ $item->created_at->diffForHumans() }}</td>
                                           <td>{{ $item->start }}</td>
                                           <td>{{ $item->end }}</td>
                                           <td>
                                              <a class="btn btn-sm btn-info"
                                                  href="{{ url( routePrefix() . '/coupon/' . $item->id . '/edit') }}"><i class="fa fa-edit"></i></a>
                                              <a class="btn btn-sm btn-info"
                                                  href="{{ url( routePrefix() . '/coupon/' . $item->id) }}"><i class="fa fa-eye"></i></a>
                                              <form style="display: inline-block"
                                                  action="{{ route('coupon.destroy', $item->id) }}" method="post">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
          @elseif ($page == 'create' || $page == 'edit')
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">{{ $page == 'create' ? 'Add' : 'Edit' }} Coupon</h4>
                    </div>
                    <div class="panel-body">
                        <form action="#" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="coupon_name">Coupon Name</label>
                                    <input type="text" name="name" class="form-control m-t-xxs" id="coupon_name"
                                        placeholder="Coupon name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="coupon_code">Coupon Code</label>
                                    <input type="text" class="form-control m-t-xxs" id="coupon_name" name="code" placeholder="Coupon Code">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="starting_date">Starting date of Coupon</label>
                                    <input type="date" name="start" class="form-control" id="starting_date"
                                        placeholder="Ex: New Year 2021">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="end_date">End date of Coupon</label>
                                    <input type="date" name="end" class="form-control" id="end_date"
                                        placeholder="Ex: New Year 2021">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="discount_type">Discount Type</label>
                                    <select class="form-control" name="discount_type" id="discount_type">
                                        <option value="" disabled selected>Select Discount Type</option>
                                        <option value="1">Fixed Amount($)</option>
                                        <option value="2">Percentage(%)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="discount_amount">Discount Amount</label>
                                    <input type="number" name="discount" class="form-control"
                                        placeholder="Ex: 300">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="min_amount">Minium Amount</label>
                                    <input type="number" name="min_shopping_amount" class="form-control" id="min_amount"
                                        placeholder="Ex: 300">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="min_amount">Max Discount Amount</label>
                                    <input type="number" name="max_discount_amount" class="form-control" id="min_amount"
                                        placeholder="Ex: 300">
                                </div>
                            </div>

                            <div class="from-row status">
                                <label class="no-s">
                                    <input type="checkbox"> Active
                                </label>
                            </div>
                            <button type="submit" class="btn btn-info m-t-xs m-b-xs">{{ $page == 'create' ? 'Save' : 'Save Changes' }}</button>
                        </form>
                    </div>
                </div>
            </div>
          @endif
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div><!-- Page Inner -->
@endsection