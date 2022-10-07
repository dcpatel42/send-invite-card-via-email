@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Invite Card') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('invite.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group mb-3 col">
                                <label for="card_name" class="form-label">Card Name</label>
                                <input type="text" class="form-control" value="" id="card_name" placeholder="Enter Card Name"/>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="form-group mb-3">
                                <label for="list" class="form-label">Guest List</label>
                                <textarea class="form-control" id="guest_list" rows="3" name="guest_list" placeholder="Enter Guest list (Ex.. Tej Patel, Shiv Patel)"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col">
                                <label for="city" class="form-label">Country</label>
                                <select name="country" id="country" class="form-control">
                                    <option selected>Select Country</option>
                                    <option value="canada">Canada</option>
                                    <option value="india">India</option>
                                    <option value="USA">USA</option>
                                </select>
                            </div>
                            <div class="form-group mb-3 col">
                                <label for="city" class="form-label">State/Province</label>
                                <select name="province" id="province" class="form-control">
                                    <option selected>Select State</option>
                                    <option value="canada">Canada</option>
                                    <option value="india">India</option>
                                    <option value="USA">USA</option>
                                </select>
                            </div>
                            <div class="form-group mb-3 col">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" value="" id="city" placeholder="Enter City"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col">
                                <label for="font_size" class="form-label">Font Size</label>
                                <input type="number" name="font_size" id="font_size" class="form-control" value="12" placeholder="Font Size">
                            </div>
                            <div class="form-group mb-3 col">
                                <label for="font_color" class="form-label">Font Color</label>
                                <input type="text" name="font_color" id="font_color" class="form-control" placeholder="Font Color">
                            </div>
                            <div class="form-group mb-3 col">
                                <label for="pos_x" class="form-label">POS X</label>
                                <input type="number" name="pos_x" id="pos_x" class="form-control" value="25" placeholder="POS X">
                            </div>
                            <div class="form-group mb-3 col">
                                <label for="pos_y" class="form-label">POS Y</label>
                                <input type="number" name="pos_y" id="pos_y" class="form-control" value="25" placeholder="POS Y">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-6">
                                <label for="image"  class="form-label">Card Image</label>
                                <input type="file" class="form-control" id="image" name="image" />
                            </div>
                            <div class="form-group mb-3 col-6">
                                <label for="fontfile" class="form-label">Font File</label>
                                <input type="file" name="font_file" class="form-control" id="fontfile" name="fontfile" />
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
