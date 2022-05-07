<?php

namespace App\Http\Controllers;

use App\Models\PhotoType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhotoTypeController extends Controller
{

    public function index()
    {
			$data = [
				'title' => 'Gallery Kategori',
				'types' => PhotoType::all()
			];

			return view('admin.gallery.category-index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
			$name = $request->name;
			$insert = PhotoType::create([
				'name' => ucwords($name),
				'slug' => Str::slug($name)
			]);

			if($insert->id > 0){
				return redirect()->back()->with('message',
					sweetAlert('Success!','Berhasil menambahkan Kategori Foto.','success')
				);
			} else {
				return redirect()->back()->with('message',
					sweetAlert('Error!','Gagal menambahkan Kategori Foto.','error')
				);
			}
    }

    public function show($id)
    {
        //
    }

    public function edit( PhotoType $photo_type)
    {
			$data = [
				'title' => 'Edit Kategori '.$photo_type->name,
				'type' => $photo_type
			];

			return view('admin.gallery.category-edit', $data);
    }

    public function update(Request $request, PhotoType $photo_type)
    {
			$name = $request->name;
			$photo_type->name = ucwords($name);
			$photo_type->slug = Str::slug($name);
			$photo_type->save();

			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil mengupdate Kategori Foto.','success')
			);
    }

    public function destroy(PhotoType $photo_type)
    {
			$photo_type->delete();
			return redirect()->back()->with('message',
				sweetAlert('Success!','Berhasil menghapus Kategori Foto','success'));
    }
}
