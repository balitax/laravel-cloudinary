<?php

/**
 * created by Agus Cahyono.
 * on 10 november  2015 09:25 WIB
 * Selamat hari pahlwan 10 november. Code4Nation. Kita Pahlawan IT mari buat Indonesia merdeka dengan code
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequest;
use Flash;
use Illuminate\Support\Str;

class CloudinaryController extends Controller {

	/**
	 * Construct function of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		/**
		 * Set your APIKey Cloudinary
		 * cloudname
		 * api_key
		 * api_secret
		 */
		\Cloudinary::config(array(
			"cloud_name" => "cloudname",
			"api_key" => "",
			"api_secret" => "",
		));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('index');
	}

	/**
	 * Upload files to cloudinary
	 *
	 */
	public function upload(UploadRequest $request) {

		$judul_file = $request->get('judul');
		$gambar = $request->file('gambar');
		$nama_file = Str::slug($judul_file);

		$upload = \Cloudinary\Uploader::upload($gambar, array("public_id" => $nama_file));
		return redirect()->to($nama_file);
	}

	/**
	 * Display image after upload
	 * @var namafile
	 */
	public function hasil($namafile) {
		$data = array(
			'url_gambar' => \Cloudinary::cloudinary_url($namafile),
		);
		Flash::success('Gambar berhasil di upload');
		return view('hasil', $data);
	}

}
