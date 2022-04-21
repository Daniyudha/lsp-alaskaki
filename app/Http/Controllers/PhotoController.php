<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    public function index()
    {
        $data = [
					'title' => 'List Foto',
					'photos' => Photo::all()
				];

				return view('admin.gallery.index', $data);
    }

    public function create()
    {
			$data = [
				'title' => 'Tambahkan Foto'
			];

			return view('admin.gallery.add', $data);
    }

    public function store(Request $request)
    {
			$insert = Photo::create([
				'title' => ucwords($request->title),
				'type' => $request->type,
				'descriptions' => ucfirst($request->descriptions) ?? NULL,
				'image' => $this->imageRequestCreate($request)
			]);

			if($insert->id > 0){
				return redirect()->back()->with('message',
					sweetAlert('Success!','Berhasil menambahkan Foto.','success')
				);
			} else {
				return redirect()->back()->with('message',
					sweetAlert('Error!','Gagal menambahkan Foto.','error')
				);
			}
    }

    public function show($id)
    {
        //
    }

    public function edit(Photo $gallery)
    {
			$data = [
				'title' => 'Edit Foto '.$gallery->title,
				'photo' => $gallery
			];

			return view('admin.gallery.edit', $data);
    }

    public function update(Request $request, Photo $gallery)
    {
			$update = Photo::query()->where('id', $gallery->id)->update([
				'title' => ucwords($request->title),
				'type' => $request->type,
				'descriptions' => ucfirst($request->descriptions) ?? NULL,
				'image' => $this->imageRequestUpdate($request, $gallery)
			]);

			if($update){
				return redirect()->back()->with('message',
					sweetAlert('Success!','Berhasil mengupdate Foto.','success')
				);
			} else {
				return redirect()->back()->with('message',
					sweetAlert('Error!','Gagal mengupdate Foto.','error')
				);
			}
    }

    public function destroy(Photo $gallery)
    {
			$gallery->delete();
			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil menghapus Foto','success'));
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
						->storeAs('public/gallery/', $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension);
				} catch (\Exception $exception) {
					return redirect()->back()->with('message',
						sweetAlert('Error!','Failed Upload Image Gallery '.$exception->getMessage(),'error')
					);
				}
			} else {
				$image = NULL;
			}
			return $image;
		}

		private function imageRequestUpdate($request, $gallery) {
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
						->storeAs('public/gallery/', $time.'-'.Str::slug(strtolower($fileName)).'.'.$guessExtension);
				} catch (\Exception $exception) {
					return redirect()->back()->with('message',
						sweetAlert('Error!','Failed Update Image Gallery '.$exception->getMessage(),'error')
					);
				}
			} else {
				$image = $gallery->image;
			}
			return $image;
		}
}
