<?= $this->extend("layouts/main"); ?>

<?= $this->section('content'); ?>
<div class="pagetitle">
    <h1>Data Pengguna</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= route_to('users.index'); ?>">Home</a></li>
            <li class="breadcrumb-item">Data Pengguna</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="">
            <div class="card">
                <div class="card-body">
                    <?php if (session()->has('success')) : ?>
                        <div class="alert alert-success my-3 w-100 rounded alert-dismissible fade show" role="alert">
                            <strong>
                                <?= session()->getFlashdata('success'); ?>
                            </strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <h5 class="card-title">Data Pengguna</h5>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($users) : ?>
                                <?php foreach ($users as $key => $user) : ?>
                                    <tr>
                                        <th scope="row"><?= $key + 1; ?></th>
                                        <td><?= $user['name']; ?></td>
                                        <td><?= $user['age']; ?></td>
                                        <td><?= $user['address']; ?></td>
                                        <td><?= $user['phone']; ?></td>
                                        <td>
                                            <a class="btn btn-primary py-0 px-3" href="<?= base_url('/user/edit/' . $user['id']); ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger py-0 px-3" href="<?= base_url('/user/delete/' . $user['id']); ?>">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->

                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>