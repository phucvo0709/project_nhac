<div class="w3-container" id="container">
	<div class="w3-container">
        <div class="w3-responsive">
        <h2 class="w3-text-teal h2">Quản lý bài hát</h2>
            <table class="w3-table-all" id="table_loai_sua">
                <thead>
                    <tr class="w3-red">
                        <th>Tên Album</th>
                        <th>Số bài hát</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <div id="table-div">
                {foreach $doc_so_bai_hat as $dsbh}
                    <h3 class="title-item">
                        <span><a href="song.php?id={$dsbh->id}" target="_blank">{$dsbh->tenBaiHat}</a></span>
                    </h3>
                    <h4 class="singer-name">
                        <span><a href="#" title="{$dsbh->tenCaSi}">{$dsbh->tenCaSi}</a></span>
                    </h4> 
                {/foreach}
                </div>
                {foreach $doc_album as $dab}
                <tr class="item">
                    <td><a href="album.php?id={$dab->id}" target="_blank">{$dab->tenAlbum}</a></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" id="idAlbum" name="idAlbum" value="{$dab->id}">
                            <button class="w3-button w3-teal" type="submit" id="btn_xem" name="btn_xem">Xem bài hát</button>
                        </form>
                    </td>
                    <td>
                        {($dab->hienThi == 0)? "Chưa duyệt" : "Đã duyệt"}
                    </td>
                    <td>
                        <form action="quan_ly_album.php?id={$dab->id}" method="post" style="float:left">
                            <button class="w3-button w3-green" type="submit" name="btn_duyet">Duyệt</button>
                        </form>
                        <form action="quan_ly_album.php?id={$dab->id}" method="post" >
                            <button class="w3-button w3-red" name="btn_xoa" style="width:64.65px">Xóa</button>
                        </form>
                    </td>
                </tr>
                {/foreach}
            </table>
        </div>
	</div>
</div>