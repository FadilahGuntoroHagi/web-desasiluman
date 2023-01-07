<style media="screen">
  .table-bordered {
    border-right: 3px solid black:
  }

  #profil p {
    text-indent: 40px;
    font-weight: 350;
  }
</style>
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="containers">
    <div class="section-title text-center">
      <h2>Profil Desa Siluman</h2>
    </div>
    <div class="row">
      <div class="col-md-12 mt-5 text-left" id="profil">
        <h3>Visi</h3>
        <p class="lead text-center" style="text-transform:capitalize;">“MEMBANGUN MASYARAKAT CERDAS, BERKUALITAS DAN SEJAHTERA SERTA PENINGKATAN PELAYANAN MENUJU KEMAKMURAN MASYARAKAT DESA YANG ADIL DAN MERATA”</p>
        <p class="text-justify">Visi merupakan tujuan akhir pembangunan di Desa dalam kurun waktu setama 5 tahun mendatang.Visi Misi Desa ini dirumuskan dan ditetapkan berdasarkan komitmen bersama dan berbagai unsur masyarakat Desa dalam suatu lokakarya Desa yang melibatkan segenap unsur masyarakat di Desa.Visi, Misi desa ini ditetapkan dengan memperhatikan kondisi internal dan eksternal Desa serta potensi dan permasalahan yang ada.Juga mempertimbangkan berbagai kekuatan dan kesempatan yang ada dan memungkinkan untuk dikembangkan, serta kelemahan dan ancaman yang diupayakan semaksimal mungkin untuk diatasi.</p>
        <p class="text-justify">Visi Desa akan bisa dicapai apabila semua masyarakat memahami dan menjalankan program Pembangunan Desa secara gotong royong. juga diperlukan kerjasama dan dukungan semua pihak serta perlu dikembangkan sistem dan mekanisme yang aspiratif, partisipatif, transparan, demokratis, adil dan bertanggung jawab, agar pembangunan dapat mencapai hasil yang maksimal dan berdasar pada kebutuhan masyarakat.</p>
        <br>
        <h3>Misi</h3>
        <p class="text-justify">Misi merupakan rumusan umum mengenai upaya-upaya yang akan dilaksanakan untuk mewujudkan visi. Misi berfungsi sebagai pemersatu gerak, langkah dan tindakan yang nyata bagi segenap komponen yang penyelenggara pemerintahan tanpa mengabaikan mandat yang diberikanya. Adapun misi pembangunan Desa Siluman untuk 6 tahun kedepan adalah sebagai berikut :</p>
        <ul class="">
          <li>Mewujudkan masyarakat desa dapat mengenyam pendidikan formal maupun informal dengan cara memberikan bantuan kesejahteraan RTM dan program pendidikan yang layak bagi anak yatim.</li>
          <li>Mewujudkan kehidupan masyarakat desa yang semakin baik sehingga memiliki nilai jual terhadap cipta, rasa dan karsanya.</li>
          <li>Mewujudkan kehidupan ekonomi masyarakat desa semakin baik melalui peningkatan produktifitas hasil pertanian dengan jalan normalisasi saluran irigasi.</li>
          <li>Mewujudkan rasa keadilan masyarakat dalam kerangka peningkatan pelayanan masyarakat yang lebih baik harus dibarengi dengan hati yang ikhlas.</li>
          <li>Mewujudkan pemerataan pembangunan dan hasil-hasil yang dapat dirasakan oleh masyarakat desa tanpa memandang kepentingan politik SARA dan antar golongan.</li>
          <li>Mewujudkan dan meningkatkan ketertiban dan keamanan bagi desa.</li>
        </ul><br>
        <!-- <div class="col-md-12 ml-3"> -->
        <h3>Susunan Organisasi dan Tata Kerja Pemerintah Desa Siluman</h3><br>
        <img src="<?= base_url() ?>assets/img/susunan2.png" alt="" style="width:100%;" id="imgsusunan2"><br><br>
        <h3>Jumlah Penduduk</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Jumlah Laki-laki</th>
              <th scope="col">Jumlah Perempuan</th>
              <th scope="col">Jumlah Penduduk</th>
              <th scope="col">Jumlah KK</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>3281</td>
              <td>3472</td>
              <td>6753</td>
              <td>2042</td>
            </tr>
          </tbody>
        </table>
        <!-- </div> -->
        <br>
        <h3>Sejarah</h3>
        <p class="text-justify">Siluman adalah salah satu desa di kecamatan Pabuaran, Subang, Jawa Barat, Indonesia. Sebagain besar penduduknya bermata pencaharian petani. Home industri yang berkembang adalah pengrajin meubel. Kepala desa yang terpilih dari hasil pemilihan langsung tahun 2012 dan dilantik tanggal 11 Oktober 2012 adalah bapak Warman dan merupakan putra daerah.</p>
        <p class="text-justify">Desa Siluman didirikan oleh Zahrah qurrata’ain pada tahun 1908 M, dan kata Siluman diambil dari nama sebuah kali kecil CISILUMAN yang sekarang termasuk kewilayah Desa Kadawung.
        <p class="text-justify">Kali Cisiluman tersebut dipergunakan tempat persembunyian para pejuang desa dalam melawan penjajah Belanda, maka untuk mengenang sejarah, kali Cisiluman tersebut ditetapkan sebagai nama sebuah Desa, yang sekarang dikenal Desa Siluman.</p>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["A", "B", "AB", "O", "Tidak Tahu"],
      // labels: ["A", "B", "AB", "O", "A-", "B-", "AB-", "O-", "A+", "B+", "AB+", "O+","Belum Diketahui"],
      datasets: [{
        // label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
        // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","red","teal","skyblue","lime","blue","yellow","green","maroon"],
        data: [2478, 5267, 734, 784, 433]
        // data: [2478,5267,734,784,433,290,120,175,734,784,433,290,111]
      }]
    },
    options: {
      legend: {
        display: false
      },
      title: {
        display: true,
        text: 'Total Penduduk : 6651'
      }
    }
  });
</script>









<!-- <?php //echo form_open_multipart(base_url("surat/isi"),array('class' => 'form-horizontal')); 
      ?>
<textarea name="isiartikel" id="ckeditor" class="ckeditor" rows="8" cols="80"></textarea>
<input type="submit" name="gas" value="Gas">
<?php //echo form_close(); 
?>
<script type="text/javascript">
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline = editable;
</script> -->