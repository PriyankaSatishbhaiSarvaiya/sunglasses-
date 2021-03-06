@extends('admin.master')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">

            <div class="d-flex justify-content-center">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-dark p-1">
                        <div class="card-header">
                            <h3 class="card-title">List Colors</h3>
                        <!-- </div> -->
                        <div class="text-center mt-2 mb-2 p-1">
                            <a class="btn btn-danger float-right" href="{{ url('/admin/colors/trash') }}"
                                role="button">Trash<i class="far fa-trash-alt"></i></a>
                            <a class="btn btn-success float-right" href="{{ url('/admin/colors/Addcolor') }}"
                                role="button">Add
                                <i class="fas fa-plus-circle"></i></i></a>
                        </div>
</div>
                    </div>

                    <table id="myTable" class="table table-striped ">

                        <thead>

                            <tr>

                                <th>ID</th>
                                <th>ColorName</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($colors as $col)
                                <tr>
                                    <td>{{ $col->id }}</td>
                                    
                                    <td>{{ $col->name }}</td>
                                    <td>
                                    @if ($col->status == 'Y')
                                    <label class="switch">
                                        <input type="checkbox" data-id="{{ $col->id }}"  class="toggle-class"{{ $col->status ? 'checked' : '' }}>
                                        <div class="slider round"></div>
                                      </label>
                                      @endif

                                      @if ($col->status == 'N')
                                    <label class="switch">
                                        <input type="checkbox" data-id="{{ $col->id }}"  class="toggle-class"{{ $col->status}}>
                                        <div class="slider round"></div>
                                      </label>
                                      @endif   
                                </td>
                                                                    <td>

                                        <a href="{{ url('/admin/colors/edit', $col->id) }}" class=""><i
                                                class="fas fa-pencil-alt"></i></a>&nbsp;
                                        <a href="javascript:void(0);" onclick="delete_Question({{ $col->id }})"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        @endsection
        @section('scripts')
            <script>
                $(function() {
                    $('.toggle-class').change(function() {
                        var status = $(this).prop('checked') == true ? 'Y' : 'N';
                        var id = $(this).data('id');
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: '/admin/colors/changeStatus',
                            data: {
                                'status': status,
                                'id': id
                            },
                            success: function(data) {
                                console.log(data.success)
                            }

                        });

                    })

                })

                function delete_Question(id) {
                    if (confirm('are your sure you want to delete !!!! ?')) {
                        jQuery.ajax({
                            url: '/admin/colors/completedUpdate',
                            type: 'GET',
                            data: {
                                'id': id
                            },
                            success: function(result) {
                                // jQuery('#check_delete'+id).hide();
                                console.log("Status Updated");
                                location.reload();
                            }
                        });
                    }
                }
                $(document).ready(function() {
                    $('#myTable').DataTable();
                });
                $(document).ready(function() {
                    $('.toggle-btn').click(function() {
                        $(this).toggleClass('active').siblings().removeClass('active');
                    });
                });
            </script>
            
        @endsection
