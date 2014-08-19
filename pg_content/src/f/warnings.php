
        <div class="bigrow">
            <div class="clearfix grpelem widgetu1212 widgetu1212W" style="width: 554px;">
                <span class="clearfix grpelem" id="u1214-4W" style="width: 554px; 
                    <?php 
                        if( isset( $_GET[ 'id' ] )){ 
                            if( $_GET['id'] == 'rsps_masdas_mant' ){ 
                                echo 'visibility: visible; background-color: #64c178;"> New user is registered.';
                            }
                            if( $_GET['id'] == 'rsps_ms_mant' ) {
                                echo 'visibility: visible; background-color: #FF0000;"> Missing Mandotory Field(s). ';
                            }
                        } else { echo '">'; }
                    ?>
                </span>
            </div>  
        </div>
    