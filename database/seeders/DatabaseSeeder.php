<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data Layanan (Services)
        Service::create([
            'title' => 'Custom Web & Enterprise Systems',
            'slug' => 'custom-web-enterprise-systems',
            'short_description' => 'Rekayasa aplikasi web berskala enterprise, sistem ERP, manajemen logistik, dan dashboard analitik terintegrasi.',
            'content' => "Layanan pengembangan perangkat lunak kustom kami dirancang untuk memecahkan kompleksitas alur bisnis perusahaan Anda.\n\nKeunggulan arsitektur kami:\n- Skalabilitas tinggi dengan arsitektur microservices atau modular monolith.\n- Keamanan data terenkripsi dan kepatuhan standar industri.\n- Clean architecture dengan automated test coverage.",
            'order' => 1,
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Mobile Application Engineering',
            'slug' => 'mobile-application-engineering',
            'short_description' => 'Aplikasi iOS & Android performa tinggi dengan teknologi Flutter dan React Native untuk pengalaman pengguna mulus.',
            'content' => "Pengembangan aplikasi mobile end-to-end mulai dari desain UX intuitif hingga rilis ke App Store dan Google Play Store.\n\nFokus kami:\n- Performa 60fps yang responsif dan hemat baterai.\n- Sinkronisasi data offline-first.\n- Keamanan autentikasi biometrik dan proteksi API.",
            'order' => 2,
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Cloud Infrastructure & DevOps',
            'slug' => 'cloud-infrastructure-devops',
            'short_description' => 'Modernisasi infrastruktur cloud di AWS, GCP, atau on-premise dengan otomatisasi CI/CD dan standar uptime 99.9%.',
            'content' => "Optimalisasi biaya dan stabilitas server Anda dengan infrastruktur modern.\n\nCakupan layanan:\n- Containerization dengan Docker & Kubernetes orchestration.\n- Automated CI/CD pipeline deployment tanpa downtime.\n- Pemantauan real-time dan disaster recovery.",
            'order' => 3,
            'is_active' => true,
        ]);

        // 2. Data Studi Kasus (Case Studies)
        CaseStudy::create([
            'title' => 'Sistem Manajemen Armada Truk & Logistik Terintegrasi',
            'slug' => 'sistem-manajemen-armada-truk-dan-logistik',
            'client_name' => 'PT Logistik Nusantara Prima',
            'industry' => 'Transportasi & Rantai Pasok',
            'summary' => 'Transformasi digital sistem dispatching dan pelacakan armada armada pengiriman real-time yang memangkas waktu tunggu pengiriman sebesar 35%.',
            'description' => "Tantangan Klien:\nKlien memiliki ratusan unit armada dengan proses pencatatan muatan dan surat jalan yang masih manual, sering terjadi miskomunikasi jadwal sopir dan keterlambatan pengiriman.\n\nSolusi Rekayasa Kami:\nArta Teknologi membangun platform web enterprise terpusat dengan modul pelacakan rute, manajemen status muatan, e-surat jalan dengan QR Code, serta integrasi gateway WhatsApp untuk notifikasi otomatis ke driver.",
            'tech_stack' => ['Laravel', 'MySQL', 'TailwindCSS', 'Redis', 'Docker'],
            'project_url' => 'https://example.com/demo-truck-system',
            'order' => 1,
            'is_featured' => true,
            'is_published' => true,
        ]);

        CaseStudy::create([
            'title' => 'Portal Layanan Pengadaan Digital B2B',
            'slug' => 'portal-layanan-pengadaan-digital-b2b',
            'client_name' => 'Bumantara Mandiri Corpora',
            'industry' => 'Manufaktur & E-Procurement',
            'summary' => 'Sistem lelang dan approval tender pengadaan barang otomatis dengan audit-trail transparan dan keamanan enkripsi enterprise.',
            'description' => "Tantangan Klien:\nProses tender vendor yang memakan waktu berminggu-minggu serta risiko ketidaktransparanan penawaran harga.\n\nSolusi Rekayasa Kami:\nArta Teknologi mengimplementasikan sistem e-procurement dengan fitur multi-tier role approval, perbandingan penawaran otomatis, dan enkripsi dokumen rahasia.",
            'tech_stack' => ['Laravel', 'PostgreSQL', 'Livewire', 'AWS S3'],
            'project_url' => 'https://example.com/demo-procurement',
            'order' => 2,
            'is_featured' => true,
            'is_published' => true,
        ]);
    }
}
