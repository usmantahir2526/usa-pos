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
                            @if (session()->has('product'))
                                <p class="alert alert-success">{{session()->get('product')}}</p>
                            @endif
                            <h4 class="header-title mb-3">Add Article No.</h4>

                            <form method="POST" action="/storeproduct">
                                @csrf
                                <div class="form-group">
                                    <label for="company">Select Company Name * :</label>
                                    <select class="form-control" name="company_id">
                                        @foreach ($companies as $company)
                                            <option disabled="" selected="">Select Company</option>
                                            <option value="{{$company->id}}">{{$company->company}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Size * :</label>
                                    <select class="form-control" name="size_id">
                                        @foreach ($sizes as $size)
                                            <option disabled="" selected="">Select Size</option>
                                            <option value="{{$size->id}}">{{$size->size}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Article * :</label>
                                    <select class="form-control" name="article_id">
                                        <option disabled="" selected="">Select Article</option>
                                        @foreach ($articals as $artical)
                                            <option value="{{$artical->id}}">{{$artical->artical}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="company">Enter Product * :</label>
                                    <input type="text" class="form-control" name="product" id="product" placeholder="Enter Product e.g Shoes Sandal">
                                </div>
                                <div class="form-group">
                                    <label>Enter Purchase Price</label>
                                    <input type="text" id="pprice" name="pprice" placeholder="Enter Purchase Price" class="form-control input-lg" required="">
                                </div>
                                <div class="form-group">
                                    <label>Enter Sale Price</label>
                                    <input type="text" id="sprice" name="sprice" placeholder="Enter Sale Price" class="form-control input-lg" required="">
                                </div>
                                <div class="form-group">
                                    <label>Enter Quantity</label>
                                    <input type="text" id="quantity" name="quantity" placeholder="Enter Quantity Per Piece" class="form-control input-lg" required="">
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