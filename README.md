

![Software Requirements_page-0001](https://github.com/user-attachments/assets/06560a36-012a-464f-abfb-beb8ee9f07f4)
**BAB 1 Pendahuluan**


***

**1.1 Tujuan**

***

Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Website Profile Company UMKM Jacking’s Coffee”. Dokumen ini dibangun untuk memudahkan UMKM yang baru memulai bisnis nya agar memudahkan admin serta customer mereka untuk memesan atau meng order makanan dari mereka dengan website yang telah kami kembangkan

**1.2 Lingkup**

***

Sistem website UMKM ini kami bangun untuk mensupport UMKM di indonesia salah satu nya Jacking’s coffee dimana tujuan nya untuk menaikan tingkat pelanggan dan juga mempermudah mereka dalam menjalani bisnis mereka. Sistem ini kami buat untuk mempermudah admin dan juga customer dalam menginputkan barang atau memesan barang berbasis website.




**1.3 Akronim, Singkatan, Definisi**

***

|                                    |                                                                                                                              |
| ---------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| **Istilah**                        | **Definisi**                                                                                                                 |
| SRS                                | Software Requirement Specification                                                                                           |
| Software Requirement Specification | Perangkat lunak yang akan dibuat dan sebagai menjembatani komunikasi pembuat dengan pengguna                                 |
| UMKM                               | Usaha Mikro,kecil,dan Menegah                                                                                                |
| Website                            | Halaman web yang saling terhubung dan dapat diakses melalui jaringan internet menggunakan sebuah domain atau alamat tertentu |




**1.4 Referensi**

***

Referensi yang kami gunakan dalam pengembangan perangkat lunak ini adalah 

https\://myblackbirdcafe.com/


**1.5 Overview**

***

Bab selanjutnya yaitu menjelaskan sistem yang diterapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan bab 3 merupakan deskripsi dan aplikasi yang diterapkan pada aplikasi yang dibuat.

**BAB II GAMBARAN UMUM**

***

UMKM (Usaha Mikro, Kecil, dan Menengah) merupakan sektor yang memainkan peran penting dalam pertumbuhan ekonomi, khususnya di Indonesia. UMKM tidak hanya menciptakan lapangan kerja bagi masyarakat lokal tetapi juga menjadi motor penggerak ekonomi daerah. Salah satu contohnya adalah usaha seperti Jacking's Coffee, sebuah coffee shop yang bertujuan memberikan pengalaman menikmati kopi berkualitas dengan sentuhan lokal. Dalam era digital saat ini, memiliki website menjadi langkah strategis untuk mendukung perkembangan UMKM. Website berfungsi sebagai platform untuk memperluas jangkauan pasar, memperkenalkan produk unggulan, dan mempermudah pelanggan dalam mengakses informasi maupun layanan pemesanan. Dengan memanfaatkan teknologi ini, UMKM seperti Jacking's Coffee dapat bersaing di pasar yang lebih luas, meningkatkan penjualan, serta memperkuat hubungan dengan pelanggan. Berikut akan kami jelaskan sistem software kami, 

**Fungsi Customer :** 

- View tampilan home

- Memesan menu

- View tampilan lokasi

- Menambahkan pesan saran

- Menambahkan pesanan

- Checkout pesanan

**Fungsi Admin:**

- Login

- Input menu

- Melihat isi pesan saran

- Update data

- Delete data

- Edit data


**2.1 Perspektif Produk**

***

Sistem website ini adalah sistem yang diaplikasikan ke dalam website terdapat 2 jenis aktor yaitu Admin dan Customer. Pengolahan data dilakukan oleh admin pada website dan customer hanya dapat melihat informasi pada website.

**2.1.1 Antarmuka Sistem**



![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXc8qdKJbZum5aNAVtOU_dCoc3EkuViBWbAm0pJwnwv9youw8gQxhVzGMvO1VaPuMPQ3GEJKMnkE55R4KTG37Umy66_IwqlWo_NdClj2nikPUnLVlAl4H09BkvX1bEAc5eezQY5Z?key=2_QpGHPjQQkdDr8g-HMuORrn)



**2.1.2 Antarmuka Pengguna**

**Halaman Admin**

|                  |                                                                                                                                                                                                                             |                                                                                                |
| :--------------: | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------: | :--------------------------------------------------------------------------------------------: |
|     **Fitur**    |                                                                                                          **Gambar**                                                                                                         |                                         **Penjelasan**                                         |
|     Dashboard    |  ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXfR_Ijm_rBQiolr9-x4qIF2iLuFL4ymwzu5YyvaMzZcZuKcbiay4sWgTTf1pHrK9M9AXrGdCujWlomj5CVerdg-F15dVUiwXfkSL9tF6cfDWqDIAA-RTjCB4iKaif2szqcsD1Qi?key=2_QpGHPjQQkdDr8g-HMuORrn)  |                Ini merupakan halaman utama jika user sudah bisa melakukan login                |
|     CRUD Menu    | ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXdGvD3vCqbdAY0j5oD9ehB9pAHByXLM1IwVW1iNRxFUQWQKRzvhmSWnLSZRlQsoySrwhPqBYP6n8FmxFsgnQrWw9wpquCFL3SxTOv2ittpy4UG8IJtN1upNyfyYWVuKKiTmpKyWlA?key=2_QpGHPjQQkdDr8g-HMuORrn) |     Ini adalah menu CRUD Menu, Admin dapat melakukan tambah data, edit data, dan hapus data    |
| CRUD Pesan Saran |  ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXeI0dpun3SU6kv0uGQtMZXdkxJS3mVjQ_axdYy5lfQ7j2psahZj3YgyhTmH94mQb3vUieCzY4BB5raOdla2YWWm9OLnXrcTKV4InieLNny-8-AtqxI7ZAtHJ52CO9z7WjJ-XzcG?key=2_QpGHPjQQkdDr8g-HMuORrn)  | Ini adalah menu CRUD Pesan Saran, Admin dapat melakukan tambah data, edit data, dan hapus data |

