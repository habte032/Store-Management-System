
<!-- Edit -->

<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Approve/Reject Request</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="approve_reject.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Status:</label>
					</div>
					<div class="col-sm-10">
						<select name="status" id="status"
                        style="
                                border: none;
                                padding: 5px 10px;
                                box-shadow: 2px 5px 30px rgba(0,0,0,0.3);
                                background: transparent;
                                outline: none;
                                color: rgb(35, 135, 236);
                                font-size: 20px;
                                font-family: Arial, Helvetica, sans-serif;
                              " >
							<option value="Accepted">Accept</option>
							<option value="Rejected">Reject</option>
						</select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Confirm</a>
			</form>
            </div>

        </div>
    </div>
</div>

