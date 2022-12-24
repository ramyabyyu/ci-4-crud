<?= $this->extend("layouts/main"); ?>

<?= $this->section('content'); ?>
<div class="pagetitle">
    <h1>Edit Data</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/user'); ?>">Home</a></li>
            <li class="breadcrumb-item">Edit Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data!</h5>
                    <!-- Vertical Form -->
                    <form class="row g-3" action="<?= route_to('users.update', $user['id']); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="col-12">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $user['name']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" id="age" value="<?= $user['age']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="<?= $user['phone']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" class="form-control" rows="5" placeholder="1234 Main St"><?= $user['address']; ?></textarea>
                        </div>
                        <div class="text-start">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- Vertical Form -->
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>