**Halaman Customer**

|             |                                                                                                                                                                                                                             |                                                                                           |
| :---------: | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------: | :---------------------------------------------------------------------------------------: |
|  **Fitur**  |                                                                                                          **Gambar**                                                                                                         |                                       **Penjelasan**                                      |
|     Home    | ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXfM-IQTsSIMnsNcDVuvrTPejiAtVjwSBN9BQF5Db8JY6ILu7_TzjApLLadEfl6cxbnkRFpus2wG-frrInLVkV559gf66bGrZzcUpH9Cd2FIwH_bYaN3SHuo-YJ1IvCNY0XdzF4KbA?key=2_QpGHPjQQkdDr8g-HMuORrn) | Ini merupakan tampilan luaran yang ada pada website yang bisa dijelajahi oleh pengunjung  |
|   About Us  | ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXegg09tl_iN1HvnryCT4-xxGJRb203KSWi0ZKMCF0Je0zrnzjbzGCu2qVG1b4o068q38kBo7t5FocExzt9XYWDpa9y8xpRI1dzcyZjGYFCgRcrV1NiGS9vRU3LXmTyL74hDI1q_zw?key=2_QpGHPjQQkdDr8g-HMuORrn) |                  Tampilan About Us menampilkan tentang UMKM ini berjalan                  |
| Galeri Menu |  ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXdvQriqJ-82sU4oyWfwUMKxweEUH2YJXFwau0PiPDDA0VTMUH0ffB6EFYDHYQvM8hxAgxqa3RceNSROB9pMml4F-3anPoX1JR5Yd6V5ep2pHRMIyln6yMCLKW-qBkN7CGUVp7l_?key=2_QpGHPjQQkdDr8g-HMuORrn)  |           Tampilan Galeri Menu yang menampilkan foto menu recomended dari UMKM            |
|  Pemesanan  | ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXd2FZnUlPr757w2xCaHQ-DlFgqH0zMMGymbfzyJvrHBXdOqqDWpoUbyjJXdyaROz42m30hQm7jxyHtU1D8net8zOF_kihTW_bNRrRAfTUFKDCzRZmTj1PaxHAfz7JJQKYSI7_FTSQ?key=2_QpGHPjQQkdDr8g-HMuORrn) |               Tampilan Pemesanan untuk pemesanan customer dari produk UMKM                |
|  Pembayaran | ![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXd1ktL4SxPP6TwLbo2NT0DTIBkHFgW7uy8P6PNSSUObvBmHNk_WeGvj68kvpmVsHNzvP8YQMZpgr0KPgR5-3D_9XH9aw74aZDyQyTxKZFyAUMSC3m-dwC_R_wAQvZSewiP7RA1ecQ?key=2_QpGHPjQQkdDr8g-HMuORrn) |     Tampilan Pembayaran untuk Pembayaran customer dari produk yang dibeli di UMKM ini     |

