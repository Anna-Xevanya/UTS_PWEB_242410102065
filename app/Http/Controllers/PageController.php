<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        $pengumuman = [
            'Event Halloween Spesial! Dapatkan wallpaper eksklusif gratis 🎃',
            'Maintenance server dijadwalkan pada 25 Oktober pukul 01:00–03:00 WIB',
            'Fitur komentar kini sudah bisa digunakan di semua chapter!'
        ];

        $rekomendasi = [
            [
                'judul' => 'Solo Leveling',
                'genre' => 'Action, Fantasy',
                'gambar' => 'img/Solo Leveling.jpg'
                
            ],
            [
                'judul' => 'Pick Me Up',
                'genre' => 'Advanture',
                'gambar' => 'img/Pick Me Up, Infinite Gacha.jpg'
            ],
            [
                'judul' => 'Omniscient Reader',
                'genre' => 'Drama, Action',
                'gambar' => 'img/Omniscient readers viewpoint.jpg'
            ],
        ];

        return view('dashboard', compact('username', 'pengumuman', 'rekomendasi'));
    }

    // Halaman Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    // Halaman Pengelolaan (List Data)
    public function pengelolaan()
{
    $manhwas = [
        [
            'judul' => 'Solo Leveling',
            'genre' => 'Action',
            'rating' => 9.5,
            'gambar' => 'img/Solo Leveling.jpg'
        ],
        [
            'judul' => 'Special Civil servant',
            'genre' => 'Supernatural',
            'rating' => 8.7,
            'gambar' => 'img/Special Civil Servant.jpg'
        ],
        
        [
            'judul' => 'Limit-Breaking Genius Mage',
            'genre' => 'Action',
            'rating' => 8.8,
            'gambar' => 'img/Limit-Breaking Genius Mage.jpg'
        ],
        [
            'judul' => 'Omniscient Reader',
            'genre' => 'Fantasy',
            'rating' => 9.2,
            'gambar' => 'img/Omniscient readers viewpoint.jpg'
        ],
        [
            'judul' => 'The Novel Extra',
            'genre' => 'Action',
            'rating' => 9.0,
            'gambar' => 'img/The Novels Extra.jpg'
        ],
        [
            'judul' => 'The Last Advanturer',
            'genre' => 'Supernatural',
            'rating' => 8.7,
            'gambar' => 'img/The Last Adventurer.jpg'
        ],
        [
            'judul' => 'Pick Me Up',
            'genre' => 'Advanture',
            'rating' => 8.8,
            'gambar' => 'img/Pick Me Up, Infinite Gacha.jpg'
        ],
        [
            'judul' => 'Genius Archer Streaming',
            'genre' => 'Games',
            'rating' => 9.1,
            'gambar' => 'img/Genius Archer Streaming.jpg'
        ],
        [
            'judul' => 'A Villain Will to Survive',
            'genre' => 'Advanture',
            'rating' => 8.7,
            'gambar' => 'img/A villain will to survive.jpg'
        ], 
        [
            'judul' => 'The Beginning After The End',
            'genre' => 'Adventure',
            'rating' => 9.0,
            'gambar' => 'img/download (3).jpg'
        ],
    ];

    return view('pengelolaan', compact('manhwas'));
}

}
