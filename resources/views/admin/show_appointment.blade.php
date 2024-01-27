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
                                <h4 class="card-title">Appointments</h4>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Doctor Name</th>
                                            <th>Date</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Approve</th>
                                            <th>Cancel</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($appointment as $appointments)
                                        <tr>
                                            <td>{{$appointments->name}}</td>
                                            <td>{{$appointments->email}}</td>
                                            <td>{{$appointments->phone}}</td>
                                            <td>{{$appointments->doctor}}</td>
                                            <td>{{$appointments->date}}</td>
                                            <td>{{$appointments->message}}</td>
                                            <td><label class="badge badge-danger">{{$appointments->status}}</label></td>
                                            <td><a href="{{url("approve-appointment/$appointments->id")}}"><label class="badge badge-success">Approve</label></a></td>
                                            <td><a href="{{url("cancel-appointment/$appointments->id")}}"><label class="badge badge-danger">Cancel</label></a></td>
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
