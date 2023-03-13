<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Update Item</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="itemname" value="<?php echo $row['Name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item Code:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="idno" value="<?php echo $row['Code']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category:</label>
					</div>
					<div class="col-sm-10">
						<select name="category" id="category">
							<option value="<?php echo $row['Category']; ?>"><?php echo $row['Category']; ?></option>
							<option value="Drill">Drill</option>
							<option value="Grinder">Grinder</option>
							<option value="Screwdriver">Screwdriver</option>
							<option value="Screwdriver">Welding Machine</option>
							<option value="Screwdriver">Morsa</option>
							<option value="Hammer">Hammer</option> 
							<option value="Pinsa">Pinsa</option> 
							<option value="Furniture">Furniture</option> 
							<option value="Other">Other</option> 
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Registered Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="date" value="<?php echo $row['Date']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Average Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="price" value="<?php echo $row['Unit_Price']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Quantity:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="number" value="<?php echo $row['Quantity']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Type:</label>
					</div>
					<div class="col-sm-10">
						 <input type="radio" name="kind" value="Fixed" <?php if($row['Type']=='Fixed'){echo "checked";}?>>Fixed
       					 <input type="radio" name="kind" value="Temporary" <?php if($row['Type']=='Temporary'){echo "checked";}?>>Temporary 
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Item</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['Name'].' '.$row['Code']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>