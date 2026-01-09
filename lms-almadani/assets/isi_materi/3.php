<div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
    <p class="font-bold text-yellow-800">📌 Rangkuman Singkat</p>
    <p class="text-sm text-yellow-700 mt-1">
        HTML berfungsi menyusun struktur halaman web agar teks, gambar, dan elemen lain tampil dengan baik. Kita akan mempraktekkan elemen-elemen dasarnya.
    </p>
</div>

<h3 class="text-xl font-bold text-blue-800 mb-2">A. Struktur Dasar</h3>
<p class="mb-4">
    Wajib digunakan dalam setiap file HTML:
</p>
<pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-x-auto mb-6">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
     &lt;title&gt;Judul Halaman&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
     &lt;/body&gt;
&lt;/html&gt;
</pre>

<h3 class="text-xl font-bold text-blue-800 mb-2">B. Elemen Teks</h3>
<p class="mb-2">Gunakan tag ini agar teks rapi dan mudah dibaca:</p>
<ul class="list-disc pl-5 mb-6 space-y-2">
    <li><strong>&lt;h1&gt;:</strong> Digunakan untuk Judul Utama.</li>
    <li><strong>&lt;p&gt;:</strong> Digunakan untuk Menulis Paragraf.</li>
</ul>

<h3 class="text-xl font-bold text-blue-800 mb-2">C. Gambar dan Link</h3>
<p class="mb-2">Menambahkan media dan navigasi:</p>
<div class="space-y-4 mb-6">
    <div class="p-3 bg-white border rounded shadow-sm">
        <code class="text-pink-600 font-bold">&lt;img src="alamat.jpg" alt="teks"&gt;</code>
        <p class="text-sm text-gray-600 mt-1">Atribut <code>src</code> untuk alamat gambar, <code>alt</code> untuk teks alternatif.</p>
    </div>
    <div class="p-3 bg-white border rounded shadow-sm">
        <code class="text-pink-600 font-bold">&lt;a href="halaman.html"&gt;Klik&lt;/a&gt;</code>
        <p class="text-sm text-gray-600 mt-1">Atribut <code>href</code> untuk tujuan link.</p>
    </div>
</div>

<h3 class="text-xl font-bold text-blue-800 mb-2">D. Membuat Daftar (List)</h3>
<p class="mb-2">Menyusun informasi secara teratur:</p>
<ul class="list-none space-y-3 mb-6">
    <li class="flex items-center gap-2">
        <span class="bg-gray-200 px-2 py-1 rounded text-xs font-mono">&lt;ul&gt;</span>
        <span>Daftar <strong>Tanpa Nomor</strong> (Simbol Bulat).</span>
    </li>
    <li class="flex items-center gap-2">
        <span class="bg-gray-200 px-2 py-1 rounded text-xs font-mono">&lt;ol&gt;</span>
        <span>Daftar <strong>Bernomor</strong> (1, 2, 3).</span>
    </li>
    <li class="flex items-center gap-2">
        <span class="bg-gray-200 px-2 py-1 rounded text-xs font-mono">&lt;li&gt;</span>
        <span>Tag untuk setiap <strong>Item</strong> dalam daftar.</span>
    </li>
</ul>

<div class="bg-blue-600 text-white p-4 rounded-xl text-center shadow-lg mt-8">
    <h4 class="font-bold text-lg mb-1">🏁 Penutup</h4>
    <p class="text-sm opacity-90">
        Dengan tag-tag dasar ini, kita sudah bisa membuat halaman web sederhana. Ini adalah fondasi penting sebelum belajar CSS dan JavaScript!
    </p>
</div>