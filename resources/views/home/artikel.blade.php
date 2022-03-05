@extends('layouts.main_home')

@section('outCSS')

@endSection()

@section('contents')

    <div class="container">
        <div class="row pt-5">
            <div class="col-12">
                <h3 class="text-uppercase border-bottom mb-4">Artikel</h3>
            </div>
        </div>
        <div class="row">
          @foreach($articles as $article)
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3 d-flex align-items-stretch">
              <div class="card">
                <img src="{{ asset('storage/news_image/'.$article->image) }}" class="card-img-top" alt="Gambar Artikel {{ $article->title }}">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title"><a target="_blank" href="{{ route('home.article-detail', ['slug' => $article->slug]) }}"
                                            style="text-decoration: none; color: black;">{{ $article->title }}</a></h5>
                  <small data-toggle="tooltip" data-placement="auto" title="{{ \Carbon\Carbon::parse($article->created_at)->format('d-m-Y H:i') }}"
                         class="text-muted mb-2">{{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}</small>
                  <p class="card-text mb-4">{{ $article->content_thumbnail }}</p>
                  <a href="{{ route('home.article-detail', ['slug' => $article->slug]) }}" class="btn btn-primary mt-auto align-self-start">Selengkapnya</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center">
          {!! $articles->links() !!}
        </div>
    </div>

@endSection()

@section('outJS')

@endSection()