\


**2.1.3 Antarmuka Perangkat Keras**

****![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXctMEPjwCswlJ3QmdhXPJzZsVKBi4E1TydpizVOBDEgbRxTauCx1eVvIsoRuNYza9sLWYU3npcF_pFljpKmO8xD360ub0rFXjWvMMwI5SLOF9ZstFxAMOBahLNAMhziJSc25O8jRA?key=2_QpGHPjQQkdDr8g-HMuORrn)****

\
\
\


********

**2.1.4 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Informasi Parenting antara lain :

- PC

- wifi/Jaringan

\


**2.1.5 Operasi-operasi**

|             |                                   |
| ----------- | --------------------------------- |
| **Operasi** | **Fungsi**                        |
| Login       | Digunakan untuk mengakses website |
| Input       | Untuk menginput data              |
| Hapus       | Untuk menghapus data              |
| Edit        | Untuk mengedit data               |
| Simpan      | Untuk menyimpan data              |

\


**2.2 Spesifikasi Kebutuhan Fungsional** 

***

**2.2.1 Admin Login**

Use case: Login

Diagram :

****![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXc2YAUbytLmximnBp_jMV2IVG8i3Qj67UfGsEFd93iYXjx2OW7Q7Uwkwy0NyeEi8jy75EonIDmcDZwqvO-FEIQZb6jxKiNx4eqMFoWwu-4OC9C0bzboc02TT13mTQqdNMVYOEos0Q?key=2_QpGHPjQQkdDr8g-HMuORrn)****

********

**Deskripsi singkat** 

Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin.

**Deskripsi langkah langkah** 

1. Admin melakukan login dengan username dan password yang telah ditentukan sebelumnya

2. Setelah sukses sistem akan mengarahkan admin ke tampilan home admin.

3. Admin dapat memanipulasi data yang diinginkan

4. Selesai

\


**2.2.2 Admin input menu**

****![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXdvxcDbGUhR5Ob8KwcnoL176YpiweXiWLi2utOU3wofPIEsp_MvG_KfKa3WAyyXLnwC1fXw_Z0iRZUSOSW-LBfPbCzuGILVGL7hGKqrKx3SeaeCCHazQBN8rFH5o-kWB8LphkHP?key=2_QpGHPjQQkdDr8g-HMuORrn)****

 **Deskripsi singkat admin mengelola menu**

1. Sistem akan menampilkan tampilan penginputan data menu

2. Admin dapat menginputkan data menu nama,deskripsi,harga 

3. Admin dapat menghapus menu yg terdapat pada tampilan website

4. Admin dapat mengupdate menu yang sudah di buat

********

**2.2.3 Admin input pesan saran**

\


![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXf7s9jjkhLoAYgRUMwDRkrjGw9kw2jVHwsSZ1OUSFAbwkp6aIV8dTg4MmHYqRYpjd3kgBYlaKRrJog7jYq46vEDX7jJBspYofpAx-pnWebDGpvJ1UIwcWoKI_T0-Z_2VmjtQFm_eQ?key=2_QpGHPjQQkdDr8g-HMuORrn)

Disini admin bisa melihat pesan saran apa saja yang masuk dari customer dan juga dapat menghapus data pesan saran ataupun mengupdate nya

