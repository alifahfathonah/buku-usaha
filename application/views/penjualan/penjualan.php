<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row mt-5">
            <div class="col-lg-12 mt-2">
                <?= $this->session->flashdata('pesan'); ?>
                <a href="<?= base_url()  ?>keuangan/tambah_penjualan" class="btn btn-primary mb-3">
                    Tambah Penjualan Produk
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered table-light shadow-sm p-3 mb-5 bg-white rounded">
                        <thead>
                            <tr>
                                <th scope="col" width="5%" class="text-center">No</th>
                                <th scope="col" class="text-center">Nama Produk</th>
                                <th scope="col" width="5%" class="text-center">Unit</th>
                                <th scope="col" width="15%" class="text-center">Keuntungan</th>
                                <th scope="col" width="15%" class="text-center">Tanggal Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($penjualan as $pj) : ?>
                                <tr>
                                    <th scope="row"><?= $start + 1; ?></th>
                                    <td class="text-capitalize"><?= $pj['produk']; ?></td>
                                    <td class="text-center"><?= $pj['unit']; ?></td>
                                    <td class="text-center"><?= number_format($pj['total_untung'], 0, ',', '.') ?></td>
                                    <td class="text-center font-weight-bolder"><?= $pj['tanggal_jual']; ?></td>
                                </tr>
                                <?php $start++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>