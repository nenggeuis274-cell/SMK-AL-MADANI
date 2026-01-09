<h3 class="text-xl font-bold text-blue-800 mb-2">A. Pengertian HTML</h3>
<p class="mb-4 text-justify">
    HTML adalah singkatan dari Hypertext Markup Language. HTML merupakan salah satu bahasa pengkodean atau pemrograman yang digunakan untuk membuat halaman website yang ditampilkan pada web browser. Sebagian besar halaman yang kamu temukan pada internet kebanyakan menggunakan Bahasa HTML.
</p>

<h4 class="font-bold text-gray-700 mt-4 mb-2">Sejarah Singkat</h4>
<p class="mb-4 text-justify">
    HTML diciptakan oleh Sir Tim Berners-Lee pada akhir tahun 1991 namun tidak dirilis secara resmi. Beliau merilis HTML versi pertama pada tahun 1993 dengan tujuan untuk berbagi informasi yang dapat dibaca dan diakses melalui web browser. Hingga saat ini, versi HTML sudah mencapai versi 5 yang dirilis pada tahun 2012.
</p>

<h3 class="text-xl font-bold text-blue-800 mb-2">B. Kelebihan & Kekurangan HTML</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
    <div class="bg-green-50 p-4 rounded-lg border border-green-200">
        <strong class="text-green-800 block mb-2">✅ Kelebihan</strong>
        <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
            <li>Memiliki banyak sumber dan komunitas yang sangat besar.</li>
            <li>Bersifat Open Source (gratis).</li>
            <li>Memiliki Bahasa Markup yang konsisten dan rapi.</li>
            <li>Mudah diintegrasikan dengan bahasa backend (PHP, Node.js).</li>
            <li>Bisa dijalankan oleh semua browser.</li>
            <li>Mudah dipelajari oleh pemula.</li>
        </ul>
    </div>
    <div class="bg-red-50 p-4 rounded-lg border border-red-200">
        <strong class="text-red-800 block mb-2">❌ Kekurangan</strong>
        <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
            <li>Hanya untuk halaman web statis. Perlu JS/Backend untuk fitur dinamis.</li>
            <li>Fitur baru kadang lambat dijalankan oleh browser.</li>
            <li>Tidak mendukung logic pemrograman (harus dibuat terpisah).</li>
        </ul>
    </div>
</div>

<h3 class="text-xl font-bold text-blue-800 mb-2">C. Struktur Dasar HTML</h3>
<p class="mb-4">Berikut adalah ilustrasi struktur kodingan HTML:</p>

<img src="assets/img/foto1.jpeg" alt="Struktur Dasar HTML" class="w-full max-w-lg rounded-lg shadow-md my-4 border border-gray-200 mx-auto">

<ul class="list-disc pl-5 mb-6 space-y-2">
    <li><strong>&lt;!DOCTYPE html&gt;:</strong> Memberi tahu browser bahwa dokumen adalah HTML.</li>
    <li><strong>&lt;html&gt;:</strong> Pembungkus seluruh elemen dalam dokumen.</li>
    <li><strong>&lt;head&gt;:</strong> Berisi informasi meta (judul, CSS) yang tidak tampil di halaman.</li>
    <li><strong>&lt;body&gt;:</strong> Berisi konten utama yang ditampilkan (teks, gambar).</li>
</ul>

<h3 class="text-xl font-bold text-blue-800 mb-2">D. Tag-Tag Umum HTML</h3>
<p class="mb-4">Tag HTML digunakan untuk memberi tahu browser cara menampilkan konten. Berikut tag yang sering digunakan:</p>
<div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-600 border border-gray-200 rounded-lg">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                <th class="px-4 py-2 border-r">Tag</th>
                <th class="px-4 py-2">Fungsi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            <tr><td class="px-4 py-2 font-mono text-blue-600">&lt;h1&gt; - &lt;h6&gt;</td><td class="px-4 py-2">Membuat Heading (Judul).</td></tr>
            <tr><td class="px-4 py-2 font-mono text-blue-600">&lt;p&gt;</td><td class="px-4 py-2">Membuat Paragraf.</td></tr>
            <tr><td class="px-4 py-2 font-mono text-blue-600">&lt;a&gt;</td><td class="px-4 py-2">Membuat Link (Tautan).</td></tr>
            <tr><td class="px-4 py-2 font-mono text-blue-600">&lt;img&gt;</td><td class="px-4 py-2">Menampilkan Gambar.</td></tr>
            <tr><td class="px-4 py-2 font-mono text-blue-600">&lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;</td><td class="px-4 py-2">Membuat Daftar (List).</td></tr>
            <tr><td class="px-4 py-2 font-mono text-blue-600">&lt;table&gt;</td><td class="px-4 py-2">Membuat Tabel.</td></tr>
        </tbody>
    </table>
</div>