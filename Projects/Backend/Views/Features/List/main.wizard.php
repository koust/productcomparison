
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
       
      
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                <!-- Row -->
                <!-- Row -->
                      <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Özellik Listesi </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Özellik Adı</th>
                                                <th>Düzenle</th>
                                                <th>Sil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($getGroupList as $key)
                                            <tr>
                                                <th scope="row"></th>
                                                <td>{{$key['productfeatures']}}</td>
                                                <td class="color-primary">
                                                    <a href="updateFeature/{{$key['productfeaturesid']}}" class="btn btn-info">Düzenle</a>
                                                </td>
                                                <td class="color-primary">
                                                      <a href="deleteFeature/{{$key['productfeaturesid']}}" class="btn btn-danger">Sil</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <!-- /# column -->
                </div>
                <!-- /# row -->
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