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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title -->

<div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card-box">
                @if (session()->has('size'))
                    <p class="alert alert-success">{{session()->get('size')}}</p>
                @endif
                <h4 class="header-title mb-3">Add Size</h4>

                <form method="POST" action="/storesize">
                    @csrf
                    <div class="form-group">
                        <label for="comapny">Select Company Name * :</label>
                        <select class="form-control" name="company_id">
                                <option disabled="" selected="">Select Company</option>
                            @foreach ($companies as $company)
                                <option value="{{$company->id}}">{{$company->company}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="size">Enter Size * :</label>
                        <input type="text" class="form-control" name="size" id="size" placeholder="Enter Size">
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div>
        </div>
    <div class="col-md-3"></div>
</div>    

                        
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