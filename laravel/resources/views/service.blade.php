@extends('layouts.landing')

@section('title','DIMAS - Service')

@section('mainContent')
<!-- vector -->
<div class="landing row">
    <div class="col-1"> {{-- OFFSET--}} </div>
    <div class="col-md m-auto p-5">
        <h1>Our Service</h1>
        <h3>DIMAS</h3>
        <p>Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor Lorem Ipsum
            dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet
        </p>
    </div>
    <div class="col-md m-auto"><img src="{{asset('assets/img/webg.png')}}" class="img-fluid"></div>
</div>
<!-- End of vector -->
<!-- Edukasi Digital Marketing -->
<div class="row mt-5">
    <div class="text-center col-md m-auto">
        <div class="col-md">
            <h2>Kenapa Harus Digital Marketing?</h2>
        </div>
        <div class="col-md p-4">
            <p>Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                sit amet Lorem Ipsum dolor sit ametLorem Ipsum dolor sit ametLorem Ipsum dolor sit amet
                Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                sit amet Lorem Ipsum dolor sit ametLorem Ipsum dolor sit ametLorem Ipsum dolor sit amet</p>
        </div>
    </div>
    <div class="col-md m-auto">
        <img src="{{asset('assets/img/web1.png')}}" class="img-fluid p-5">
    </div>
</div>
<!-- End Edukasi Digital Marketing -->

{{-- Our Service : Section --}}
<div class="row mt-3 btn-group-toggle" data-toggle="buttons">
    {{-- Social Media Monitoring --}}
    <div class="col-md-3">
        <center>
            <div id="smmm" class="card btn btn-outline-info">
                <input type="radio" name="service" hidden checked>
                <div class="card-body">
                    <h5 class="card-title">Social Media Monitoring</h5>
                    <h6 class="card-subtitle mb-2">Our Service</h6>
                </div>
            </div>
        </center>
    </div>

    {{-- Building Website --}}
    <div class="col-md-3">
        <center>
            <div id="bwm" class="card btn btn-outline-info">
                <input type="radio" name="service" hidden>
                <div class="card-body">
                    <h5 class="card-title">Building Website</h5>
                    <h6 class="card-subtitle mb-2">Our Service</h6>
                </div>
            </div>
        </center>
    </div>

    {{-- Thematic Posting --}}
    <div class="col-md-3">
        <center>
            <div id="tpm" class="card btn btn-outline-info">
                <input type="radio" name="service" hidden>
                <div class="card-body">
                    <h5 class="card-title">Thematic Posting</h5>
                    <h6 class="card-subtitle mb-2">Our Service</h6>
                </div>
            </div>
        </center>
    </div>

    {{-- Schedule Posting --}}
    <div class="col-md-3">
        <center>
            <div id="spm" class="card btn btn-outline-info">
                <input type="radio" name="service" hidden>
                <div class="card-body">
                    <h5 class="card-title">Schedule Posting</h5>
                    <h6 class="card-subtitle mb-2">Our Service</h6>
                </div>
            </div>
        </center>
    </div>
</div>

<!-- View -->
<div class="row ">
    <!-- Social Media Monitoring -->
    <div class=" col mt-5" id="smm">
        <div class="row">
            <div class="col-md text-center m-auto">
                <img src="{{asset('assets/img/web1.png')}}" class="img-fluid p-5">
            </div>
            <div class="col m-auto">
                <div class="col text-center">
                    <h3>Social Media Monitoring</h3>
                </div>
                <div class="colp-4">
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

    <!-- Building Website -->
    <div class=" col" id="bw" style="display: none;">
        <div class="row">
            <div class="col-md text-center m-auto">
                <img src="{{asset('assets/img/19199025.png')}}" class="img-fluid p-5">
            </div>
            <div class="col m-auto">
                <div class="col text-center">
                    <h3>Building Website</h3>
                </div>
                <div class="col p-4">
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

    <!-- Thematic Posting -->
    <div class=" col mt-5" id="tp" style="display: none;">
        <div class="row">
            <div class="col-md text-center m-auto">
                <img src="{{asset('assets/img/3410348.jpg')}}" class="img-fluid p-5">
            </div>
            <div class="col m-auto">
                <div class="col text-center">
                    <h3>Thematic Posting</h3>
                </div>
                <div class="col p-4">
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

    <!--  Schedule Posting -->
    <div class=" col mt-5" id="sp" style="display: none;">
        <div class="row">
            <div class="col-md text-center m-auto">
                <img src="{{asset('assets/img/2473674.jpg')}}" class="img-fluid p-5">
            </div>
            <div class="col m-auto">
                <div class="col text-center">
                    <h3>Schedule Posting</h3>
                </div>
                <div class="col">
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
</div>

<!-- Benefit -->
<div class="row mt-5">
    <div class="col-md m-auto">
        <div class="col m-auto">
            <div class="col text-center">
                <h1>Benefit</h1>
                <hr style="height: 3px;background-color:  #aeebf3;width: 200px;">
            </div>
            <div class="col p-4">
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
    <div class="col-md m-auto">
        <img src="{{asset('assets/img/486539-PH7BQV-226.png')}}" class="img-fluid p-5">
    </div>
