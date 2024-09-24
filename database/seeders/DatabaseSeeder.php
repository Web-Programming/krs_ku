<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Jadwal;
use App\Models\MataKuliah;
use App\Models\Krs;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => '12345',
            'nama' => 'Admin',
            'password' => Hash::make('12345'),
            'role' => 'BAA',
            'status' => ''
        ]);
        User::create([
            'username' => '0055P',
            'nama' => 'Tri Buana Ayu',
            'password' => Hash::make('0055P'),
            'role' => 'Mahasiswa',
            'status' => 'Belum divalidasi'
        ]);
        User::create([
            'username' => '0056P',
            'nama' => 'Wendy Steven',
            'password' => Hash::make('0056P'),
            'role' => 'Mahasiswa'
        ]);
        User::create([
            'username' => '0112P',
            'nama' => 'Agung Riski Ariza',
            'password' => Hash::make('0112P'),
            'role' => 'Mahasiswa'
        ]);

        Kelas::create([
            'namaKelas' => 'SI31',
            'prodiKelas' => 'Sistem Informasi',
        ]);

        Kelas::create([
            'namaKelas' => 'SI32',
            'prodiKelas' => 'Sistem Informasi',
        ]);

        Kelas::create([
            'namaKelas' => 'SI51',
            'prodiKelas' => 'Sistem Informasi',
        ]);

        Kelas::create([
            'namaKelas' => 'SI52',
            'prodiKelas' => 'Sistem Informasi',
        ]);

        Kelas::create([
            'namaKelas' => 'SI71',
            'prodiKelas' => 'Sistem Informasi',
        ]);

        Kelas::create([
            'namaKelas' => 'SI72',
            'prodiKelas' => 'Sistem Informasi',
        ]);

        MataKuliah::create([
            'kodeMK' => 'SI0011',
            'namaMK' => 'Statistika',
            'sks' => 4,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0012',
            'namaMK' => 'Analisis Sistem Informasi',
            'sks' => 4,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0013',
            'namaMK' => 'Sistem Basis Data',
            'sks' => 4,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0014',
            'namaMK' => 'Paradigma Berorientasi Objek II',
            'sks' => 3,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'RSI0001',
            'namaMK' => 'Komputasi Hijau',
            'sks' => 4,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0021',
            'namaMK' => 'Penelitian Sistem Informasi',
            'sks' => 4,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0022',
            'namaMK' => 'Inovasi Digital',
            'sks' => 2,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0023',
            'namaMK' => 'Perancangan Sistem Informasi',
            'sks' => 4,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0024',
            'namaMK' => 'Gudang Data',
            'sks' => 2,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0025',
            'namaMK' => 'Perancangan UI/UX',
            'sks' => 2,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0026',
            'namaMK' => 'Pengembangan Aplikasi Bergerak I',
            'sks' => 3,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0027',
            'namaMK' => 'Pengembangan Aplikasi Web II',
            'sks' => 3,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0037',
            'namaMK' => 'Infrastruktur Teknologi Informasi',
            'sks' => 2,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0038',
            'namaMK' => 'Manajemen dan Strategi Sistem Informasi',
            'sks' => 4,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0039',
            'namaMK' => 'Sistem Terdistribusi dan Komputasi Paralel',
            'sks' => 2,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0040',
            'namaMK' => 'Sistem Operasi dan Layanan Virtual',
            'sks' => 3,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0041',
            'namaMK' => 'Sistem Perusahaan',
            'sks' => 3,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0043',
            'namaMK' => 'Sistem Informasi Geografis',
            'sks' => 3,
            'kapasitas' => 40
        ]);
        MataKuliah::create([
            'kodeMK' => 'SI0044',
            'namaMK' => 'Teknologi Big Data',
            'sks' => 3,
            'kapasitas' => 40
        ]);

        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '2',
            'hari' => 'Senin',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '4',
            'hari' => 'Senin',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '2',
            'hari' => 'Selasa',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '1',
            'hari' => 'Selasa',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '3',
            'hari' => 'Rabu',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '5',
            'hari' => 'Rabu',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '3',
            'hari' => 'Kamis',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '4',
            'hari' => 'Kamis',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '1',
            'hari' => 'Jumat',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '1',
            'matakuliah_id' => '5',
            'hari' => 'Jumat',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '2',
            'hari' => 'Senin',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '1',
            'hari' => 'Senin',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '3',
            'hari' => 'Selasa',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '5',
            'hari' => 'Selasa',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '4',
            'hari' => 'Rabu',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '1',
            'hari' => 'Kamis',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '3',
            'hari' => 'Kamis',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '5',
            'hari' => 'Jumat',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '2',
            'hari' => 'Jumat',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '2',
            'matakuliah_id' => '4',
            'hari' => 'Sabtu',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '12',
            'hari' => 'Senin',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '10',
            'hari' => 'Senin',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '7',
            'hari' => 'Selasa',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '8',
            'hari' => 'Selasa',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '11',
            'hari' => 'Rabu',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '6',
            'hari' => 'Rabu',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '12',
            'hari' => 'Kamis',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '9',
            'hari' => 'Kamis',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '8',
            'hari' => 'Jumat',
            'waktu' => '15:30 - 17:10',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '6',
            'hari' => 'Jumat',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '3',
            'matakuliah_id' => '11',
            'hari' => 'Sabtu',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '10',
            'hari' => 'Senin',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '8',
            'hari' => 'Senin',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '6',
            'hari' => 'Selasa',
            'waktu' => '15:30 - 17:10',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '9',
            'hari' => 'Selasa',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '11',
            'hari' => 'Rabu',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '12',
            'hari' => 'Rabu',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '8',
            'hari' => 'Kamis',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '7',
            'hari' => 'Kamis',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '11',
            'hari' => 'Jumat',
            'waktu' => '15:30 - 17:10',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '12',
            'hari' => 'Jumat',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '4',
            'matakuliah_id' => '6',
            'hari' => 'Jumat',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '17',
            'hari' => 'Senin',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '14',
            'hari' => 'Selasa',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '16',
            'hari' => 'Rabu',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '15',
            'hari' => 'Kamis',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '16',
            'hari' => 'Jumat',
            'waktu' => '15:30 - 17:10',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '15',
            'hari' => 'Jumat',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '13',
            'hari' => 'Jumat',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '17',
            'hari' => 'Sabtu',
            'waktu' => '15:30 - 17:10',
        ]);
        Jadwal::create([
            'kelas_id' => '5',
            'matakuliah_id' => '14',
            'hari' => 'Sabtu',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '15',
            'hari' => 'Senin',
            'waktu' => '15:30 - 17:10',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '16',
            'hari' => 'Selasa',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '15',
            'hari' => 'Selasa',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '16',
            'hari' => 'Rabu',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '17',
            'hari' => 'Rabu',
            'waktu' => '19:00 - 20:40',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '13',
            'hari' => 'Kamis',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '17',
            'hari' => 'Jumat',
            'waktu' => '15:30 - 17:10',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '14',
            'hari' => 'Jumat',
            'waktu' => '17:10 - 18:40',
        ]);
        Jadwal::create([
            'kelas_id' => '6',
            'matakuliah_id' => '14',
            'hari' => 'Sabtu',
            'waktu' => '19:00 - 20:40',
        ]);
        
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 1,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 2,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 3,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 4,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 5,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 6,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 7,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 8,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 9,
        ]);
        Krs::create([
            'user_id' => 2,
            'jadwal_id' => 10,
        ]);
    }
}
