<div class="container-fluid px-5">
    <h1 class="h3 mb-2 text-primary font-weight-bold">Edit Materi Pembelajaran / Pokok Pembahasan</h1>
    <h6 class="h6 mb-3 text-black">Silahkan edit materi pembelajaran pada form di bawah ini.</h6>
    <hr/>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
        <?php foreach($mpb as $mpb):?>
            <form action="<?php echo base_url('mpb/update/' . $mpb->idx_mpb); ?>" method="post">
                
                <div class="form-group">
                    <h5>Skf_mpb</h5>
                    <input type="text" id="skf_mpb" name="skf_mpb" class="form-control" placeholder="Skf_mpb" autocomplete="off" value="<?= $mpb->skf_mpb?>" required>
                </div>
                <div class="form-group">
                    <h5>Kode Mata Kuliah (smk_mpb)</h5>
                    <input type="text" id="smk_mpb" name="smk_mpb" class="form-control" placeholder="smk_mpb" autocomplete="off" value="<?= $mpb->smk_mpb?>" required>
                </div>
                <div class="form-group">
                    <h5>Mtk_mpb</h5>
                    <input type="number" id="mtk_mpb" name="mtk_mpb" class="form-control" placeholder="Mtk_mpb" autocomplete="off" value="<?= $mpb->mtk_mpb?>" required>
                </div>
                <div class="form-group">
                    <h5>Rps_mpb</h5>
                    <input type="number" id="rps_mpb" name="rps_mpb" class="form-control" placeholder="Rps_mpb" autocomplete="off" value="<?= $mpb->rps_mpb?>" required>
                </div>
                <div class="form-group">
                    <h5>Materi Pembelajaran / Pembahasan (pbh_mpb)</h5>
                    <textarea id="pbh_mpb" name="pbh_mpb" class="form-control" placeholder="Materi Pembelajaran / Pembahasan" autocomplete="off" required><?= $mpb->pbh_mpb?></textarea>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('mpb') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php endforeach;?>
            </form>
        </div>
    </div>
</div>