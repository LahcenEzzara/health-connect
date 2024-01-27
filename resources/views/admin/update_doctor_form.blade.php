@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Doctor updated successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<form class="forms-sample"
      action="{{ url("edit-doctor/$doctor->id") }}" method="post" enctype="multipart/form-data">

    @csrf

    <div class="form-group">
        <label for="exampleInputUsername1">Doctor Name</label>
        <input type="text" class="form-control" id="exampleInputUsername1"
               name="name" placeholder="Name" value="{{$doctor->name}}">
    </div>


    <div class="form-group">
        <label for="exampleInputUsername1">Mobile</label>
        <input type="text" class="form-control" id="exampleInputUsername1"
               name="phone" placeholder="Mobile Number" value="{{$doctor->phone}}">
    </div>

    <div class="form-group">
        <label for="exampleSelectGender">Speciality</label>
        <select class="form-control" id="exampleSelectGender" name="speciality" >
            <option>--Select--</option>
            <option @if($doctor->speciality == "skin") selected @endif value="skin">Skin</option>
            <option @if($doctor->speciality == "heart") selected @endif value="heart">Heart</option>
            <option @if($doctor->speciality == "eye") selected @endif value="eye">Eye</option>
            <option @if($doctor->speciality == "nose") selected @endif value="nose">Nose</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Room No.</label>
        <input type="text" class="form-control" id="exampleInputUsername1"
               name="room" placeholder="Room Number" value="{{$doctor->room}}" >
    </div>


    <div class="form-group">
        <label>File upload</label>
        <input type="file" name="file" class="file-upload-default" >
        <div class="input-group">
            <input type="text" class="form-control file-upload-info" disabled
                   placeholder="Upload Image" name="file">
            <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                            type="button">Upload</button>
                                                </span>
        </div>
    </div>


    <button type="submit" class="btn btn-primary me-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
</form>
