<div class="w3-container" id="container">
	<div class="w3-container">
    <div class="w3-responsive">
    <h2 class="w3-text-teal h2">Quản lý bài hát</h2>
      <table class="w3-table-all" id="table_loai_sua">
        <thead>
          <tr class="w3-red">
              <th>Tên bài hát</th>
              <th>Ca sĩ</th>
              <th>Thể loại</th>
              <th>Lượt nghe</th>
              <th>Đăng bởi</th>
              <th>Hành động</th>
          </tr>
        </thead>
        {foreach $doc_bai_hat as $dbh}
          <tr class="item">
              <td><a href="song.php?id={$dbh->id}" target="_blank">{$dbh->tenBaiHat}</a></td>
              <td><a href="casi.php?id={$dbh->caSi}" target="_blank">{$dbh->tenCaSi}</a></td>
              <td><a href="theloai.php?id={$dbh->theLoai}" target="_blank">{$dbh->tenTheLoai}</a></td>
              <td><i class="fa fa-headphones fa-1"> {$dbh->luotNghe}</i></td>
              <td><a href="thanhvien.php?id={$dbh->dangBoi}" target="_blank">{$dbh->ten}</a></td>
              <td>
                  <form action="sua.php?id={$dbh->id}" method="post" style="float:left">
                      <button class="w3-button w3-green" type="submit" name="btn_duyet">Sửa</button>
                  </form>
                  <form action="xoa_bai_hat.php?id={$dbh->id}" method="post" >
                      <button class="w3-button w3-red" name="btn_xoa" style="width:64.65px">Xóa</button>
                  </form>
              </td>
          </tr>
        {/foreach}
      </table>
    </div>
	</div>
    <div class="w3-bar w3-center">
        <a href="#" class="w3-large">{$pt_doc_bai_hat}</a>
    </div>  
</div>