**2.2.4 Admin Input menu rekomendasi** 

**Deskripsi singkat** 

\


Admin dapat mengedit menu rekomendasi pada dashboard sesuai dengan menu yang tersedia untuk memudahkan customer dalam memilih menu 

\



**2.2.8 Customer Mengunjungi Website**

![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXeUXfjZyPweOKAw8r6SwwAByWJrrvjt7cZ5193Srm47yw0dd7FwvKT3u9xZjePrRfiNmYE_WubapiBdqa5sYay1bBsipmo3xuQeCtxqaf63FFtMcH0l9NPQIO-1SVSXXVMRUB4TqA?key=2_QpGHPjQQkdDr8g-HMuORrn)

**Deskripsi singkat** 

Customer dapat mengunjungi website melihat tampilan home,about us, tampilan galeri menu, memesan minuman dan juga dapat checkout pesanan mereka

\


**2.3 Spesifikasi Kebutuhan Non- Fungsional**

***

- Tabel kebutuhan non-fungsional

|     |                                                                 |
| :-: | :-------------------------------------------------------------: |
|  No |                            Deskripsi                            |
|  1  |  Perangkat dan fungsi menggunakan Bahasa Indonesia dan inggris  |
|  2  | Perangkat dapat dipakai disemua platform OS (Admin, pengunjung) |

\


**2.4 Karakteristik Pengguna** 

***

Karakteristik pengguna dari perangkat lunak ini adalah pengguna langsung berinteraksi dengan sistem dan dihubungkan dengan hak akses atau level autentikasi.

\


**2.5**  **Batasan-batasan**

Tidak Ada

**2.6**  **Asumsi-asumsi**

Tidak Ada

**2.7**  **Kebutuhan Penyeimbang**

Tidak Ada

********

**BAB III Requirement Specification**

***

**3.1 Persyaratan Antarmuka Eksternal**

***

Website ini dirancang agar dapat diakses oleh dua jenis pengguna, yaitu customer dan admin. Admin memiliki akses ke mode admin yang memungkinkan mereka untuk mengelola menu, mengubah tampilan, dan melakukan pengaturan lainnya demi memastikan kelancaran operasional website.

Sementara itu, customer dapat mengakses website dengan mudah tanpa persyaratan khusus. Mereka dapat menjelajahi menu yang tersedia, melakukan pemesanan dengan cepat, memberikan masukan atau saran melalui fitur pesan, serta menghubungi admin secara langsung melalui halaman Contact Us. Dengan antarmuka yang ramah pengguna, website ini memberikan pengalaman yang nyaman dan menyenangkan bagi semua penggunanya.

\


**3.2 Functional Requirement**

***

**3.2.1 Admin Login**

|                        |                                                                                         |
| ---------------------- | --------------------------------------------------------------------------------------- |
| **Nama fungsi**        | **Login**                                                                               |
| **Xref**               | Bagian 3.2.1 Login                                                                      |
| **Trigger**            | Pengguna membuka website cafe.                                                          |
| **Precondition**       | Sistem otomatis memeriksa status akun pengguna berdasarkan data di database.            |
| **Basic Path******     | 1. Pengguna membuka website cafe.                                                       |
|                        | 2. Sistem memvalidasi data pengguna:                                                    |
|                        | - Jika akun terdaftar sebagai admin di database:                                        |
|                        | a. Sistem otomatis mengarahkan pengguna ke mode admin.                                  |
|                        | c. Admin harus logout dari mode admin untuk masuk ke dashboard website cafe.            |
|                        | - Jika akun bukan admin atau tidak terdaftar:                                           |
|                        | a. Sistem langsung mengarahkan pengguna ke dashboard website cafe.                      |
| **Alternative******    | Tidak ada                                                                               |
| **Post Condition****** | - Jika admin: pengguna masuk ke mode admin secara otomatis.                             |
|                        | - Jika bukan admin: pengguna diarahkan ke dashboard website cafe.                       |
| **Exception Push**     | - Akun tidak terdaftar di database: sistem tetap mengarahkan ke dashboard website cafe. |

