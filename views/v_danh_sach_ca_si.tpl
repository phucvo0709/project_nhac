   <div class="container" id="container">
        <div class="content_ca_si">
            <div class="center">
                <div class="w3-row">
                    {foreach $doc_ca_si as $dcs}                        
                    <div class="w3-col s12 m6 l4 item">
                        <div class="w3-card-2">
                            <img class="w3-hover-sepia" src="{$dcs->anhCaSi}" style="width:100%">
                            <div class="w3-container">
                                <h3 class="w3-text-blue w3-margin-top ten_ca_si"><a href="casi.php?id={$dcs->id}" class="w3-text-blue w3-margin-top ten_ca_si">{$dcs->tenCaSi}</a></h3>
                            </div>
                        </div>

                    </div>
                    {/foreach}
                </div>
                <div class="w3-bar w3-center">
                    <a href="#" class="w3-large">{$pt_doc_ca_si}</a>
                </div>  
            </div>
        </div>
    </div>