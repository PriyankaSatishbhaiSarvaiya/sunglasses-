@extends('admin.master')
@section('content')

<style>
    label.error{
        color :#dc3545;
    }
    </style>
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="d-flex justify-content-center p-1">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Add Colors</h3>
                            <a href="{{ url('admin/dashboard') }}" class="btn btn-dark float-right">
                                <p class="text-success font-weight-bold">
                                    <h5> &nbsp; <i class="fas fa-arrow-alt-circle-left fa-lg"></i>
                                </p>
                                </h5>
                            </a>
                            <a href="{{ url('/admin/colors/list') }}" class="btn btn-dark float-right">
                                <p class="text-success font-weight-bold">
                                    <h5>LIST &nbsp;<i class="fas fa-list"></i>
                                </p>
                                </h5>
                            </a>
                        </div>
                        
                        <form method="POST"  id="form_submit" action="/admin/colors/list">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Color Name</label>
                                    <input type="text" class="form-control" name="name" onblur="checkAvailability()"
                                        id="name" placeholder="Enter color" oninput="this.value = this.value.replace(/[^A-za-z_\s]/g, '').replace(/(\..*)\./g, '$1');">
                                    <span id="user-availability-status"></span>

                                    @error('name')
                                        <p style="color:red">{{ $message }} </p>
                                    @enderror
                                    <h5 id="colorcheck"></h5>
                                </div>
                            </div>

                            <div class="card-footer " align="center">
                                <button type="submit" id="submitbtn" class="btn btn-dark">Submit</button>
                            </div>
                        </form>
                    </div>
                    @if (session()->has('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script type="text/javascript">
   $("#form_submit").validate({
                    rules: {
                        name: {
                            required: true,
                            remote: {
                                url: '/admin/colors/uniquename',
                                type: "GET",
                                data: {
                                    colorname: function() {
                                        return $("#name").val();
                                    }
                                },
                            }

                            
                        },
                        
                    },
                    messages:{
                        name:{
                            required:"The Name field is Required!!",
                            remote:"The Name has already been taken !! ",


                        }

                    },


                });

               
            
     </script>
@endsection
