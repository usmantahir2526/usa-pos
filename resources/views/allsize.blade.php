@extends('usalayout.master')

@section('main-content')
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Datatable</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Datatable</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        @if(session()->has('sizedel'))
                                            <p class="alert alert-success">{{session()->get('sizedel')}}</p>
                                        @endif
                                        <h4 class="header-title">All Size</h4>
                                        

                                        <table id="datatable" class="table table-bordered  dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    
                                            <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Company</th>
                                                <th>Size</th>
                                                <th>Created AT</th>
                                                <th>Updated AT</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                            @foreach($sizes as $size)    
                                            <tr>
                                                <td>{{$size->id}}</td>
                                                <td>{{$size->companysize->company}}</td>
                                                <td>{{$size->size}}</td>
                                                <td>{{$size->created_at->diffForHumans()}}</td>
                                                <td>{{$size->updated_at->diffForHumans()}}</td>
                                                <td><a href="" class="btn btn-info">Edit</button></td>
                                                <td>
                                                <form method="POST" action="/allsize/{{$size->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button></td>
                                                </form>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->
                
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2017 - 2019 &copy; Adminox theme by <a href="#">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

@endsection