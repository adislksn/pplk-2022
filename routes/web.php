<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\guestController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\SuperAdmin;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Himpunan;
use App\Http\Middleware\Ukm;
use App\Http\Middleware\Kedisiplinan;
use App\Http\Middleware\DapMen;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBegalinController;
use App\Http\Controllers\Admin\AdminBookletController;
use App\Http\Controllers\Admin\AdminFunfactController;
use App\Http\Controllers\Admin\AdminHimpunanController;
use App\Http\Controllers\Admin\AdminKamusGaulController;
use App\Http\Controllers\Admin\AdminKeluhanController;
use App\Http\Controllers\Admin\AdminProdiController;
use App\Http\Controllers\Admin\AdminUkmController;
use App\Http\Controllers\Admin\AdminUptController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\DapmenUserController;
use App\Http\Controllers\Admin\UserProdiController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\Client\ClientBegalinController;
use App\Http\Controllers\Client\ClientBiodataController;
use App\Http\Controllers\Client\ClientFunfactController;
use App\Http\Controllers\Client\ClientGameTebakBangunanController;
use App\Http\Controllers\Client\ClientJurusanController;
use App\Http\Controllers\Client\ClientHimpunanController;
use App\Http\Controllers\Client\ClientKabinetController;
use App\Http\Controllers\Client\ClientKamusgaulController;
use App\Http\Controllers\Client\ClientKeluhanController;
use App\Http\Controllers\Client\ClientKodeGameController;
use App\Http\Controllers\Client\ClientProdiController;
use App\Http\Controllers\Client\ClientScannerController;
use App\Http\Controllers\Client\ClientUkmController;
use App\Http\Controllers\Client\ClientUptController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// REGISTRASI
// Route::get('/registrasi', [ClientBiodataController::class, 'ViewRegister'])->name('ViewRegister');
// Route::post('/registrasi/{create}', [ClientBiodataController::class, 'store'])->name('regist_staff');

// LOGIN
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('loginPost');
Route::get('/guest', [guestController::class, 'login'])->name('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// CMS SUPER ADMIN
Route::middleware([SuperAdmin::class])->name('super.')->prefix('super')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('index');
  Route::resource('begalin', AdminBegalinController::class);
  Route::resource('funfact', AdminFunfactController::class);
  Route::resource('booklet', AdminBookletController::class);
  Route::resource('himpunan', AdminHimpunanController::class);
  Route::resource('kamusgaul', AdminKamusGaulController::class);
  Route::resource('prodi', AdminProdiController::class);
  Route::resource('ukm', AdminUkmController::class);
  Route::resource('user', AdminUserController::class);
  Route::resource('upt', AdminUptController::class);
  Route::resource('keluhan', AdminKeluhanController::class);
  Route::resource('dapmenUser', DapmenUserController::class);
  Route::resource('userProdi', UserProdiController::class);
  Route::get('/detail-presensi/{id}',[DapmenUserController::class,'detailPresensi'])->name('presensiUser');
  Route::get('/polling-ukm/{id}',[AdminUkmController::class,'lihatPolling'])->name('pollingUkm');

  // SCANNER
  Route::get('/scanner', [ClientScannerController::class, 'index'])->name('scanner');
  Route::get('/polling', [ClientScannerController::class, 'indexPolling'])->name('polling');
  Route::get('/presensiMaba', [ClientScannerController::class, 'indexMaba'])->name('indexMaba');
  Route::post('/presensi/{id}', [ClientScannerController::class, 'presensi']);
  Route::post('/polling/{id}', [ClientScannerController::class, 'polling']);
  Route::post('/presensiMaba/{id}', [ClientScannerController::class, 'presensiMaba']);
});

// CMS ADMIN
Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('index');
  Route::resource('begalin', AdminBegalinController::class);
  Route::resource('funfact', AdminFunfactController::class);
  Route::resource('booklet', AdminBookletController::class);
  Route::resource('himpunan', AdminHimpunanController::class);
  Route::resource('kamusgaul', AdminKamusGaulController::class);
  Route::resource('prodi', AdminProdiController::class);
  Route::resource('ukm', AdminUkmController::class);
  Route::resource('user', AdminUserController::class);
  Route::resource('upt', AdminUptController::class);
  Route::resource('keluhan', AdminKeluhanController::class);
  Route::resource('dapmenUser', DapmenUserController::class);
  Route::get('/detail-presensi/{id}',[DapmenUserController::class,'detailPresensi'])->name('presensiUser');
  Route::get('/polling-ukm/{id}',[AdminUkmController::class,'lihatPolling'])->name('pollingUkm');
});

// CMS HIMPUNAN
Route::middleware([Himpunan::class])->name('himpunans.')->prefix('himpunans')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('index');
  Route::resource('himpunan', AdminHimpunanController::class);
  Route::resource('prodi', AdminProdiController::class);
});

// CMS UKM
Route::middleware([Ukm::class])->name('ukms.')->prefix('ukms')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('index');
  Route::resource('ukm', AdminUkmController::class);
  Route::get('/polling', [ClientScannerController::class, 'indexPolling'])->name('polling');
  Route::post('/polling/{id}', [ClientScannerController::class, 'polling']);
  Route::get('/polling-ukm/{id}',[AdminUkmController::class,'lihatPolling'])->name('pollingUkm');
});

