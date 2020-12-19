@extends('layouts.dashboard')

@section('title', 'DIMAS - Buy a Plan')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="text-center">Choose your Plan</h1>
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
    </div>
</div>

<script>
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