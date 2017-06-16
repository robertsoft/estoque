@extends('principal')
@section('conteudo')
	@if(empty($produtos))
		<div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
	@else
		<h1>Listagem de produtos</h1>
		<table  class="table table-striped table-bordered table-hover table-responsive">
			<tr>
				<td>ID</td>
				<td>NOME</td>
				<td>VALOR</td>
				<td>DESCRICAO</td>
				<td>QUANTIDADE</td>
				<td>CRIADO</td>
				<td>ALTERADO</td>
				<td></td>
			</tr>
			@foreach ($produtos as $produto):
				<tr class="{{ $produto->quantidade <= 1 ? 'danger' : ''}} ">
					@foreach ($produto as $campo):
						<td> {{ $campo }} </td>
					@endforeach
						<td>
							<a href="/produtos/mostra/{{ $produto->id }}">
								<button type="button" class="btn btn-default" aria-label="Detalhamento">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</button>
							</a>
						</td>
				</tr>
					@endforeach
		</table>
	@endif
@stop

