<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/detail.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container-fuild h-100">
		<div class="tttt">

			<div class="row pt-4">
				<div class="col-6">
					<h6 class="pl-4">Thanh Bình Shop</h6>
					<h6 class="pl-4">Địa chỉ : 141 Chiến Thắng - Hà Đông - Hà Nội</h6>
					<h6 class="pl-4">Điện thoại : 0972365339</h6>
				</div>

				<div class="col-6">
					<h6 class="float-right pr-5 pt-3">Ngày: {{$date}}</h6>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<h2 class="text-center">Thông tin đơn hàng</h2>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<h6 class="pl-4">Người đặt hàng : {{$name}}</h6>
					<h6 class="pl-4">Địa chỉ : {{$address}}</h6>
					<h6 class="pl-4">Số điện thoại : {{$phone}}</h6>
				</div>
			</div>
			<div class="row pt-5">
				<table class="tab">
					<thead>
						<tr>
							<td>Tên sản phẩm</td>
							<td>Số lượng</td>
							<td>Size</td>
							<td>Color</td>
							<td>Giá tiền</td>	
							
						</tr>
					</thead>
					<tbody>
						@foreach($product as $k =>$item)
						<tr>
							<td>{{$item['name']}}</td>
							<td>{{$item['qty']}}</td>
							<td>{{$item['options']['size']}}</td>
							<td>{{$item['options']['color']}}</td>
							<td>
								{{ 
									(int)($item['price'] - ($item['price'] * ( $item['options']['sale'] / 100 ) ) ) 
								}}.000 VNĐ
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div class="row">
				<div class="col ">
					<h6 class="pt-5 pl-4">Phương thức thanh toán : Tiền mặt</h6>
				</div>
			</div>
		</div>
	</div>
</body>
</html>