<!DOCTYPE html>
<html>
<head>
	<title>{{ __('Email') }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('source/bower_components/library/site/version4/css/bootstrap.min.css') }}" media="all">
</head>
<body>
	<div class="container">
		<h3>{{ __('Quý khách đã đặt hàng thành công') }}</h3>
		<h3>{{ __('Thông tin khách hàng') }}</h3>
		<p>{{ __('Khách hàng') }} : {{ $user->name }}</p>
		<p>{{ __('Email') }} : {{ $user->email }}</p>
		<p>{{ __('Số điện thoại') }} : {{ $user->phone }}</p>
		<p>{{ __('Địa chỉ') }} : {{ $user->address->address }}</p>
		<p>{{ __('Địa chỉ giao hàng') }} : {{ $address }}</p>
		<h3>{{ __('Hóa đơn mua hàng') }}</h3>
		<p>{{ __('Mã đơn hàng') }} : {{ $code }}</p>
		<p>{{ __('Chi tiết đơn đặt hàng') }}</p>
		<table border="1" cellpadding="0" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>{{ __('Tên sản phẩm') }}</th>
					<th>{{ __('Đơn giá') }}</th>
					<th>{{ __('Số lượng') }}</th>
					<th>{{ __('Thành tiền') }}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $row)
				<tr>
					<td align="center">{{ $row->name }}</td>
					<td>{{ number_format($row->price) }} đ</td>
					<td align="center">{{ $row->qty }}</td>
					<td>{{ number_format($row->subtotal) }} đ</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<th>{{ __('Tổng tiền') }}</th>
					<td colspan="3" align="right">{{ $total }} đ</td>
				</tr>
			</tfoot>
		</table>
	</div>
</body>
</html>
