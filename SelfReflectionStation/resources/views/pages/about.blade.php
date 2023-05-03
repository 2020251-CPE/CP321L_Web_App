
<div class="row">
    <div class="col-lg-12">
        <h1 class="display-4">About Us</h1>
    </div>
    <div class="col-lg-4">
        <h1 class="display-6">Khryzza</h1>
    </div>
    <div class="col-lg-4">
        <h1 class="display-6">Shairmaine</h1>
    </div>
    <div class="col-lg-4">
        <h1 class="display-6">Angelo</h1>
    </div>
    <div class="col-lg-12">
        <p class="p-content"><?php 
            $filePath = base_path('resources\contents\Texts\About.txt');
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