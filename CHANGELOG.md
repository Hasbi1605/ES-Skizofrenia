# Changelog - ES Skizofrenia

**Sejak commit:** `782f25c` - "Initial commit: Expert System Skizofrenia" (2 hari lalu)  
**Tanggal:** 16 Desember 2025

---

## 📁 File Baru

### Controllers & Models

| File                      | Deskripsi                 |
| ------------------------- | ------------------------- |
| `ScreeningController.php` | Controller alur screening |
| `Diagnosis.php`           | Model diagnosis           |
| `Gejala.php`              | Model gejala              |
| `HasilDiagnosis.php`      | Model hasil diagnosis     |
| `Rule.php`                | Model rule sistem pakar   |

### Database

| File                                            | Deskripsi                 |
| ----------------------------------------------- | ------------------------- |
| `2025_12_15_000001_create_screening_tables.php` | Migration tabel screening |
| `ScreeningSeeder.php`                           | Seeder data screening     |

### Views

| File                          | Deskripsi                                    |
| ----------------------------- | -------------------------------------------- |
| `layouts/screening.blade.php` | Layout halaman screening                     |
| `public/partials/`            | Partials (family-guide, detail-styles)       |
| `public/screening/`           | Views screening (confirm, questions, result) |
| `public/types-detail/`        | Detail jenis skizofrenia                     |

### Assets

-   `expert-system-diagnosis.png`
-   `hero-mental-health.png`

---

## ✏️ File Diubah

| File                   | Perubahan                           |
| ---------------------- | ----------------------------------- |
| `PublicController.php` | Update path view ke `types-detail/` |
| `DatabaseSeeder.php`   | Penambahan seeder                   |
| `main.css`             | Perbaikan styling                   |
| `about.blade.php`      | Peningkatan konten                  |
| `guide.blade.php`      | Perbaikan minor                     |
| `home.blade.php`       | Update layout                       |
| `screening.blade.php`  | Update layout                       |
| `types.blade.php`      | Update konten                       |
| `routes/web.php`       | Penambahan routes screening         |
| 7 gambar `.webp`       | Optimasi gambar                     |

---

## 🔄 File Dipindahkan

Detail jenis skizofrenia → `types-detail/`:

-   `paranoid.blade.php`
-   `hebephrenic.blade.php`
-   `catatonic.blade.php`
-   `residual.blade.php`
-   `undifferentiated.blade.php`

---

**Total:** +582 baris, -1,116 baris
