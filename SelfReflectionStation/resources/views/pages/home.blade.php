
<div class="main row" id="landingPG">
            <div class="col-lg-12">
                <h1 class="display-4">Self Reflection Station</h1>
            </div>
            <div class="col-lg-4">PIC HERE</div>
            <div class="col-lg-8">
                <div>
                    <p class="p-content"> 
                        <?php
                        //This code reads a .txt file to be read to string for html
                        $filePath = base_path('resources\contents\Texts\Introduction.txt');
                        try {
                            if(!file_exists($filePath)){throw new Exception('File not found.');}
                            $fp = fopen($filePath, "r");
                            if ( !$fp ) { throw new Exception('File open failed.'); }
                            echo stream_get_contents($fp);
                            fclose($fp);
                        } catch (\Throwable $th) {
                            echo $th;
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>