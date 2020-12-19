@extends('layouts.admin')

@section('title', 'DIMAS - Post')

@section('plugin')
<link rel="stylesheet" href="{{asset('assets/croppie/croppie.css')}}" />
<script src="{{asset('assets/croppie/croppie.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js" crossorigin="anonymous">
</script>
<script>
    // File Name Reader
    $(document).ready(function () {
        bsCustomFileInput.init();
    })

    // Image Preview
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src)
        }
    };

    // Image Cropper
    // var uploadCrop = $('#output').croppie({
    //     viewport: {
    //         width: 200,
    //         height: 200,
    //     },
    //     boundary: {
    //         width: 300,
    //         height: 300
    //     }
    // });

    // uploadCrop.bind({
    //     url: document.getElementById('output');
    // });
    // WORK IN PROGRESS

</script>
@endsection

@section('mainContent')
<div class="row h-100">
    <div class="col-1"></div>
    <div class="col m-5">
        <form action="#" method="GET">
            @csrf
            <table class="table table-light rounded">
                <tr>
                    {{-- Name --}}
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Name</span>
                            </div>
                            <input type="text" class="form-control text-muted" name="name" value="John Doe" readonly>
                        </div>
                    </td>

                    {{-- Date --}}
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date</span>
                            </div>
                            <input type="text" class="form-control text-muted" name="date" value="22/12/2020" readonly>
                        </div>
                    </td>
                </tr>

                <tr>
                    {{-- Username --}}
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Username</span>
                            </div>
                            <input type="text" class="form-control text-muted" name="username" value="johndoe" readonly>
                        </div>
                    </td>

                    {{-- Title --}}
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Title</span>
                            </div>
                            <input type="text" class="form-control" name="title" value="" placeholder="Title">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Description</span>
                            </div>
                            <textarea class="form-control" name="description" placeholder="Description"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Images</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" accept="image/*" onchange="loadFile(event)" name="image"
                                    class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="row row-cols-2">
                <div class="col-auto"><img id="output" src="" class="img-fluid" height="200" width="200" /></div>
            </div>
            <div class="row">
                <div class="col text-right">
                    <a class="btn btn-danger" href="{{route('/admin/schedule/id')}}">Cancel</a>
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-1"></div>
</div>
@endsection
