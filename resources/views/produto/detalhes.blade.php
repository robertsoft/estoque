@extends('layout.principal')
@section('conteudo')
	<?php foreach ($respostas as $item): ?>
	<h1>Detalhes do produto: {{ $item->nome }} </h1>			
	<ul>
		<li><b>Valor:</b> R$ {{ $item->valor }} </li>
		<li><b>Descrição:</b> {{ $item->descricao }} </li>
		<li><b>Quantidade em estoque:</b> {{ $item->quantidade }} </li>
	</ul>
	<?php endforeach ?>
@stop