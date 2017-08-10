@extends('layouts.page')

@section('page-content')
	<section class="section section_strip">
		<div class="container">
			<h4 class="is-marginless">{{ $article->title }}</h4>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="article-content">
				{!! $article->content !!}
			</div>
		</div>
	</section>
@endsection