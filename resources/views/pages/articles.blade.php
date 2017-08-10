@extends('layouts.page')

@section('page-content')
	<section class="section section_strip">
		<div class="container">
			<h4 class="is-marginless">{{ $title }}</h4>
		</div>
	</section>
	<section class="section">
		<div class="articles">
			<div class="container">
				<div class="row">
					@foreach($articles as $article)
						@if($loop->index !== 0 && $loop->index % 2 == 0)
							</div><div class="row">
						@endif
						<div class="col-xs-6">
							<div class="article-item">
								<div class="article-item__wrapper {{ isset($article->picture) ? 'article-item__wrapper_imageable' : '' }}" style="background-image: url('{{ $article->picture }}');">
									<div class="article-item__content">
										<h5 class="article-item__title">
											<a href="{{ route('article', ['id' => $article->id]) }}">
												{{ $article->title }}
											</a>
										</h5>
										<p class="article-item__desc">{{ $article->desc }}</p>
									</div>
									<a class="article-item__link" href="{{ route('article', ['id' => $article->id]) }}">
										Подробнее &rarr;
									</a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="articles__paginate">
					<div class="row">
						<div class="col-xs-6 has-text-left">
							@if($articles->previousPageUrl())
								<a class="button is-outlined" href="{{ $articles->previousPageUrl() }}">
									&larr; Предыдущая
								</a>
							@endif
						</div>
						<div class="col-xs-6 has-text-right">
							@if($articles->nextPageUrl())
								<a class="button is-outlined" href="{{ $articles->nextPageUrl() }}">
									Следующая &rarr;
								</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection