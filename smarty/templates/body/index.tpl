    <div class="wrapper-page">
        <div class="wrap-body container">
            <div class="row content-row">
                <div class="wrap-content col-12 col-md-9 col-lg-9 col-xl-9">
                    <div class="slider-area">
                    <!-- Slider -->
                        <div class="block-slider block-slider4">
                            <ul class="" id="bxslider-home4">
                                {foreach $slider as $sl}
                                <li>
                                    <a href="{$sl->link}">
                                        <img src="{$sl->hinh}" alt="{$sl->tieuDe}"/>
                                    </a>
                                </li>
                                {/foreach}
                            </ul>
                        </div>
                    <!-- ./Slider -->
                    </div> <!-- End slider area -->
                    <div class="section">
                        <h2 class="title-section">Album bài hát mới</h2>
                        <div class="row">
                        {foreach $doc_album as $da}
                            <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="thumbs">
                                    <a>
                                        <img  class="thumb img-fluid w3-hover-sepia" src="{$da->artworkPath}" alt="{$da->tenAlbum}">
                                    </a>
                                    <a href="playlist/{$da->id}/{thu_vien::Bo_dau($da->tenAlbum)}.htm">
                                        <img class="play-link w3-animate-zoom" src="public/images/icons/play-button.png" />
                                    </a>
                                </div>
                                <h3 class="title-item">
                                        <span><a class="title_name" href="playlist/{$da->id}/{thu_vien::Bo_dau($da->tenAlbum)}.htm">{$da->tenAlbum}</a></span>
                                </h3>
                                <h4 class="singer-name">
                                        <span><a class="size_name" href="casi.php?id={$da->caSi}" title="{$da->tenCaSi}">{$da->tenCaSi}</a></span>
                                </h4>      
                            </div>
                        {/foreach}
                        </div>
                        <h2 class="title-section">Bài hát mới</h2>
                        <div class="row">
                        {foreach $doc_bai_hat as $dbh}
                            <div class="item col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="thumbs">
                                    <a>
                                        <img  class="thumb img-fluid w3-hover-sepia" src="{$dbh->anhCaSi}" alt="{$dbh->tenBaiHat}">
                                    </a>
                                    <a href="bai-hat/{thu_vien::Bo_dau($dbh->tenBaiHat)}/{$dbh->id}.htm">
                                        <img class="play-link w3-animate-zoom" src="public/images/icons/play-button.png" />
                                    </a>
                                </div>
                                <h3 class="title-item">
                                        <span><a class="title_name" href="bai-hat/{thu_vien::Bo_dau($dbh->tenBaiHat)}/{$dbh->id}.htm">{$dbh->tenBaiHat}</a></span>
                                </h3>
                                <h4 class="singer-name">
                                        <span><a class="size_name" href="casi.php?id={$dbh->caSi}" title="{$dbh->tenCaSi}">{$dbh->tenCaSi}</a></span>
                                </h4>      
                            </div>
                        {/foreach}
                        </div>
                    </div>
                </div>
                <div class="wrap-xep-hang col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="ca_si_viet_nam">
                        <a href="danh_sach_ca_si.php">
                            <img class="anhXepHang" src="public/images/anhcasi/ca_si_viet_nam.jpg" />
                        </a>
                    </div>
                    <div class="nhung_bai_hit_moi">
                        <img class="anhXepHang" src="public/images/anhcasi/nhung_bai_hit_moi.jpg" />
                    </div>
                    <div class="nhac_phim">
                        <img class="anhXepHang" src="public/images/anhcasi/nhac_phim.jpg" />
                    </div>
                    <div class="nhac_hot">
                        <img class="anhXepHang" src="public/images/anhcasi/nhac_hot.jpg" />
                    </div>
                    <h2 class="title_xep_hang">Bảng xếp hạng</h2>
                        {foreach $xep_hang as $xh}
                            <ul class="itemm">
                                <li class="stt-xh">{$i++}</li>
                                <li class="title-item-xh"><span><a href="bai-hat/{thu_vien::Bo_dau($xh->tenBaiHat)}/{$xh->id}.htm">{$xh->tenBaiHat}</a></span></li>
                                <li class="view-xh"><span>{$xh->luotNghe}</span></li>
                            </ul>
                        {/foreach}
                </div>
            </div>
        </div>
    </div>