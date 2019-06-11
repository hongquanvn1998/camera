@extends('admin.base')

@section('style')
@endsection

@section('content')
	<form action="{{route('admin.hanldeAddProduct')}}" method="POST" enctype="multipart/form-data" class="pt-5">
		@csrf
		<div class="row">
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
		</div>
		<div class="form-row">
			<div class="col-12">
				  <div class="form-row">
					    <div class="form-group col-md-12 col-12">
					      <h4 class="pl-4 text-danger">Name</h4>
					      <input type="text" class="form-control " id="nameProdcuts" placeholder="name" name="nameProdcuts">
					    </div>
					    <div class="form-group col-md-9 col-12 float-left">
					    	<h4 class="pl-4 text-danger">Categories</h4>
					    	@foreach($categories as $key => $item)
					    		<div class="col-12 col-sm-12 sol-md-3 float-left
					    		">
							      	<label for="{{ $item['name_categories'] }}">{{ $item['name_categories'] }}</label>
							      	<input type="radio" class="float-right mr-5" id="{{ $item['name_categories'] }}" name="cate" value="{{ $item['id'] }}" >
							    </div>
						    @endforeach
					      	
					    </div>

					    <div class="form-group col-md-3 col-12 float-left">
						   <h4 class="pl-4 text-danger">Brand</h4>
						    <select class="form-control" name="brands">
							      		@foreach($brand as $key =>$item)
									    	<option value="{{ $item['id'] }}">{{ $item['name_brand'] }}</option>
									    @endforeach
							</select>
						 </div>
				  <div class="form-group col-md-4 col-12 float-left">
				  	<h4 class="pl-4 text-danger">Color</h4>
				  	<p class="text-danger">(Lưu ý : Mỗi màu cách nhau 1 dấu phẩy ",")</p>
				  	<input type="text" name="color">
				  </div>
				  

				  <div class="form-group col-md-8 col-12">
				  	<h4 class="pl-4 text-danger">Size</h4>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="XS" name="size[]" value="XS" multiple>
					  	<label for="XS">XS</label>
					  	<br>

					  	<input type="checkbox" id="S" name="size[]" value='S' multiple> 
					  	<label for="S">S</label>
						<br>
					  	<input type="checkbox" id="M" name="size[]" value='M' multiple>
					  	<label for="M">M</label>
					  	<br>

					  	<input type="checkbox" id="L" name="size[]" value='L' multiple>
					  	<label for="L">L</label>
					  	<br>

					  	<input type="checkbox" id="XL" name="size[]" value='XL' multiple>
					  	<label for="XL">XL</label>
					  	<br>

					  	<input type="checkbox" id="XXL" name="size[]" value='XXL' multiple>
					  	<label for="XXL">XXL</label>
				  	</div>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="25" name="size[]" value='25' multiple>
					  	<label for="25">25</label>
					  	<br>

					  	<input type="checkbox" id="26" name="size[]" value='26' multiple>
					  	<label for="26">26</label>
						<br>
					  	<input type="checkbox" id="27" name="size[]" value='27' multiple>
					  	<label for="27">27</label>
					  	<br>

					  	<input type="checkbox" id="28" name="size[]" value='28' multiple>
					  	<label for="28">28</label>
					  	<br>

					  	<input type="checkbox" id="29" name="size[]" value='29' multiple>
					  	<label for="29">29</label>
					  	<br>

					  	<input type="checkbox" id="30" name="size[]" value='30' multiple> 
					  	<label for="30">30</label>
				  	</div>
				  	<div class="col-3 pl-5 float-left">
					  	<input type="checkbox" id="31" name="size[]" value='31' multiple>
					  	<label for="31">31</label>
					  	<br>

					  	<input type="checkbox" id="32" name="size[]" value='32' multiple>
					  	<label for="32">32</label>
						<br>
					  	<input type="checkbox" id="33" name="size[]" value='33' multiple>
					  	<label for="33">33</label>
					  	<br>
						  	<input type="checkbox" id="freeSize" name="size[]" value='freeSize' multiple>
						  	<label for="freeSize">freeSize</label>
					  	
				  	</div>
				  </div>

				  

				    <div class="form-group col-md-4 col-12">
				      <h4 class="pl-4 text-danger">Price</h4>
				      <input type="text" class="form-control" id="Price" name="price">
				    </div>


				    <div class="form-group col-md-4 col-12">
				      <h4 class="pl-4 text-danger">Quantity</h4>
				      <input type="text" class="form-control" id="Quality" name="qty">
				    </div>


				    <div class="form-group col-md-4 col-12">
				      <h4 class="pl-4 text-danger">Sale Off</h4>
				      <input type="text" class="form-control" id="sale" name="saleOff">
				    </div>

					
					<div class="form-group col-md-6 col-12">
					    <h4 class="pl-4 text-danger">Image</h4>

	   					 <input type="file" class="form-control-file" id="image" name="images[]" multiple="multiple">

				  	</div>
					<div class="form-group">
						<h4 class="pl-4 text-danger">Description</h4>

						<textarea class="pl-5" name="description"></textarea>
					</div>
				    <div class="form-group col-md-6 pl-5 col-12">
				      	<h4 class="pl-4 text-danger">Status</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="status" id="status_1" value="1">
						  <label class="form-check-label" for="status_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="status" id="status_2" value="0" >
							  <label class="form-check-label" for="status_2">
							    0
							  </label>
						</div>
				    </div>
				  

				    <div class="form-group col-md-6 pl-5 col-12 ">
				      	<h4 class="text-danger">Highlight</h4>
				      	<div class="form-check">
						  <input class="form-check-input" type="radio" name="highlight" id="highlight_1" value="1">
						  <label class="form-check-label" for="highlight_1">
						    1
						  </label>
						</div>


						<div class="form-check">
							  <input class="form-check-input" type="radio" name="highlight" id="highlight_2" value="0">
							  <label class="form-check-label" for="highlight_2">
							    0
							  </label>
						</div>
				    </div>
				</div>
			<div class="col-12 ">
				<button type="submit" class="btn btn-danger btn-add btn-block">ADD</button>
			</div>
	</div>
		</form>
@endsection

@section('script')

@endsection