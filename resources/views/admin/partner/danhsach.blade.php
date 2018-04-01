@extends('admin.layout.index')

@section('content')
<div class="page-container">
 <!-- BEGIN SIDEBAR -->
 <div class="page-sidebar-wrapper">
     <!-- BEGIN SIDEBAR -->
     @include('admin.layout.menu_admin');
     <!-- END SIDEBAR -->
 </div>
 <!-- END SIDEBAR -->
 <!-- BEGIN CONTENT -->
 <div class="page-content-wrapper">
     <!-- BEGIN CONTENT BODY -->
   <div class="page-content">
       <!-- BEGIN PAGE HEADER-->
       <!-- BEGIN PAGE BAR -->
       <div class="page-bar">
           <div class="page-toolbar">
               <div class="btn-group pull-right">
                   <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                       <i class="fa fa-angle-down"></i>
                   </button>
                   <ul class="dropdown-menu pull-right" role="menu">
                       <li>
                           <a href="#">
                               <i class="icon-bell"></i> Action</a>
                       </li>
                       <li>
                           <a href="#">
                               <i class="icon-shield"></i> Another action</a>
                       </li>
                       <li>
                           <a href="#">
                               <i class="icon-user"></i> Something else here</a>
                       </li>
                       <li class="divider"> </li>
                       <li>
                           <a href="#">
                               <i class="icon-bag"></i> Separated link</a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- END PAGE BAR -->
       <!-- BEGIN PAGE TITLE-->
       <h3 class="page-title"> Partner
       </h3>
       <!-- END PAGE TITLE-->
       <!-- END PAGE HEADER-->
       <div class="row">
           <div class="col-md-12">
               <!-- Begin: life time stats -->
               <div class="portlet ">
                   <div class="portlet-title">
                           <a href="admin/partner/them" class="btn btn-circle btn-info">
                               <i class="fa fa-plus"></i>
                               <span class="hidden-xs"> Create </span>
                           </a>
                           <div class="btn-group">
                               <a class="btn btn-circle btn-default dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                   <i class="fa fa-share"></i>
                                   <span class="hidden-xs"> Tools </span>
                                   <i class="fa fa-angle-down"></i>
                               </a>
                               <div class="dropdown-menu pull-right">
                                   <li>
                                       <a href="javascript:;"> Export to Excel </a>
                                   </li>
                               </div>
                           </div>
                   </div>
               </div>
                   <div class="portlet-body">
                       <div class="table-container">

                           <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_products">
                               <thead>
                                   <tr role="row" class="heading">
                                       <th width="1%">
                                           <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                               <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                               <span></span>
                                           </label>
                                       </th>
                                       <th width="5%"> ID </th>
                                       <th width="15%"> Image </th>
                                       <th width="15%"> Name </th>
                                       <th width="15%"> Email </th>
                                       <th width="15%"> Phone </th>
                                       <th width="15%"> Address </th>
                                       <th width="15%"> is_active </th>
                                       <th width="15%"> Actions </th>
                                   </tr>
                                   @foreach($partner as $dt)
                                   <tr role="row" class="filter">
                                       <td> </td>
                                       <td>
                                           {{$dt->id}}
                                       </td>
                                       <td>
                                           <img width="80" src="upload/partner/{{$dt->image}}"/> 
                                       </td>
                                       <td>
                                           {{$dt->name}}
                                       </td>
                                       <td>
                                           {{$dt->email}}
                                       </td>
                                        <td>
                                           {{$dt->phone}}
                                       </td>
                                       <td>
                                           {{$dt->address}}
                                       </td>
                                      
                                       <td>
                                           <select name="product_status" class="form-control form-filter input-sm">
                                               <option value="">{{$dt->is_active}}</option>
                                           </select>
                                       </td>
                                        <td>
                                             <div class="center">
                                                    <i class="fa fa-pencil fa-fw"></i>
                                                    <a href="admin/partner/sua/{{$dt->id}}">Edit</a>
                                                </div>
                                                <div class="center">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                    <a href="admin/partner/xoa/{{$dt->id}}">Dele</a>
                                                </div>
                                       </td>
                                   </tr>
                                   @endforeach
                               </thead>
                               <tbody>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
               <!-- End: life time stats -->
           </div>
       </div>
     </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection