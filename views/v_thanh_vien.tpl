<div class="w3-content w3-margin-top" id="container" style="max-width:1400px;">
  <div class="w3-row-padding">
    <div class="w3-col l2">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="{$doc_thanh_vien_theo_id->anhDaiDien}" style="width:100%; max-width:240px; max-height:240px" alt="Avatar">
          <div class="w3-display-topright w3-container">
            {if isset($smarty.session.dangBoi)}
              {if $smarty.session.dangBoi == $dangBoi}
                <a href="sua_anh_dai_dien.php?id={$doc_thanh_vien_theo_id->id}" class="fa fa-pencil-square-o"></a>
              {/if}
            {/if}
          </div>
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h3 class="w3-text-teal">
            {$doc_thanh_vien_theo_id->ten}
            {if isset($smarty.session.dangBoi)}
                {if $smarty.session.dangBoi == $dangBoi}
                    <a href="sua_ten_thanh_vien.php?id={$doc_thanh_vien_theo_id->id}" class="fa fa-pencil-square-o"></a>
                {/if}
            {/if}
            </h3>
          </div>
        </div>
      </div><br>
      {if isset($smarty.session.dangBoi)}
          {if $smarty.session.dangBoi == $dangBoi}
              <a href="doi_mat_khau.php?id={$doc_thanh_vien_theo_id->id}" class="w3-green w3-button w3-margin-bottom">Đổi mật khẩu</a>
          {/if}
      {/if}
    </div>
    <div class="w3-col l10 ">
    <div class="item_lien_quan_ca_si">
      <h5 class="title_item_bai_hat w3-text-purple d-inline">Bài hát của {$doc_thanh_vien_theo_id->ten}</h5> 
      {if isset($smarty.session.dangBoi)}
        {if $smarty.session.dangBoi == $dangBoi}
            <a href="them.php" class="fa fa-plus"></a>
        {/if}
      {/if}
      <ul class="w3-ul w3-card-4">
        {foreach $doc_bai_hat as $dbh}         
        <li class="w3-bar">
          <a href="bai-hat/{thu_vien::Bo_dau($dbh->tenBaiHat)}/{$dbh->id}.htm"><i class="fa fa-play w3-bar-item w3-circle w3-hide-small" aria-hidden="true" style="width:85px"></i></a>
          <div class="w3-bar-item">
            <a class="item_bai_hat" href="bai-hat/{thu_vien::Bo_dau($dbh->tenBaiHat)}/{$dbh->id}.htm">{$dbh->tenBaiHat}</a> 
          </div>
          <div class="w3-right">
            {if isset($smarty.session.dangBoi)}
                {if $smarty.session.dangBoi == $dangBoi}
                    <a href="sua.php?id={$dbh->id}&caSi={$dbh->caSi}&album={$dbh->album}&theLoai={$dbh->theLoai}" class="fa fa-pencil-square-o"></a>
                {/if}
                {if $smarty.session.phanQuyen =='1'}
                    <a href="xoa_bai_hat.php?id={$dbh->id}" class="fa fa-trash"></a>
                {/if}
            {/if}
          </div>
        </li>
        {/foreach}
      </ul>
      <div class="w3-bar w3-center phan_trang">
        <a href="#">{$pt_doc_bai_hat}</a>
      </div>
    </div>
    <div class="item_lien_quan_ca_si">
        <h5 class="w3-text-purple d-inline">Album của {$doc_thanh_vien_theo_id->ten}</h5>
        {if isset($smarty.session.dangBoi)}
          {if $smarty.session.dangBoi == $dangBoi}
              <a href="them.php" class="fa fa-plus"></a>
          {/if}
        {/if}
        <ul class="w3-ul w3-card-4">
          {foreach $doc_album as $dab} 
          <li class="w3-bar">
              <img src="{$dab->artworkPath}" class="w3-bar-item w3-circle w3-hide-small" style="width:86px">
              <div class="w3-bar-item">
                  <a class="item_album" href="playlist/{$dab->id}/{thu_vien::Bo_dau($dab->tenAlbum)}.htm">{$dab->tenAlbum}</a><br>
                  <a class="item_the_loai" href="theloai.php?id={$dab->theLoai}">{$dab->tenTheLoai}</a>
              </div>
              <div class="w3-right">
                {if isset($smarty.session.dangBoi)}
                    {if $smarty.session.dangBoi == $dangBoi}
                        <a href="sua_album.php?id={$dab->id}&caSi={$dab->caSi}&theLoai={$dab->theLoai}" class="fa fa-pencil-square-o"></a>
                    {/if}
                    {if $smarty.session.phanQuyen =='1'}
                        <a href="xoa_album.php?id={$dab->id}" class="fa fa-trash"></a>
                    {/if}
                {/if}
              </div>
          </li>
          {/foreach}
        </ul>
    </div>
  </div>
</div>
</div>