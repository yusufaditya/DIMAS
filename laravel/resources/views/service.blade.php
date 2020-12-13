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
<div class="row mt-3">
    {{-- Social Media Monitoring --}}
    <div class="col-md-3" id="smmm">
        <center>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Social Media Monitoring</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
                </div>
            </div>
        </center>
    </div>

    {{-- Building Website --}}
    <div class="col-md-3" id="bwm">
        <center>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Building Website</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
                </div>
            </div>
        </center>
    </div>

    {{-- Thematic Posting --}}
    <div class="col-md-3" id="tpm">
        <center>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thematic Posting</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
                </div>
            </div>
        </center>
    </div>

    {{-- Schedule Posting --}}
    <div class="col-md-3" id="spm">
        <center>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Schedule Posting</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Our Service</h6>
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
</div>

<!-- Benefit -->
<div class="row mt-5">
    <div class="col-md m-auto">
        <div class="col">
            <div class="col text-center">
                <h1>Benefit</h1>
                <hr style="height: 3px;background-color:  #aeebf3;width: 200px;">
            </div>
            <div class="col" style="margin-left: 40px;">
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
