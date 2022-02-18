<?php view('header');  ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
      <h5>Mesaj listesi</h5>
     
    </div>
    <div class="widget-content nopadding">

     <table class="table table-bordered table-striped">
        <thead>
          <tr>
           <th>Tarih</th>
            <th>Gönderen</th>
            <th>Mail Adresi</th>
            <th>Açıklama</th>
            
            <th>cevap tarihi</th>
            <th >İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach ($mesaj as $key) { ?>
          <tr class="odd gradeX">
            <td><?php echo $key->date; ?></td>
           
            <td><?php echo $key->isim; ?></td>
            <td><?php echo $key->email; ?></td>
            <td><?php echo kelimebol($key->mesaj,100); ?></td>
            <td><?php echo $key->senddate; ?></td>
            <td  style="text-align:center;">
              <a href="<?php echo URL::base('panel/iletisim/oku/'.$key->id); ?> "><button><i class="fa fa-edit"></i>OKU</button></a>
           </td>
          </tr>    
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
<?php view('footer'); ?>