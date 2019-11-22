<div class="card mb-4 py-2 border-left-info">
    <div class="card-body">
        <h3>Informasi</h3>
        <?php foreach($db->informasi() as $i) :?>

        <form >
            <div class="row" >
                <div class="col-md-1"> </div>
                <div class="col-md-8">
                    <div class="form-group ">
                        <label>Judul Informasi :    <b> <?= $i->judul_informasi ?></b> </label><br>
                    
                    </div>
                    <div class="form-group border-bottom-warning" style="background-color:#f9f9f9;padding:30px;">
                        <label> Informasi</label><br>
                        <?= $i->keterangan ?>
                    </div>
                    <div class="form-group text-right">
                       <a href="?module=informasi/edit" class=" btn btn-info btn-sm "><i class="fa fa-edit"></i> Edit</a>
                        <a href="index.php" class="btn btn-warning btn-sm ">Batal</a>
                    </div>
                </div>

            </div>
    </div>
    </form>
    <?php endforeach ?>
</div>
</div>
<!DOCTYPE html>