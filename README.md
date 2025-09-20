<p align="start" style="display: flex; align-items: center; gap: 10px;">
  <img src="https://raw.githubusercontent.com/trjgdyan/arsip-app/main/public/images/logo arsip.png" width="80" alt="Arsipku Logo">
  <span style="font-size: 2rem; font-weight: bold;">ARSIPKU</span>
</p>

## 🎯 Tujuan

Aplikasi **Arsipku** dibuat untuk mempermudah pengelolaan arsip digital secara terstruktur, efisien, dan mudah diakses oleh pengguna.  
Dengan aplikasi ini, penyimpanan dokumen menjadi lebih rapi, aman, serta mudah dicari kembali saat dibutuhkan.👍

## ✨ Fitur

-   📝 Register dan login
-   📊 Dashboard ringkasan arsip
-   📁 Manajemen arsip surat (➕ tambah, ✏️ edit, 👁️ lihat, ❌ hapus)
-   📄 Unduh surat dalam format **.pdf**
-   📤 Export data arsip surat ke **.csv**
-   🔍 Pencarian arsip surat berdasarkan nama surat
-   🗂️ Manajemen kategori surat (➕ tambah, ✏️ edit, 👁️ lihat, ❌ hapus)
-   👤 Lihat informasi akun (profile)
-   🔑 Mengganti password
-   🗑️ Menghapus akun
-   🌟 Melihat Developer pada halaman about
-   🚪 Logout

## 🚀 Cara Menjalankan

1. ⬇️ Clone repository
    ```bash
    git clone https://github.com/trjgdyan/arsip-app.git
    ```
2. 📦 Install dependency menggunakan Composer dan NPM
    ```bash
    composer install
    npm install & npm run dev
    ```
3. ⚙️ Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database
    ```bash
    cp .env.example .env
    ```
4. 🔑 Generate application key
    ```bash
    php artisan key:generate
    ```
5. 🗃️ Jalankan migraasi database
    ```bash
    php artisan migrate
    ```
6. ▶️ Jalankan server lokal
    ```bash
    php artisan serve
    ```

## 📸 Screenshot

### 🔐 Halaman Login/Register
<p align="center">
  <img src="documentation/login.png" width="260" alt="Login Screenshot"/>
  <img src="documentation/register.png" width="260" alt="Register Screenshot"/>
</p>

---

### ✨ Halaman About
<p align="center">
  <img src="documentation/about desk.png" width="260" alt="About Desktop"/>
  <img src="documentation/about mobile.png" width="160" alt="About Mobile"/>
</p>

---

### 🏠 Dashboard & Manajemen Arsip

#### 📊 Dashboard
<p align="center">
  <img src="documentation/dashboard desk.png" width="260" alt="Dashboard Desktop"/>
  <img src="documentation/dashboard ipad.png" width="160" alt="Dashboard iPad"/>
  <img src="documentation/dashboard moble.png" width="160" alt="Dashboard Mobile"/>
</p>

#### 📂 CRUD Arsip
<p align="center">
  <img src="documentation/create surat.png" width="260" alt="Create Surat"/>
  <img src="documentation/edit surat.png" width="260" alt="Edit Surat"/>
  <img src="documentation/hapus surat.png" width="260" alt="Hapus Surat"/>
  <img src="documentation/lihat surat.png" width="260" alt="Lihat Surat"/>
</p>

---

### 🗂️ Manajemen Kategori
<p align="center">
  <img src="documentation/index kategori.png" width="260" alt="Index Kategori"/>
  <img src="documentation/create kategori.png" width="260" alt="Create Kategori"/>
  <img src="documentation/edit kategori.png" width="260" alt="Edit Kategori"/>
  <img src="documentation/hapus kategori.png" width="260" alt="Hapus Kategori"/>
</p>

---

### 👤 Halaman Profile
<p align="center">
  <img src="documentation/profile1.png" width="260" alt="Profile 1"/>
  <img src="documentation/profile 2.png" width="260" alt="Profile 2"/>
  <img src="documentation/profile mobile.png" width="160" alt="Profile Mobile"/>
</p>
