<form class="forms-sample">

    <div class="form-group">
        <label for="exampleInputUsername1">Doctor Name</label>
        <input type="text" class="form-control" id="exampleInputUsername1"
               name="name" placeholder="Name">
    </div>


    <div class="form-group">
        <label for="exampleInputUsername1">Mobile</label>
        <input type="text" class="form-control" id="exampleInputUsername1"
               name="phone" placeholder="Mobile Number">
    </div>

    <div class="form-group">
        <label for="exampleSelectGender">Speciality</label>
        <select class="form-control" id="exampleSelectGender" name="speciality">
            <option>--Select--</option>
            <option value="skin">Skin</option>
            <option value="heart">Heart</option>
            <option value="eye">Eye</option>
            <option value="nose">Nose</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputUsername1">Room No.</label>
        <input type="text" class="form-control" id="exampleInputUsername1"
               name="room" placeholder="Room Number">
    </div>


    <div class="form-group">
        <label>File upload</label>
        <input type="file" name="img[]" class="file-upload-default">
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