\


**3.2.2 Admin Input Menu**

|                        |                                                                              |
| ---------------------- | ---------------------------------------------------------------------------- |
| **Nama fungsi**        | **Admin Input Menu**                                                         |
| **Xref**               | Bagian 3.2.2 Input Menu                                                      |
| **Trigger**            | Admin memilih menu Kelola Menu di mode admin.                                |
| **Precondition**       | Admin sudah masuk ke mode admin.                                             |
| **Basic Path******     | 1. Admin membuka menu Kelola Menu di mode admin.                             |
|                        | 2. Admin memasukkan data menu baru, termasuk:                                |
|                        | - Nama menu                                                                  |
|                        | - Harga menu                                                                 |
|                        | - Deskripsi menu                                                             |
|                        | - Gambar menu                                                                |
|                        | 3. Admin menyimpan data menu.                                                |
|                        | 4. Sistem menyimpan data ke database.                                        |
|                        | 5. Sistem menampilkan menu baru di website cafe untuk customer.              |
| **Alternative******    | Tidak ada                                                                    |
| **Post Condition****** | Data menu berhasil ditambahkan dan tampil di website cafe.                   |
| **Exception Push**     | - Gagal menyimpan jika data tidak lengkap atau koneksi ke database terputus. |

\
\


**3.2.3 Admin Input menu rekomendasi** 

|                        |                                                                                          |
| ---------------------- | ---------------------------------------------------------------------------------------- |
| **Nama fungsi**        | **Admin Input Menu rekomendasi**                                                         |
| **Xref**               | Bagian 3.2.3 Input Menu Rekomendasi                                                      |
| **Trigger**            | Admin memilih menu Kelola Menu Rekomendasi di mode admin.                                |
| **Precondition**       | Admin sudah masuk ke mode admin                                                          |
| **Basic Path******     | 1. Admin membuka menu Kelola Menu Rekomendasi di mode admin.                             |
|                        | 2. Admin melihat daftar menu yang tersedia.                                              |
|                        | 3. Admin memilih menu yang akan dijadikan sebagai rekomendasi.                           |
|                        | 4. Admin menyimpan perubahan.                                                            |
|                        | 5. Sistem menyimpan status menu sebagai rekomendasi di database.                         |
|                        | 6. Sistem secara otomatis menampilkan menu rekomendasi di slider dashboard website cafe. |
| **Alternative******    | Tidak ada                                                                                |
| **Post Condition****** | Menu yang dipilih berhasil ditambahkan ke slider rekomendasi di dashboard.               |
| **Exception Push**     | - Gagal menyimpan                                                                        |
|                        | - Menu tidak ditemukan dalam daftar menu yang tersedia.                                  |

\


**3.2.4 Admin Kelola Galeri**

|                        |                                                                                          |
| ---------------------- | ---------------------------------------------------------------------------------------- |
| **Nama fungsi**        | **Admin Kelola Galeri**                                                                  |
| **Xref**               | Bagian 3.2.4 Kelola Galeri                                                               |
| **Trigger**            | Admin memilih menu Kelola Galeri di mode admin.                                          |
| **Precondition**       | Admin sudah masuk ke mode admin.                                                         |
| **Basic Path******     | 1. Admin membuka menu Kelola Galeri di mode admin.                                       |
|                        | 2. Admin dapat:                                                                          |
|                        | - Menambahkan foto baru ke galeri dengan mengunggah file gambar.                         |
|                        | - Menghapus foto yang ada di galeri.                                                     |
|                        | 3. Admin menyimpan perubahan.                                                            |
|                        | 4. Sistem memperbarui data galeri di database.                                           |
|                        | 5. Sistem menampilkan galeri yang diperbarui di website cafe.                            |
| **Alternative******    | Tidak ada                                                                                |
| **Post Condition****** | Foto berhasil ditambahkan atau dihapus, dan galeri di website diperbarui.                |
| **Exception Push**     | - Gagal menyimpan perubahan jika file gambar tidak valid atau koneksi database terputus. |
|                        | - File gambar melebihi ukuran yang diizinkan.                                            |