// CMS KEDISIPLISAN
Route::middleware([Kedisiplinan::class])->name('kedis.')->prefix('kedis')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('index');
  Route::resource('keluhan', AdminKeluhanController::class);

  // SCANNER STAFF
  Route::get('/scanner', [ClientScannerController::class, 'index'])->name('scanner');
  Route::post('/presensi/{id}', [ClientScannerController::class, 'presensi']);
});

// CMS DAPMEN
Route::middleware([DapMen::class])->name('dapmen.')->prefix('dapmen')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('index');
  Route::resource('dapmenUser', DapmenUserController::class);
  Route::get('/detail-presensi/{id}',[DapmenUserController::class,'detailPresensi'])->name('presensiUser');

  // SCANNER MABA
  Route::get('/presensiMaba', [ClientScannerController::class, 'indexMaba'])->name('indexMaba');
  Route::post('/presensiMaba/{id}', [ClientScannerController::class, 'presensiMaba']);
});

// // CLIENT
Route::middleware(['auth'])->group(function () {

  // UTAMA
  Route::get('/', [ClientBegalinController::class, 'index']);
  Route::get('/beranda', [ClientBegalinController::class, 'index'])->name('beranda');
  Route::get('/upt', [ClientUptController::class, 'index'])->name('upt');
  Route::get('/kabinet', [ClientKabinetController::class, 'index'])->name('kabinet');
  Route::get('/senat', function () { return view('client.senat'); });
  Route::get('/kamus-gaul', [ClientKamusgaulController::class, 'index'])->name('kamus-gaul');

  // BOOKLET
  Route::get('/booklet', [ClientFunfactController::class, 'index'])->name('funfact');

  // PPLK
  Route::get('/pplk', function () { return view('client.pplk'); });
  Route::get('/div-pplk', function () { return view('client.div-pplk'); });

  // BIODATA
  Route::get('/biodata', [ClientBiodataController::class, 'index'])->name('biodata');
  Route::get('/edit-biodata', [ClientBiodataController::class, 'indexEditBio'])->name('edit-biodata');
  Route::get('edit-fotoProfil/{id}', [ClientBiodataController::class, 'editProfil']);
  Route::put('update-fotoProfil/{id}', [ClientBiodataController::class, 'updateProfil']);
  Route::get('edit-profil/{id}', [ClientBiodataController::class, 'editBiodata']);
  Route::put('update-profil/{id}', [ClientBiodataController::class, 'updateBiodata']);

  // FORM KELUHAN
  Route::get('/form-keluhan ', [ClientKeluhanController::class, 'index'])->name('indexKeluhan');
  Route::post('/form-keluhan/{id}', [ClientKeluhanController::class, 'create'])->name('create-keluhan');

  // ORMAWA
  Route::get('/jurusan', [ClientJurusanController::class, 'index'])->name('jurusan');

  Route::get('/himpunan', [ClientHimpunanController::class, 'index'])->name('himpunans');
  Route::get('/detail-himpunan/{id}', [ClientHimpunanController::class, 'show'])->name('himpunans');

  Route::get('/ukm', [ClientUkmController::class, 'index'])->name('ukms');
  Route::get('/detail-ukm/{id}', [ClientUkmController::class, 'show'])->name('ukms');

  Route::get('/prodi', [ClientProdiController::class, 'index'])->name('prodis');
  Route::get('/detail-prodi/{id}', [ClientProdiController::class, 'show'])->name('prodis');

  // GAMES
  Route::get('/game-home', [LeaderboardController::class, 'index']);
  Route::get('/card-list', [ClientKodeGameController::class, 'index']);
  Route::get('/redeem/{no}', [ClientKodeGameController::class, 'show']);
  Route::get('/redeem-failed', function () { return view('client.games.redeem-code.failed');});
  Route::get('/redeem-success', function () { return view('client.games.redeem-code.success'); });
  Route::post('/submitcode/{id}', [ClientKodeGameController::class, 'sumscore'])->name('sumscore');
  Route::get('/tebak-bangunan',[ClientGameTebakBangunanController::class,'index']);
  Route::get('/tebak-bangunan-game/{id}',[ClientGameTebakBangunanController::class,'show']);
  Route::get('/tebak-bangunan-game/{id}/{jawaban}',[ClientGameTebakBangunanController::class,'store'])->name('soalTebakBangunan');
  Route::get('/tebak-bangunan-selesai/{id}',[ClientGameTebakBangunanController::class,'restart']);



  // DEVELOPMENT TEAM
  Route::get('/dev-team', function () {
    return view('client.dev-team');
  });

  Route::get('/ScannerDisiplin', function () {
    return view('scanner.scannerDisplin');
  });

Route::post('/scannerDisiplinCreate', [ClientScannerController::class, 'disiplin']);

});

// Route::get('/gen', [ClientBiodataController::class, 'generateAllQrCode']);
// Route::get('/hitung', [ClientBiodataController::class, 'hitunguser']);


