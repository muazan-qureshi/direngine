@include('header')

<div class="container">
<table class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Code</th>
		<th>Sale Price</th>
		<th>Buy Price</th>
		<th>Stock</th>
		<th>Category</th>
		<th>Image</th>
	</tr>
	@foreach($list as $pro)
	<tr>
		<td>{{$pro->pid}}</td>
		<td>{{$pro->pname}}</td>
		<td>{{$pro->pcode}}</td>
		<td>{{$pro->psale}}</td>
		<td>{{$pro->pbuy}}</td>
		<td>{{$pro->pstock}}</td>
		<td>{{$pro->pcategory}}</td>
		<td><img src="storage/app/images/{{$pro->pimg}}" style="width: 50px;height: 50px;"></td>
	</tr>
	@endforeach
	
</table>
</div>

@include('footer')