\


**3.2.5 Admin Kelola Pesan Saran**

|                        |                                                                                                                      |
| ---------------------- | -------------------------------------------------------------------------------------------------------------------- |
| **Nama Fungsi**        | **Admin Kelola Pesan Saran**                                                                                         |
| **Xref**               | Bagian 3.2.5 Kelola Pesan Saran                                                                                      |
| **Trigger**            | Admin memilih menu Kelola Pesan Saran di mode admin.                                                                 |
| **Precondition**       | Admin sudah masuk ke mode admin                                                                                      |
| **Basic Path******     | 1. Admin membuka menu Kelola Galeri di mode admin.                                                                   |
|                        | 2. Sistem menampilkan daftar pesan saran dari customer yang tersimpan di database.                                   |
|                        | 3. Admin dapat melakukan tindakan:* Membaca detail pesan saran

* Menghapus pesan saran yang sudah tidak diperlukan  |
|                        | 4. Sistem memperbarui data di database sesuai tindakan admin.                                                        |
| **Alternative******    | Tidak ada                                                                                                            |
| **Post Condition****** | Pesan saran berhasil dibaca atau dihapus, dan daftar pesan saran diperbarui.                                         |
| **Exception Push**     | - Gagal menyimpan perubahan jika tulisan tidak valid atau melebihi batas                                             |

********

**3.2.6 Customer Melakukan Pemesanan Menu**

|                        |                                                                               |
| ---------------------- | ----------------------------------------------------------------------------- |
| **Nama fungsi**        | **Customer Melakukan Pemesanan Menu**                                         |
| **Xref**               | Bagian 3.2.6 Pemesanan Menu                                                   |
| **Trigger**            | Customer membuka halaman menu pada web.                                       |
| **Precondition**       | Customer sudah masuk ke halaman web.                                          |
| **Basic Path******     | 1. Customer membuka halaman menu.                                             |
|                        | 2. Sistem menampilkan daftar menu yang tersedia.                              |
|                        | 3. Customer dapat menekan tombol Order Now pada setiap menu.                  |
|                        | 4. Setiap tombol ditekan, angka pada ikon keranjang di pojok kanan bertambah. |
| **Alternative******    | Tidak ada                                                                     |
| **Post Condition****** | Menu berhasil ditambahkan ke keranjang.                                       |
| **Exception Push**     | Gagal menambahkan ke keranjang jika stok menu tidak tersedia.                 |

\


**3.2.7 Customer Mengelola Pesanan di Keranjang**

|                        |                                                                                    |
| ---------------------- | ---------------------------------------------------------------------------------- |
| **Nama fungsi**        | **Customer Mengelola Pesanan di Keranjang**                                        |
| **Xref**               | Bagian 3.2.7 Kelola Pesanan di Keranjang                                           |
| **Trigger**            | Customer membuka halaman keranjang.                                                |
| **Precondition**       | Customer sudah memiliki item di keranjang.                                         |
| **Basic Path******     | 1. Customer membuka keranjang.                                                     |
|                        | 2. Sistem menampilkan daftar pesan saran dari customer yang tersimpan di database. |
|                        | 3. Customer dapat:                                                                 |
|                        | - Menambah jumlah menu dengan tombol Tambah.                                       |
|                        | - Mengurangi jumlah menu dengan tombol Kurang.                                     |
| **Alternative******    | Tidak ada                                                                          |
| **Post Condition****** | Jumlah pesanan berhasil diperbarui di keranjang.                                   |
| **Exception Push**     | -Gagal memperbarui jumlah jika stok tidak mencukupi.                               |

\


**3.2.8 Customer Melakukan Pembayaran**