</div>

{{-- Switcher Pricing --}}
<!-- Title -->
<div class="row">
    <div class="col">
        <h1 class="text-center">Pricing Service</h1>
        <p class="text-center">Let's Make a deal for your Company</p>
        <div class="btn-group-toggle text-center" data-toggle="buttons">
            <label for="bundle" class="btn btn-outline-info ml-2 mr-2 active">
                <input type="radio" checked class="toggle_option" id="bundle" name="toggle_option">Bundle
            </label>
            <label for="website" class="btn btn-outline-info ml-2 mr-2">
                <input type="radio" class="toggle_option" id="website" name="toggle_option">Website
            </label>
            <label for="medsos" class="btn btn-outline-info ml-2 mr-2">
                <input type="radio" class="toggle_option" id="medsos" name="toggle_option">Media Social
            </label>
        </div>
    </div>
</div>

{{-- Menu Pricing --}}
<div class="container">
    <!-- Bundle -->
    <!-- Premium -->
    <div class="row" id="bds">
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem;height: 40.5rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Premium</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Full Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">5<span
                                    style="font-size: 30px;">.5 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Building
                                            Website</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Thematic
                                            Posting</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Maintanance
                                            Website</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Maintanance
                                            Social Media</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Schedule
                                            Posting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- Gold (Half Access) -->
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem; height: 40.5rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Gold</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Half Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">4<span
                                    style="font-size: 30px;">.0 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Building
                                                    Website</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Showing Product on
                                                    Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Thematic
                                            Posting</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Maintanance
                                            Website</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Maintanance
                                            Social Media</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Schedule
                                                    Posting</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Posting on Big Day
                                                    Celebration)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
        <!-- Regular (Early Access) -->
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Regular</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Early Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">3<span
                                    style="font-size: 30px;">.0 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Building
                                                    Website</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Showing Product and
                                                    Detail on Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Thematic
                                            Posting</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Maintanance
                                            Website</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Maintanance
                                            Social Media</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Building
                                                    Website</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Posting on Big Day
                                                    Celebration and Upload Every Day)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
    <!-- Website -->
    <!-- Premium -->
    <div class="row" id="webs" style="display: none;">
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem; height: 34rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Premium Web</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Full Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">3<span
                                    style="font-size: 30px;">.0 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Landing
                                            Page</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Product
                                            Show</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Detail
                                            Webs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- Gold (Half Access) -->
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem;height: 34rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Gold Web</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Half Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">2<span
                                    style="font-size: 30px;">.0 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Landing
                                            Page</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Product
                                                    Show</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Showing Product on
                                                    Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Detail
                                            Website</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
        <!-- Regular (Early Access) -->
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Regular Web</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Early Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">1<span
                                    style="font-size: 30px;">.5 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Landing
                                            Page</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Product
                                                    Show</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Showing Product on
                                                    Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Detail
                                                    Website</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Detail on Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
    </div>
    <!-- End of Bundle -->
    <!-- Medsos -->
    <!-- Premium -->
    <div class="row" id="mds" style="display: none;">
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem; height: 34rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Premium Medsos</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Full Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">3<span
                                    style="font-size: 30px;">.0 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Landing
                                            Page</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Product
                                            Show</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Detail
                                            Webs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- Gold (Half Access) -->
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem;height: 34rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Gold Medsos</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Half Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">2<span
                                    style="font-size: 30px;">.0 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Landing
                                            Page</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Product
                                                    Show</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Showing Product on
                                                    Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Detail
                                            Website</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
        <!-- Regular (Early Access) -->
        <div class="col-md-4" style="margin-top: 20px;">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">
                                <center>Regular Medsos</center>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <center>1 Year Access (Early Access)</center>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <p class="card-subtitle mb-2 " style=" font-size: 150px; margin-left: 90px;">1<span
                                    style="font-size: 30px;">.5 jt</span></p>
                        </div>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="font-size: 18px; text-align: center;"><span><i
                                                    class="fas fa-check-circle "
                                                    style="color: lightgreen; margin-right: 5px;"></i></span>Landing
                                            Page</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Product
                                                    Show</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Showing Product on
                                                    Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-size: 18px; text-align: center;"><span><i
                                                            class="fas fa-check-circle "
                                                            style="color: lightgreen; margin-right: 5px;"></i></span>Detail
                                                    Website</p>
                                            </div>
                                            <div class="col-md-12">
                                                <p style="font-size: 13px; text-align: center;"><span><i
                                                            class="fas fa-minus-circle"
                                                            style="margin-right: 5px; color: red;"></i></span>(Without
                                                    Detail on Website)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
    </div>
    <!-- End of Medsos -->
</div>
@endsection

@section('script')
<script type="text/javascript">
    // Service
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

    // Pricing
    $('#bundle').click(function () {
        $('#bds').show();
        $('#webs').hide();
        $('#mds').hide();
    });

    $('#website').click(function () {
        $('#webs').show();
        $('#bds').hide();
        $('#mds').hide();
    });

    $('#medsos').click(function () {
        $('#mds').show();
        $('#webs').hide();
        $('#bds').hide();
    });

</script>
@endsection
