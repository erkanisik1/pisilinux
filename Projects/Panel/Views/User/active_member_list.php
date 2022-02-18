<?php import::view('header'); ?>
<a href="/panel/member/pending_member"><button class="btn btn-primary">Members Pending Approval</button></a>
<a href="/panel/member/disable_member"><button class="btn btn-primary">Banned Members</button></a>
<h1>User Management</h1>
<div class="span12">

  <div class="widget-box">
   <div class="widget-title"> <span class="icon"> <i class="fa fa-bars"></i> </span>
    <h5>Onaylanmış Üyeler</h5>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
     <thead>
      <tr>
        <th width="10">#</th>
        <th width="100">KAYIT TARİHİ</th>
        <th width="50">AVATAR</th>
        <th>ÜYE ADI</th>
        <th>MAİL ADRESİ</th>
        <th width="50">YETKİSİ</th>
        <th width="100">SON GİRİŞ TARİHİ</th>        
        <th width="100">İŞLEMLER</th> 
      </tr>
    </thead>
    <tbody role="alert" aria-live="polite" aria-relevant="all">
      <?php foreach ($active_member as $key): ?>
        <tr cclass="gradeA odd">
          <td><?php echo $key->user_id; ?></td>
          <td><?php echo tcevir($key->date); ?></td>
          <td><img src="<?php echo '../'.$key->avatar; ?>" alt="" width="50"></td>
          <td><?php echo $key->username; ?></td>
          <td><?php echo $key->mail; ?></td>
          <td><?php echo member_role($key->authority); ?></td>
          <td style="text-align: center"><?php if (isset($key->login_date)) {echo $key->login_date;}  ?></td>
          <td style="text-align: center">
            <a href="#" class="disable_member" data-id='<?php echo $key->user_id ?>' ><i class="fa fa-eye-slash fa-2x" aria-hidden="true"></i></a>
            <a href="/panel/member/mail/<?php echo $key->user_id; ?> "><i class="fa fa-envelope fa-2x"></i> </a>
            <a href="/panel/member/edit/<?php echo $key->user_id; ?> "><i class="fa fa-edit fa-2x"></i> </a>
            <a href="/panel/member/delete/<?php echo $key->user_id; ?>" onclick="return confirm('Bu kaydı silmek istediğinize eminmisiniz?')">
             <i class="fa fa-trash fa-2x"></i>
           </a>
         </td>
       </tr>
     <?php endforeach ?>
   </tbody>
 </table>

</div>
</div>
</div>



<?php import::view('footer'); ?>