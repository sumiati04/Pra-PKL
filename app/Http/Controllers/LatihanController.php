<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // 

    public function menu () 
    {
        $a = [
            array('beranda' => "Beranda" ,
                'berita' => "Berita",
                'Berita' => ['Politik','Manca Negara'],
                'Olahraga' => "Olahraga",
                'olahraga' => ['Sepak Bola', 'Bulu Tangkis'],
                'tentang' => "Tentang"),
        ];
        return view('page1.menu', ['menu' => $a]);
    }

    public function kampus ()
    {
        $dosen = [
            
            ['nama' => 'Yusuf Bachtiar','mata_kuliah' => 'pemrograman mobile', 'mahasiswa' => [
                ['nama' => 'Muhammad Sholeh', 'nilai' =>78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay Holin', 'nilai' => 87],
                ['nama' => 'Fadillah', 'nilai' => 95],
        ],
        ],
                ['nama' => 'Yaris Riyadi', 'mata_kuliah' => 'pemrograman web', 'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' =>67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Chandra Mega Putra', 'nilai' => 60],
        ],
        ],
    
    ];
        return view('page1.kampus',['kampus' => $dosen]);
        
    }

    public function tv()
    {
        $tv = [
            ['siaran' => "NET TV", 'acara' => 'musik', 'jam_tayang' => '20.00', 'tanggal' => '15-agustus-2022'],
            ['siaran' => "TVRI", 'acara' => 'kartun', 'jam_tayang' => '08.00', 'tanggal' => '17-juli-2022'],
            ['siaran' => "BEINSPORT", 'acara' => 'bulu tangkis', 'jam_tayang' => '18.00', 'tanggal' => '20-juli-2022'],
            ['siaran' => "Ochannel", 'acara' => 'berita', 'jam_tayang' => '05.00', 'tanggal' => '18-juli-2022'],
            ['siaran' => "INDOSIAR", 'acara' => 'azab', 'jam_tayang' => '19.00', 'tanggal' => '16-juli-2022'],
        ];

        return view('page1.tv',['tv' => $tv]);
    }

    public function belanja ()
    {
        $barang = [
            ['nama' => 'Alfian' , 'membeli' =>
            [
                ['beli' => 'sepatu' , 'harga' => 250000],
                ['beli' => 'baju' , 'harga' => 100000],
                ['beli' => 'celana' , 'harga' => 150000],
                ['beli' => 'kupluk' , 'harga' => 100000],
        ],
        ],

            ['nama' => 'Dida' , 'membeli' =>
            [
                ['beli' => 'topi' , 'harga' => 100000],
                ['beli' => 'baju' , 'harga' => 75000],
                ['beli' => 'celaa' , 'harga' => 125000], 
        ]
        ]
        ];
        return view('page1.belanja', ['belanja' => $barang]);
        
    }
}
