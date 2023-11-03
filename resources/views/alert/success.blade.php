@if ($session('status'))
<div class="alert alern-success alern-block">
<button class="close" type="button" data-dismiss="alert">X</button>
	<strong>{{ $session('status') }}</strong>
	@endfoeach
</div>
@endif