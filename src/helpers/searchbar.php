<form action="?page=search" method="post">
	<div class="col-lg-8">
		<input type="hidden" name="action" value="search">
		<div class="input-group">
		    <input type="text" class="form-control" name="search" placeholder="Search for item">
		    <span class="input-group-btn">
		        <button class="btn btn-default" type="submit">Search!</button>
		    </span>
		</div><!-- /input-group -->
	</div>
	<div class="col-lg-4" style="padding-top: 6px;" data-toggle="modal" data-target="#advancedSearchModal">
		<a id="advanced-search-button">advanced search</a>
	</div>
</form>

<!-- Modal -->
<div class="modal fade" id="advancedSearchModal" tabindex="-1" role="dialog" aria-labelledby="advancedSearchModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="advancedSearchModal">Advance Search</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4"><h3><b>Search for</b></h3></div>
				</div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#item" aria-controls="item" role="tab" data-toggle="tab">Item</a></li>
						<li role="presentation"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">User</a></li>
					</ul>
				<div class="tab-content">
					<!-- item tab -->
					<div role="tabpanel" class="tab-pane active" id="item">
						<form action="?page=search" method="post">
							<input type="hidden" name="action" value="searchForItem">
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Item: </label>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" name="item" placeholder="all items">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Owner: </label>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" name="owner" placeholder="all owners">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Category: </label>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="category">
											<option value="">--Select Category--</option>
											<option value="Tools &amp; Gardening">Tools &amp; Gardening</option>
											<option value="Sports &amp; Outdoor">Sports &amp; Outdoor</option>
											<option value="Parties &amp; Events">Parties &amp; Events</option>
											<option value="Apparel &amp; Accessories">Apparel &amp; Accessories</option>
											<option value="Kids &amp; Babies">Kids &amp; Babies</option>
											<option value="Electronics">Electronics</option>
											<option value="Entertainment">Entertainment</option>
											<option value="Home &amp; Appliances">Home &amp; Appliances</option>
											<option value="Arts &amp; Crafts">Arts &amp; Crafts</option>
											<option value="Office &amp; Education">Office &amp; Education</option>
											<option value="Others">Others</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Price Range: </label>
								</div>
								<div class="col-md-2">
									<input type="text" class="form-control input-sm" name="price_start" placeholder="$0.00">
								</div>
								<div class="col-md-1">
									<span>to</span>
								</div>
								<div class="col-md-2">
									<input type="text" class="form-control input-sm" name="price_end" placeholder="$0.00">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Location: </label>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" name="location" placeholder="all locations">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Availability: </label>
								</div>
								<div class="col-md-6">
									<div class="input-daterange input-group" id="datepicker">
				                        <input type="text" class="input-sm form-control" name="date_start" />
				                        <span class="input-group-addon">to</span>
				                        <input type="text" class="input-sm form-control" name="date_end" />
				                    </div>
				                </div>
							</div>
							<div class="row">
								<div class="col-md-offset-3">
					                <div class="checkbox">
										<label><input type="checkbox" value="1" name="unavailable_item">include unavailable items</label>
									</div>
					            </div>
				            </div>
							<br>
							<div class="row">
								<div class="col-md-4"><h3><b>Order by</b></h3></div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Item: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="itemSort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="itemSort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Owner: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="ownerSort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="ownerSort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Category: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="categorySort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="categorySort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Price: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="priceSort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="priceSort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Location: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="locationSort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="locationSort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Item Popularity: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="popSort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="popSort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Search</button>
							</div>
						</form>
					</div>
					<!-- user tab -->
					<div role="tabpanel" class="tab-pane" id="user">
						<form action="?page=search" method="post">
							<input type="hidden" name="action" value="searchForUser">
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Owner: </label>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" name="owner" placeholder="all owners">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-offset-3 col-md-1">
									with
								</div>
								<div class="col-md-2">
									<input type="text" class="form-control input-sm" name="item_number" value="0">
								</div>
								<div class="col-md-3">
									or more items
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Reviews: </label>
								</div>
								<div class="col-md-9">
									with at least <input type="text" class="form-control input-sm" name="pos_review" value="0" style="width: 20%; display: inline;"> postive reviews
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									with at most <input type="text" class="form-control input-sm" name="neg_review" value="unlimited" style="width: 20%; display: inline;"> negative reviews
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4"><h3><b>Order by</b></h3></div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Owner: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="ownerSort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="ownerSort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label>Activity: </label>
								</div>
								<div class="col-md-6">
									<label class="radio-inline"><input type="radio" name="activitySort" value="ASC"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></label>
									<label class="radio-inline"><input type="radio" name="activitySort" value="DESC"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></label>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<script>
	$('#advanced-search-button').css('cursor', 'pointer');

	// for datepicker
	$('.input-daterange').datepicker({
    });
</script>


