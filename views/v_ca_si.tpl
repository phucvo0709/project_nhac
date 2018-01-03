<div class="w3-content w3-margin-top" id="container" style="max-width:1400px;">
  <div class="w3-row-padding">
    <div class="w3-col l2">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="{$doc_ca_si->anhCaSi}" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h3 class="w3-text-teal">{$doc_ca_si->tenCaSi}</h3>
          </div>
        </div>
      </div><br>
    </div>
    <div class="w3-col l10 ">
    <div class="item_lien_quan_ca_si">
      <h5 class="title_item_bai_hat w3-text-purple">Bài hát của {$doc_ca_si->tenCaSi}</h5>
      <ul class="w3-ul w3-card-4">
      {foreach $doc_bai_hat as $dbh}               
        <li class="w3-bar">
          <a href="bai-hat/{thu_vien::Bo_dau($dbh->tenBaiHat)}/{$dbh->id}.htm"><i class="fa fa-play w3-bar-item w3-circle w3-hide-small" aria-hidden="true" style="width:85px"></i></a>
          <div class="w3-bar-item">
            <a class="item_bai_hat" href="bai-hat/{thu_vien::Bo_dau($dbh->tenBaiHat)}/{$dbh->id}.htm">{$dbh->tenBaiHat}</a><br>
          </div>
        </li>
      {/foreach}
      </ul>
      <div class="w3-bar w3-center phan_trang">
        <a href="#">{$pt_doc_bai_hat}</a>
      </div>
    </div>
    <div class="item_lien_quan_ca_si">
      <h5 class="w3-text-purple">Album {$doc_ca_si->tenCaSi}</h5>
      <ul class="w3-ul w3-card-4">
      {foreach $doc_album as $dab}
      <li class="w3-bar">
          <img src="{$dab->artworkPath}" class="w3-bar-item w3-circle w3-hide-small" style="width:86px">
          <div class="w3-bar-item">
              <a class="item_album" href="album.php?id={$dab->id}">{$dab->tenAlbum}</a><br>
              <a class="item_the_loai" href="theloai.php?id={$dab->theLoai}">{$dab->tenTheLoai}</a>
          </div>
      </li>
      {/foreach}
      </ul>
    </div>
  </div>
</div>
</div>