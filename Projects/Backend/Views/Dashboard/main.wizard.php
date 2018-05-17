    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->

         @Import::view('AdminSections/topheader'):    
        <!-- End header header -->

         @Import::view('AdminSections/sidebar'):          
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$totalProducts}}</h2>
                                    <p class="m-b-0">Toplam Ürün</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$totalBrands}}</h2>
                                    <p class="m-b-0">Toplam Marka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>{{$totalGroups}}</h2>
                                    <p class="m-b-0">Toplam Grup</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>847</h2>
                                    <p class="m-b-0">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Grup Listesi </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Grup Adı</th>
                                                <th>Görüntüle</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($getGroupList as $key)
                                            <tr>
                                                <th scope="row"></th>
                                                <td>{{$key['groupName']}}</td>
                                                <td class="color-primary">
                                                    <a target="_blank" href="../Home/getProductList/{{$key['groupid']}}" class="btn btn-info">Görüntüle</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Son Eklenen Ürünler </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ürün Adı(Modeli)</th>
                                                <th>Ürün Markası</th>
                                                <th>Ürün Resmi</th>
                                                <th>Ürün Fiyatı</th>
                                                <th>Ürün Grubu</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($groupList as $key)
                                            <tr>
                                                <th scope="row"></th>
                                                <td>{{$key['productname']}}</td>
                                                <td><span class="badge badge-primary">{{$key['brandname']}}</span></td>
                                                <td><img width=100 height=30 src="http://localhost/comporision/{{UPLOADS_DIR}}{{$key['productimage']}}" /></td>
                                                <td class="color-primary">{{$key['productprice']}}</td>
                                                <td class="color-primary">{{$key['groupname']}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- End PAge Content -->
            </div>

  @Import::view('Dashboard/footer'):          