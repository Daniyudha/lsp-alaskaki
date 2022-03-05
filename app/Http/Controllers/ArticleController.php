<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{

    public function index()
    {
        $data = [
					'title' => 'List Artikel',
					'articles' => Article::all()
				];

				return view('admin.article.index', $data);
    }

    public function create()
    {
        $data = [
					'title' => 'Tambahkan Artikel'
				];

				return view('admin.article.add', $data);
    }

    public function store(CreateArticleRequest $request)
    {
        $slug = Str::slug($request->title.'-'.Str::random(4));

				$insert = Article::create([
					'title' => ucwords($request->title),
					'slug' => strtolower($slug),
					'content_thumbnail' => ucfirst($request->content_thumbnail),
					'content_full' => $request->content_full,
					'image' => $this->imageRequestCreate($request)
				]);

				if($insert->id > 0){
					return redirect()->back()->with('message',
						sweetAlert('Success!','Berhasil menambahkan Artikel.','success')
					);
				} else {
					return redirect()->back()->with('message',
						sweetAlert('Error!','Gagal menambahkan Artikel.','error')
					);
				}
    }

    public function show($id)
    {
        //
    }

    public function edit(Article $news)
    {
			$data = [
				'title' => 'Edit Artikel '.$news->title,
				'article' => $news
			];

			return view('admin.article.edit', $data);
    }

    public function update(UpdateArticleRequest $request, Article $news)
    {
        $news->slug = strtolower(Str::slug($request->title.'-'.Str::random(4)));
        $news->title = ucwords($request->title);
        $news->content_thumbnail = ucfirst($request->content_thumbnail);
        $news->content_full = $request->content_full;
        $news->image = $this->imageRequestUpdate($request, $news);
				$news->save();

			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil mengupdate Artikel.','success')
			);
    }

    public function destroy(Article $news)
    {
			$news->delete();
			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil menghapus Artikel','success'));
    }

		private function imageRequestCreate($request) {
			if ($request->hasFile('image')) {
				try {
					$guessExtension = strtolower($request->file('image')->guessExtension());
					$fileName = pathinfo(
						$request->file('image')
							->getClientOriginalName(), PATHINFO_FILENAME
					);
					$time = time();
					$image = $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension;

					$request
						->file('image')
						->storeAs('public/news_image/', $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension);
				} catch (\Exception $exception) {
					return redirect()->back()->with('message',
						sweetAlert('Error!','Failed Upload Image Article '.$exception->getMessage(),'error')
					);
				}
			} else {
				$image = NULL;
			}
			return $image;
		}

		private function imageRequestUpdate($request, $news) {
			if ($request->hasFile('image')) {
				try {
					$guessExtension = strtolower($request->file('image')->guessExtension());
					$fileName = pathinfo(
						$request->file('image')
							->getClientOriginalName(), PATHINFO_FILENAME
					);
					$time = time();
					$image = $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension;

					$request
						->file('image')
						->storeAs('public/news_image/', $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension);
				} catch (\Exception $exception) {
					return redirect()->back()->with('message',
						sweetAlert('Error!','Failed Update Image Article '.$exception->getMessage(),'error')
					);
				}
			} else {
				$image = $news->image;
			}
			return $image;
		}
}
