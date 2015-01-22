<!DOCTYPE html>
<html>
<head>
  <title>Registration | House</title>
</head>
<body>
  <div class="col-sm-6 col-md-6">
      <div class="block-flat">
        <div class="header">							
          <h3>Registration | Houses </h3>
        </div>
        <div class="content">
        <?php echo form_open("houses/registerhouse"); ?> 
            <div class="form-group">
              <label>House Name: </label> 
              <input type="text" placeholder="Enter house name" class="form-control">
            </div>

            <div class="form-group">
              <label>House No : </label> 
              <input type="text" name="house_no" placeholder="Enter house no" class="form-control">
            </div>

             <div class="form-group">
              <label>Select Estate</label>
              <select placeholder="Enter the building" name="estate" class="form-control">
                <optgroup>
                  <option value="0">--Select Estate--</option>
                  <option value="1">Test selection</option>
                  <option value="2">Test selection two</option>
                  <option value="3">Test selection three</option>
                </optgroup>
              </select>
            </div>

            <div class="form-group">
              <label>Select Building</label>
              <select placeholder="Enter the building" name="building" class="form-control">
                <optgroup>
                  <option value="0">--Select Building--</option>
                  <option value="1">Test selection</option>
                  <option value="2">Test selection two</option>
                  <option value="3">Test selection three</option>
                </optgroup>
              </select>
            </div>

            <div class="form-group">
              <label>State: </label> 
              <input type="text" name="state" placeholder="Enter house state" class="form-control">
            </div>

            <div class="checkbox">
              <button class="btn btn-primary" type="submit">Submit</button>
              <button class="btn btn-default">Cancel</button>
            <?php echo form_close(); ?>
        </div>
      </div>				
  </div>

</body>
</html>
