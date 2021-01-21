<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\Jemaat;
use App\Family;
use App\CategoryReservation;
use App\Reservation;
use App\CategoryPost;
use App\Post;
use App\Banner;
use App\Pelayan;
use App\Pelayanan;
use App\Lagu;
use App\LaguIbadah;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $jemaat = Jemaat::get();
        $countbatita = 0;
        $countsm = 0;
        $countremaja = 0;
        $countpemuda = 0;
        $countpp = 0;
        foreach($jemaat as $key => $jemaats){
            $dob = $jemaats->tanggal_lahir;
            $diff = date('Y') - date('Y', strtotime($dob));
            if($diff >= 0 && $diff < 7) {
                $countbatita++;
            }
            elseif($diff >= 7 && $diff < 15) {
                $countsm++;
            }
            elseif($diff >= 15 && $diff < 18) {
                $countremaja++;
            }
            elseif($diff >= 18  && $diff < 27) {
                $countpemuda++;
            }
            elseif($diff >= 27  && $diff <= 80) {
                $countpp++;
            }
        }
        $countb = $countbatita;
        $counts = $countsm;
        $countr = $countremaja;
        $countp = $countpemuda;
        $countper = $countpp;

        $countbaptis = 0;
        foreach($jemaat as $key => $jemaats){
            if($jemaats->baptis == "belum") {
                $countbaptis++;
            }
        }
        $countbap = $countbaptis;

        $day = Carbon::now()->format('d');
        $month = Carbon::now()->format('m');
        $CateId = CategoryReservation::find($request->id);
        $reservationId = Reservation::get();
        $pelayanan = Pelayanan::where('category_reservation_id', $request->id)->get();
        $pelayan = Pelayan::get();
        $lagu = Lagu::get();
        $laguIbadah = laguIbadah::where('category_reservation_id', $request->id)->get();
        

        $ultah = Jemaat::whereDay('tanggal_lahir', $day)->whereMonth('tanggal_lahir', $month)->get();

        $ultahfirst = Jemaat::whereDay('tanggal_lahir', $day)->whereMonth('tanggal_lahir', $month)->first();
        $banner = Banner::orderBy('created_at', 'desc')->get();
        $categoryPost = CategoryPost::get();
        $countcategoryPost = CategoryPost::count();
        $countpengumuman = Post::where('category_post_id', '4')->count();
        $countwartajemaat = Post::where('category_post_id', '3')->count();
        $countrenunganharian = Post::where('category_post_id', '2')->count();
        $post = Post::orderBy('created_at', 'desc')->paginate(3);
        $notif = Post::where('category_post_id', '4')->whereDay('tanggal', $day)->whereMonth('tanggal', $month)->get();
        $pengumuman = Post::where('category_post_id', '4')->where('active', 'aktif')->paginate(10);
        $wartajemaat = Post::where('category_post_id', '3')->orderBy('tanggal', 'desc')->paginate(10);
        $renunganharian = Post::where('category_post_id', '2')->orderBy('created_at', 'desc')->paginate(10);
        $countjemaat = Jemaat::count();
        $countfamily = Family::count();
        $category = CategoryReservation::get();
        $reservation = Reservation::get();
        $data = CategoryReservation::where('active', '1')->orderBy('id', 'desc')->get();
        View::share('categories', $category);
        View::share('category', $CateId);
        View::share('reservationspdf', $reservationId);
        View::share('lagus', $lagu);
        View::share('laguIbadahs', $laguIbadah);
        View::share('pelayanans', $pelayanan);
        View::share('pelayans', $pelayan);

        View::share('banners', $banner);
        View::share('posts', $post);
        View::share('jemaats', $jemaat);
        View::share('countjemaat', $countjemaat);
        View::share('countfamily', $countfamily);

        View::share('notifs', $notif);
        View::share('pengumumans', $pengumuman);
        View::share('wartajemaats', $wartajemaat);
        View::share('renunganharians', $renunganharian);

        View::share('categoryPosts', $categoryPost);
        View::share('countPengumuman', $countpengumuman);
        View::share('countWartajemaat', $countwartajemaat);
        View::share('countRenunganharian', $countrenunganharian);

        View::share('ultah', $ultah);
        View::share('ultahfirst', $ultahfirst);
        View::share('countb', $countb);
        View::share('counts', $counts);
        View::share('countr', $countr);
        View::share('countp', $countp);
        View::share('countper', $countper);
        View::share('countbap', $countbaptis);
        
    }
}
