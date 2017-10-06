<!DOCTYPE html>
<html>
<head>
	<title>Nuevo pedido</title>
</head>
<body>
	<p>Se ha realizado un nuevo pedido!</p>
	<p>Estos son los datos del cliente que realizó el pedido:</p>
	<ul>
		<li>
			<strong>Nombre:</strong>
			{{ $user->name }}
		</li>
		<li>
			<strong>Username:</strong>
			{{ $user->username }}
		</li>
		<li>
			<strong>E-mail:</strong>
			{{ $user->email }}
		</li>
		<li>
			<strong>Teléfono:</strong>
			{{ $user->phone }}
		</li>
		<li>
			<strong>Dirección:</strong>
			{{ $user->address }}
		</li>
		<li>
			<strong>Fecha del pedido:</strong>
			{{ $cart->order_date }}
		</li>
	</ul>

	<p>Y estos son los detalles del pedido:</p>
	<ul>
		@foreach ($cart->details as $detail)
		<li>
			{{ $detail->product->name }} x{{ $detail->quantity }} 
			($ {{ $detail->quantity * $detail->product->price }})
		</li>
		@endforeach
	</ul>
	<p>
		<strong>Importe que el cliente debe pagar:</strong> {{ $cart->total }}
	</p>
	<hr>
	<p>
		<a href="{{ url('/admin/orders/'.$cart->id) }}">Haz clic aquí</a>
		para ver más información sobre este pedido.
	</p>
</body>
</html>