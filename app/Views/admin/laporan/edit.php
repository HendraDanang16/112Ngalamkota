 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Detail News </h1>
     <ol class="breadcrumb">
       <li><a href="/superAdmin/report">Laporan Kejadian</a></li>
       <li><i class="fa fa-angle-right"></i>Edit Laporan Kejadian</li>
     </ol>
   </div>

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content row">
       <!-- Page Header-->
       <!-- Page Content -->
       <div class="form-group row">
                 <div class="col-sm-11 ml-auto">
                   <!-- <button type="submit" data-dismiss="modal" class="btn btn-primary">Kembali</button> -->
                   <a href="<?= base_url('report') ?>" class="btn btn-primary">Kembali</a>
                 </div>
               </div>
       <div class="col-lg-12">
       
       
         <div class="block">
           <div class="block-body">
             <!-- <form class="form-horizontal row" action="/report/editReport/" method="post" enctype="multipart/form-data"> -->
             <form class="form-horizontal row" action="/report/edit/" method="post">
              <input type="hidden" name="id" value="<?= $reportdata[0]['id_pelapor']; ?>" />
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Tanggal</strong></label>
                   <input type="date" class="form-control" value="<?= $reportdata[0]['tanggal'] ?>" name="tanggal_report" id="tanggal_report" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Kejadian</strong></label>
                   <input type="text" class="form-control" value="<?= $reportdata[0]['kejadian'] ?>" name="kejadian_report" id="kejadian_report" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Lokasi Kejadian</strong></label>
                   <input type="text" class="form-control" value="<?= $reportdata[0]['lokasi_kejadian'] ?>" name="lokasi_report" id="lokasi_report" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Nama Pelapor</strong></label>
                   <input type="text" class="form-control" value="<?= $reportdata[0]['nama_pelapor'] ?>" name="nama_pelapor" id="nama_pelapor" required>
               </div>
               <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Tindak Lanjut</strong></label>
                   <input type="text" class="form-control" value="<?= $reportdata[0]['tindak_lanjut'] ?>" name="tindak_lanjut" id="tindak_lanjut" required>
               </div>
               <!-- <div class="form-group col-lg-6">
                 <label class="col-sm-1 form-control-label"><strong>Dokumentasi</strong></label>
                 <p>Abaikan jika tidak ingin mengubah dokumen</p>
                   <input type="file" class="form-control" value="" name="dokumentasiReport" id="dokumentasiReport">
               </div> -->
               
               <div class="line"></div>
               <div class="col-lg-12">
               <button type="submit" class="btn btn-warning">Update</button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.content -->
 </div>