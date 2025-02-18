<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel\Artikel;
use App\Models\Contact\Message as ContactMessage;
use App\Models\Pendaftaran;
use App\Models\Tracker;
use App\Models\Keanggotaan\Anggota;
use App\Models\Utility\HariBesarNasional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private $query = [];
    public function index(Request $request)
    {
        $total_artikel = Artikel::count();
        $total_pesan = ContactMessage::count();
        $total_anggota = Anggota::count();
        $page_attr = adminBreadcumb(h_prefix(), addDashboard: false);

        $view = path_view('pages.admin.dashboard');
        $data = compact(
            'total_artikel',
            'total_pesan',
            'total_anggota',
            'page_attr',
            'view',
        );
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function ulang_tahun(Request $request)
    {
        $limit_hari = $request->limit ?? 7;

        $year = (int)date('Y');
        $year_add_one = $year + 1;
        $this->query['countdown'] = <<<SQL
            ( if( DATEDIFF(date(concat('{$year}-', month(tanggal_lahir), '-', day(tanggal_lahir))), CURDATE()) < 0,
                DATEDIFF(date(concat('{$year_add_one}-', month(tanggal_lahir), '-', day(tanggal_lahir))), CURDATE()) ,
                DATEDIFF(date(concat('{$year}-', month(tanggal_lahir), '-', day(tanggal_lahir))), CURDATE()) )
            )
        SQL;
        $this->query['countdown_alias'] = 'countdown';

        $c_tanggal_str = 'tanggal_str';
        $this->q_build($c_tanggal_str, <<<SQL
            (DATE_FORMAT(
                tanggal_lahir,
                concat('%d %M')
                )
            )
        SQL);

        $result = Anggota::select([
            'id', 'nama',
            DB::raw("{$this->query['countdown']} as {$this->query['countdown_alias']}"),
            DB::raw("{$this->query['tanggal_str']} as {$this->query['tanggal_str_alias']}")
        ])
            ->whereRaw("({$this->query['countdown']} <= $limit_hari)")
            ->orderBy($this->query['countdown_alias'])
            ->get();

        return $result;
    }

    public function hbn(Request $request)
{
    // Mengatur batas hari default menjadi 7 jika tidak disediakan dalam request
    $limit_hari = $request->limit ?? 7;

    // Mendapatkan tahun saat ini dan menambahkannya dengan satu
    $year = (int)date('Y');
    $year_add_one = $year + 1;

    // Nama tabel yang digunakan
    $table = HariBesarNasional::tableName;

    // Membuat string SQL untuk menghitung tanggal berdasarkan kolom di tabel
    // dan menyesuaikan logika untuk countdown seperti di fungsi ulang_tahun
    $tanggal = <<<SQL
    date(concat((if(DATEDIFF(date(concat('$year-', $table.bulan, '-', $table.hari)), CURDATE()) < 0, '$year_add_one', '$year')), '-', $table.bulan, '-', $table.hari))
    SQL;
    $c_tanggal = 'tanggal';
    $this->q_build($c_tanggal, $tanggal);

    // Membuat string SQL untuk menghitung countdown
    $c_countdown = 'countdown';
    $this->q_build($c_countdown, <<<SQL
    (ifnull(if(DATEDIFF($tanggal, CURDATE()) < 0,
        DATEDIFF(ADDDATE($tanggal, INTERVAL 1 YEAR), CURDATE()),
        DATEDIFF($tanggal, CURDATE())
    ), 999))
    SQL);

    // Membuat string SQL untuk format tanggal
    $c_tanggal_str = 'tanggal_str';
    $this->q_build($c_tanggal_str, <<<SQL
    (DATE_FORMAT($tanggal, '%d %M'))
    SQL);

    // Melakukan query ke database untuk mengambil data dengan kondisi countdown kurang dari atau sama dengan limit_hari
    $result = HariBesarNasional::select([
        DB::raw('nama'), 'id',
        DB::raw("{$this->query['countdown']} as {$this->query['countdown_alias']}"),
        DB::raw("{$this->query['tanggal_str']} as {$this->query['tanggal_str_alias']}")
    ])
    ->whereRaw("({$this->query['countdown']} <= $limit_hari)")
    ->orderBy($this->query['countdown_alias'])
    ->get();

    // Mengembalikan hasil query
    return $result;
}


    // query_builder
    private function q_build($alias, $query)
    {
        $this->query[$alias] = $query;
        $this->query["{$alias}_alias"] = $alias;
        return 1;
    }

    public function vistor_counter(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $vistor = Tracker::selectRaw("sum(hits) as value, date as title")
            ->whereBetween('date', [$start, $end])
            ->groupBy('date')
            ->orderBy('date')
            ->get();
        $result['vistors'] = $vistor;

        $platform = Tracker::selectRaw("ifnull(platform, 'Tidak diketahui') as title, sum(hits) as value")
            ->whereBetween('date', [$start, $end])
            ->groupBy('title')->get();
        $result['platforms'] = $platform;

        $browser = Tracker::selectRaw("ifnull(browser, 'Tidak diketahui') as title, sum(hits) as value")
            ->whereBetween('date', [$start, $end])
            ->groupBy('title')->get();
        $result['browsers'] = $browser;

        return $result;
    }
}
