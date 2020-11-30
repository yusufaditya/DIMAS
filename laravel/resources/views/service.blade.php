@extends('layouts.landing')

@section('title','DIMAS - Service')

@section('mainContent')
<div class="col">
    <!-- vector -->
    <div class="landing row mt-5">
        <div class=" left col-md-6 ">
            <h1 class="judul">Our Service</h1>
            <h3>DIMAS</h3>
            <p class="desc">Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor Lorem Ipsum
                dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet
            </p>
        </div>
        <div class="col-md-6 mt-5">
            <center><img src="{{asset('assets/img/webg.png')}}" width="450" height="450"></center>
        </div>
    </div>
    <!-- End of vector -->
    <!-- Edukasi Digital Marketing -->
    <div class="filling row mt-5 ">
        <div class=" text col-md-6 ">
            <div class="col-md-12 ">
                <h2>
                    <center>Kenapa Harus Digital Marketing?</center>
                </h2>
            </div>
            <div class="col-md-12 ml-4 mt-4" style="text-align: center;">
                <p>Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                    sit amet Lorem Ipsum dolor sit ametLorem Ipsum dolor sit ametLorem Ipsum dolor sit amet
                    Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                    sit amet Lorem Ipsum dolor sit ametLorem Ipsum dolor sit ametLorem Ipsum dolor sit amet</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/img/web1.png')}}" width="600" height="400">
        </div>
    </div>
    <!-- End Edukasi Digital Marketing -->
    <!-- View -->
    <!-- card -->
    <div class="row mt-3">
        <!-- Social Media Monitoring -->
        <div class="col-md-3" id="smmm">
            <center>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Social Media Monitoring</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
                    </div>
                </div>
            </center>
        </div>
        <!-- end -->
        <!-- Building Website -->
        <div class="col-md-3" id="bwm">
            <center>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Building Website</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
                    </div>
                </div>
            </center>
        </div>
        <!-- end -->
        <!-- Thematic Posting -->
        <div class="col-md-3" id="tpm">
            <center>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Thematic Posting</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
                    </div>
                </div>
            </center>
        </div>
        <!-- end -->
        <!-- Schedule Posting -->
        <div class="col-md-3" id="spm">
            <center>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Schedule Posting</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
                    </div>
                </div>
            </center>
        </div>
        <!-- end -->
    </div>
    <!-- end -->
    <!-- View -->
    <div class="row ">
        <!-- Social Media Monitoring -->
        <div class=" col-md-12 mt-5" id="smm">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/web1.png')}}" width="500" height="300" style="margin-left: 50px;">
                </div>
                <div class="col-md-6" style="margin-top: 40px;">
                    <div class="col-md-12 ml-2">
                        <h3>Social Media Monitoring</h3>
                    </div>
                    <div class="col-md-12 p-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            .</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- Building Websitem -->
        <div class=" col-md-12 mt-5" id="bw" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/19199025.png')}}" width="300" height="300" style="margin-left: 140px;">
                </div>
                <div class="col-md-6" style="margin-top: 40px;">
                    <div class="col-md-12" style="margin-left: 70px;">
                        <h3>Building Website</h3>
                    </div>
                    <div class="col-md-12 p-4">
                        <p>Digital marketing adalah suatu kegiatan pemasaran atau promosi sebuah brand atau
                            produk menggunakan media digital atau internet.
                            Tujuan digital marketing adalah untuk menarik konsumen dan calon konsumen secara
                            cepat. Seperti yang kita tahu, penerimaan teknologi dan internet di masyarakat
                            sangat luas sehingga tidak heran kegiatan pemasaran secara digital dijadikan pilihan
                            utama oleh perusahaan-perusahaan.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- Thematic Posting -->
        <div class=" col-md-12 mt-5" id="tp" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/3410348.jpg')}}" width="500" height="300" style="margin-left: 50px;">
                </div>
                <div class="col-md-6" style="margin-top: 40px;">
                    <div class="col-md-12" style="margin-left: 70px;">
                        <h3>Thematic Posting</h3>
                    </div>
                    <div class="col-md-12 p-4">
                        <p>Digital marketing adalah suatu kegiatan pemasaran atau promosi sebuah brand atau
                            produk menggunakan media digital atau internet.
                            Tujuan digital marketing adalah untuk menarik konsumen dan calon konsumen secara
                            cepat. Seperti yang kita tahu, penerimaan teknologi dan internet di masyarakat
                            sangat luas sehingga tidak heran kegiatan pemasaran secara digital dijadikan pilihan
                            utama oleh perusahaan-perusahaan.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!--  Schedule Posting -->
        <div class=" col-md-12 mt-5" id="sp" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/2473674.jpg')}}" width="500" height="300" style="margin-left: 50px;">
                </div>
                <div class="col-md-6" style="margin-top: 40px;">
                    <div class="col-md-12" style="margin-left: 70px;">
                        <h3>Schedule Posting</h3>
                    </div>
                    <div class="col-md-12 p-4">
                        <p>Digital marketing adalah suatu kegiatan pemasaran atau promosi sebuah brand atau
                            produk menggunakan media digital atau internet.
                            Tujuan digital marketing adalah untuk menarik konsumen dan calon konsumen secara
                            cepat. Seperti yang kita tahu, penerimaan teknologi dan internet di masyarakat
                            sangat luas sehingga tidak heran kegiatan pemasaran secara digital dijadikan pilihan
                            utama oleh perusahaan-perusahaan.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
    </div>
    <!-- End -->
    <!-- End -->
    <!-- Benefit -->
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="margin-top:130px; margin-left: 260px;">Benefit</h1>
                    <hr style="height: 3px;background-color:  #aeebf3;width: 200px;">
                </div>
                <div class="container col-md-12" style="margin-left: 40px;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        .</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/img/486539-PH7BQV-226.png')}}" height="500" width="500" style="margin-left: 120px;">
        </div>
    </div>
    <!-- End -->
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('#smmm').click(function () {
        $('#smm').show();
        $('#bw').hide();
        $('#tp').hide();
        $('#sp').hide();
    });

    $('#bwm').click(function () {
        $('#bw').show();
        $('#smm').hide();
        $('#tp').hide();
        $('#sp').hide();
    });

    $('#tpm').click(function () {
        $('#tp').show();
        $('#bw').hide();
        $('#smm').hide();
        $('#sp').hide();
    });

    $('#spm').click(function () {
        $('#sp').show();
        $('#bw').hide();
        $('#tp').hide();
        $('#smm').hide();
    });

</script>
@endsection
