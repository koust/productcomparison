
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <!-- End header header -->
        <!-- Left Sidebar  -->
          @Import::view('AdminSections/topheader'):    
        <!-- End header header -->

         @Import::view('AdminSections/sidebar'):          
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
       
            @if(!empty($success))
           
            <div class="alert alert-info">
                {{$success}}
            </div>
       
        	@endif

        	@if(!empty($error))
           
            <div class="alert alert-danger">
                {{$error}}
            </div>
       
        	@endif
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ürün Ekle</h4>
                                <h6 class="card-subtitle">Bu form aracılığı ile yeni ürün ekleyebilirsiniz.(Bilgileri eksiksiz girmeniz tam performans almanıza yarar sağlar)</h6>
                                <form class="form p-t-20" action="addproduct" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputuname2">Ürün Adı(Modeli)</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputuname2" name="productname" placeholder="Ürün Adı">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Ürün Resmi</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="exampleInputEmail2" name="productimage" placeholder="Ürün Resmi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputpwd2">Ürün Fiyatı</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputpwd2" name="productprice" value="0" placeholder="Ürün Fiyatı">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                              <label for="">Ürün Grubu</label>
                                            <div class="input-group">
                                                <select class="form-control custom-select" name="groupid">


                                                     @foreach( $groupList as $key )
                                                    <option value="{{$key['groupid']}}">{{$key['groupName']}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group ">
                                              <label for="">Ürün Markası</label>
                                            <div class="input-group">
                                                <select class="form-control custom-select" name="brandid">
                                                     @foreach( $brandList as $key )
                                                    <option value="{{$key['brandid']}}">{{$key['brandname']}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    <hr class="m-t-0 m-b-40">
                                    @foreach( $featuresList as $key )
                                    <div class="form-group">
                                        <label for="exampleInputpwd3">{{$key['productfeatures']}}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="{{$key['productfeatures']}}" id="exampleInputpwd3" placeholder="Eğer Bilgi Yoksa - Koyunuz">
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Ekle</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
     
                </div>
                <!-- Row -->
                <!-- Row -->
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->

         @Import::view('ProductList/footer'):          