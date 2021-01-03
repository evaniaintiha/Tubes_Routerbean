<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword'=>[
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' =>'{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword'=>[
			'required' => '{field} Harus Diisi',
			'matches' => '{field} Tidak Match Dengan Password'
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];


	public $login_errors = [
		'username' => [
			'required' =>'{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];

	public $buku = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $buku_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $bukupdate = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $bukupdate_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $fiksi = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $fiksi_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $fiksiupdate = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $fiksiupdate_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $edukasi = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $edukasi_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $edukasiupdate = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $edukasiupdate_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $biografi = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $biografi_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $biografiupdate = [
		'judul' => [
			'rules' => 'required|min_length[3]',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'pengarang' => [
			'rules' => 'required|min_length[3]',
		],
		'penerbit' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $biografiupdate_errors = [
		'judul' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'harga' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'stok' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'pengarang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'penerbit' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];
}