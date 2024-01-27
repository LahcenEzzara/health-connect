<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body>
<div class="container-scroller">
    <!-- partial:/admin/assets/partials/_navbar.html -->

    @include('admin.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:/admin/assets/partials/_settings-panel.html -->


        <!-- partial -->
        <!-- partial:/admin/assets/partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Doctors</h4>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Dr.
                                            </th>
                                            <th>
                                                Doctor name
                                            </th>
                                            <th>
                                                Speciality
                                            </th>
                                            <th>
                                                Room No.
                                            </th>
                                            <th>
                                                Update
                                            </th>

                                            <th>
                                                Delete
                                            </th>

                                        </tr>


                                        </thead>
                                        <tbody>
                                        @foreach($doctor as $doctors)

                                            <tr>
                                                <td class="py-1">
                                                    <img src="/doctors_images/{{$doctors->image}}" alt="image"/>
                                                </td>
                                                <td>
                                                    {{$doctors->name}}
                                                </td>
                                                <td>
                                                    {{$doctors->speciality}}
                                                </td>
                                                <td>
                                                    {{$doctors->room}}
                                                </td>
                                                <td>
                                                    <a href="{{url("update-doctor/$doctors->id")}}"><label
                                                            class="badge badge-success">Update</label></a>
                                                </td>
                                                <td>
                                                    <a onclick="return confirm('Are you sure you want to delete this ?')"
                                                        href="{{url("delete-doctor/$doctors->id")}}"><label
                                                            class="badge badge-danger">Delete</label></a>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:/admin/assets/partials/_footer.html -->

            @include('admin.footer')

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

@include('admin.script')

</body>

</html>
