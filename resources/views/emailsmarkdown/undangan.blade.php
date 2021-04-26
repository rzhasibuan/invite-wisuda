<style>
    .ucapan {
        text-align: justify;
    }
    .catatan{
        text-align: center;
    }

    td,th{
        text-align: left;
        padding: 5px;
    }
    .content{
        color: grey !important;
    }
    p{
        color: gray !important;
    }
</style>
@component('mail::message')
# Undangan Pendamping Wisudawan/Wisudawati 
<div class="content">
    <p>Assalamualaikum wa rahmatullahi wa barakatuh. </p>

<p class="ucapan">Dengan ini kami ucapkan selamat atas keberhasilan {{$data->nama}} telah menyelesaikan Pendidikannya di Universitas Tjut Nyak Dhien pada program studi {{$data->prodi}} dan dengan ini kami turut mengundang {{$data->nama}} serta keluarga dan kedua orang tua untuk menghadiri wisuda kelulusan tahun 2019.</p>
<table>
    <col width ="130">
    <tr>
        <td>Pada/Hari</td>
        <td>:</td>
        <td>Sabtu, 04 April 2020</td>
    </tr>
    <tr>
        <td>Jam</td>
        <td>:</td>
        <td>Pukul 08 WIB s/d Selesai</td>
    </tr>
    <tr>
        <td>Tempat</td>
        <td>:</td>
        <td>Aula Gedung B Lantai III (tiga) Universitas Tjut Nyak Dhien, Jalan Rasmi </td>
    </tr>
</table>

{{-- <h4 style="text-align :left">Susunan acara</h4>
<h6 style="text-align :left; margin-top:-20px">*susunan acara sewaktu-waktu bisa berubah</h6>
<table style="margin-top:-20px">
    <tr>
        <td>08.00 - 08.15</td>
        <td>Wisudawan memasuki ruangan</td>
    </tr>
</table> --}}
{{-- <h4 style="text-align :left">Janji Alumni</h4>
<h6 style="text-align :left; margin-top:-20px"><i>(Dibacakan ketika prosesi wisuda)</i></h6>
<h6 style="text-align :left; margin-top:-20px">demi tuhan yang maha esa</h6> --}}

<h4 style="text-align :center">Barcode Undangan:</h4>
<center style="margin-top:-20px"><img src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl={{$barcode}}&choe=UTF-8"></center>
<h4 style="text-align :center">Catatan:</h4>
<p class="catatan"><i>Barcode bisa di "<b>screenshoot</b>" dan di tunjukkan kepada petugas saat memasuki ruangan wisuda.
Barcode bergunan untuk mengisi absensi wisudawan dan Wisudawati.
Bercode juga berguna sebagai kupon konsumsi dalam pengambilan konsumsi.
Undangan berlaku maksimal untuk dua orang tamu undangan.
Tidak boleh membawa anak dibawah umur 10 tahun ke dalam ruangan wisuda.
Tidak boleh membawa makanan/minuman dari luar.
<b>Penting Barcode tidak boleh hilang atau diberikan kepada kepihak yang tidak berwajib.</b>
</i></p>


</div>
{{-- Scan barcode dibawah untuk klaim kupon makanan dan kehadiaran anda pada saat wisuda nanti 
<br>
<img src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl={{$data->id}}&choe=UTF-8"> --}}



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

{{-- {{ config('app.name') }} --}}
<h5 style="text-align :center">Sekian Kami Ucapkan Terima Kasih <br>
Pusat Sistem Informasi - UTND</h5>
@endcomponent

