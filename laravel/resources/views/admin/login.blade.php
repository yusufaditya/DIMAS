@extends('layouts.admin')

@section('title', 'DIMAS - Login')

@section('mainContent')
<div class="row h-100">
    <div class="col-3">{{-- OFFSET --}}</div>
    <div class="col-md m-auto" style="padding: 3rem;">
        <div class="col rounded card" style="background: #ffffff; padding: 2rem;">
            {{-- Header --}}
            <div class="mb-4 text-center">
                <h4>Login</h4>
            </div>

            <div class="text-center">
                <form action="#" method="POST">
                    @csrf

                    {{-- Username --}}
                    <div class="col mb-4">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="col mb-4">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-3">{{-- OFFSET --}}</div>
</div>
@endsection