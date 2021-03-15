@include('header');


<form class="form row col-11" method="post" enctype="multipart/form-data" action="submit">
	@csrf
	<div class="form-group col-md-6">
		<label>Product Name</label>
		<input type="text" name="name" class="form-control" placeholder="Enter Product Name">
	</div>
	<div class="form-group col-md-6">
		<label>Product Code</label>
		<input type="text" name="code" class="form-control" placeholder="Enter Product Code">
	</div>
	<div class="form-group col-md-6">
		<label>Buy Price</label>
		<input type="text" name="buy" class="form-control" placeholder="Buy Price">
	</div>
	<div class="form-group col-md-6">
		<label>Sale Price</label>
		<input type="text" name="sale" class="form-control" placeholder="Sale Price">
	</div>
	<div class="form-group col-md-6">
		<label>Category</label>
		<input type="text" name="category" class="form-control" placeholder="Category">
	</div>
	<div class="form-group col-md-6">
		<label>Product Stock</label>
		<input type="text" name="stock" class="form-control" placeholder="Stock">
	</div>
	<div class="form-group col-md-12">
		<label>Product Image</label>
		<input type="file" name="image" class="form-control" placeholder="Enter Product Name">
	</div>
	<div class="form-group col-md-12">
		<label>Product Description</label>
		<textarea type="text" name="desc" class="form-control" placeholder="Enter Product Description"></textarea>
	</div>
	<div class="form-group">
		<button class="btn ml-2 btn-primary" type="submit">
			Add Product
		</button>
	</div>	
</form>


@include('footer');