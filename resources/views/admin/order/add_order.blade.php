@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">BariWala</a>
    <span class="breadcrumb-item active">Add Orders Section</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Add New Order for Properties</h6>
        <p class="mg-b-20 mg-sm-b-30">Add New Order Form</p>

        <form action="{{route('store.modal.email')}}" method="post">
            @csrf
        <div class="form-layout">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email :</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Email Address" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone :</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="code">Property Code :</label>
                    <input type="text" class="form-control" name="property_code" id="code" placeholder="Enter Property Code" required>
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-info text-white m-3">Submit</button>
        </div>


        </div>

        </div><!-- form-layout -->
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->

@endsection