|                        |                                                                                       |
| ---------------------- | ------------------------------------------------------------------------------------- |
| **Nama fungsi**        | **Admin Input Menu rekomendasi**                                                      |
| **Xref**               | Bagian 3.2.8 Kelola Pesan Saran                                                       |
| **Trigger**            | Customer membuka menu pembayaran di keranjang.                                        |
| **Precondition**       | Customer sudah memiliki item di keranjang.                                            |
| **Basic Path******     | 1. Customer membuka menu pembayaran di keranjang.                                     |
|                        | 2. Sistem menampilkan total harga dan kode pembayaran.                                |
|                        | 3. Customer memilih metode pembayaran sesuai rekening yang dimiliki.                  |
| **Alternative******    | Tidak ada                                                                             |
| **Post Condition****** | Pembayaran berhasil diproses, dan pesanan tercatat.                                   |
| **Exception Push**     | -Gagal memproses pembayaran jika saldo tidak mencukupi atau terjadi kesalahan sistem. |

\
\


********

**3.3 Struktur Detail Kebutuhan Non - Fungsional** 

***

****![](https://lh7-rt.googleusercontent.com/docsz/AD_4nXeCqGG4gERtnL-OTSzAdbRqgkpVws-4GVaDOrdcihEOU6jjj4ndWa1DL5ahmFGSXS0w_jXkAqyCKzzmVeGb8c-ukaHj3wKxXEAXYrgR1Eg2A9vktwZTRpiel2TimKM5t0WC-bdjfw?key=2_QpGHPjQQkdDr8g-HMuORrn)****

\


 **3.3.1 Logika struktur data******&#x20;

**Tabel User**

|           |                       |                                              |
| --------- | --------------------- | -------------------------------------------- |
| Data Item | Tipe Data             | Deskripsi                                    |
| user\_id  | Int (PK)              | Auto-increment dari Id\_Admin                |
| role      | ENUM(admin, customer) | Berisi username admin untuk mengakses sistem |

\


**Tabel Menu** 

|                 |               |                                 |
| --------------- | ------------- | ------------------------------- |
| **Data Item**   | **Tipe Data** | **Deskripsi**                   |
| menu\_id        | INT(PK)       |                                 |
| name            | Varchar       | Nama menu                       |
| price           | DECIMAL       | Harga menu                      |
| description     | TEXT          | Deskripsi menu                  |
| image           | VARCHAR(255)  | Path ke file gambar menu        |
| is\_recommended | BOOLEAN       | Status menu sebagai rekomendasi |

\
\


**Tabel Order**

|               |               |                              |
| :-----------: | :-----------: | :--------------------------: |
| **Data Item** | **Tipe Data** |         **Deskripsi**        |
|   order\_id   |       PK      | Auto-increment dari Id\_menu |
|    user\_id   |       FK      |                              |
|   nama\_menu  |    varchar    | Berisi nama pada menu sistem |
|  total\_price |               |                              |

**Tabel Order\_Item**

|                 |               |                                    |
| :-------------: | :-----------: | :--------------------------------: |
|  **Data Item**  | **Tipe Data** |            **Deskripsi**           |
| order\_item\_id |    INT(PK)    |    Auto-increment dari Id\_menu    |
|    order\_id    |    INT(FK)    |    Berisi nama pada menu sistem    |
|     menu\_id    |    INT(FK)    |    Berisi harga pada menu sistem   |
|   Jumlah menu   |      INT      | Berisi gambar di dalam menu sistem |
|  Subtotal menu  |    DECIMAL    |         Subtotal harga item        |

**Tabel Feedback**

|               |               |                               |
| :-----------: | :-----------: | :---------------------------: |
| **Data Item** | **Tipe Data** |         **Deskripsi**         |
|  feedback\_id |    INT(PK)    | ID unik untuk setiap feedback |
|    user\_id   |    INT(FK)    |      Relasi ke tabel User     |
|    message    |      TEXT     |       Isi pesan feedback      |



**PEMBAGIAN TUGAS LAPORAN & PROJECT**

**1.**     **Rizqi Abdan Syakuron** (_frontend backend_ )

BAB III. 

**2.**     **Syarifah Khaila Najwa Humaira** (_frontend backend_ )

BAB II.

**3.**     **Muhammad Surya Harja** (_UI_ )


BAB I.
