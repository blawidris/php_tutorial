<?php

include_once 'partials/header.php';

$err = [];
$success = false;
$msg = '';


if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $f_name = trimPost('f_name');

    // echo $f_name;

    $email = trimPost('email');
    $address = trimPost('address');
    $city = trimPost('city');
    $state = trimPost('state');
    $education = trimPost('education');
    $work = trimPost('work');
    $bio = trimPost('bio');

    if (empty($f_name)) {
        $err['name'] = true;
        $msg = 'Full name cannot be empty';
    } else if (empty($email)) {
        $err['email'] = true;
        $msg = 'email cannot be empty';
    } else if (empty($address)) {
        $err['address'] = true;
        $msg = 'address cannot be empty';
    } else if (empty($city)) {
        $err['city'] = true;
        $msg = 'city cannot be empty';
    } else if (empty($state)) {
        $err['state'] = true;
        $msg = 'state cannot be empty';
    } else if (empty($education)) {
        $err['education'] = true;
        $msg = 'education cannot be empty';
    } else if (empty($bio)) {
        $err['bio'] = true;
        $msg = 'bio cannot be empty';
    } else if (empty($work)) {
        $err['work'] = true;
        $msg = 'work cannot be empty';
    } else {

        $filename = 'data.json';

        $data = [
            'name' => $f_name,
            'email' => $email,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'bio' => $bio,
            'education' => $education,
            'work' => $work,
        ];

        if (file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT))) {
            unset($_POST);
            $success = true;
            $msg = "File saved";
        }
    }
}

function trimPost($field)
{

    $trim = $_POST[$field] ? trim($_POST[$field]) : "";

    return $trim;
}

?>

<div class="container py-5 mb-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <?php if($success):?>
                <div class="alert alert-success" role="alert">
                    <?=$msg;?>
                </div>
            <?php endif;?>
            <form class="row g-3" method="post">
                <div class="col-md-6">
                    <label for="f_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control <?= $err['name'] ? 'is-invalid' : '' ?>" id="f_name" name="f_name" value="<?= $_POST['f_name'] ?>">
                    <div id="f_name" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?= $err['email'] ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= $_POST['email'] ?>">
                    <div id="email" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>
                <div class="col-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control <?= $err['address'] ? 'is-invalid' : '' ?>" id="address" name="address" placeholder="1234 Main St" value="<?= $_POST['address'] ?>">
                    <div id="address" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>
                <div class="col-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control <?= $err['city'] ? 'is-invalid' : '' ?>" id="city" name="city" placeholder="Ikeja" value="<?= $_POST['city'] ?>">
                    <div id="city" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>
                <div class="col-3">
                    <label for="state" class="form-label <?= $err['state'] ? 'is-invalid' : '' ?>">State</label>
                    <select id="state" class="form-select" name="state">
                        <option selected>Choose...</option>
                        <option value="oyo" <?= ($_POST['state'] === 'oyo') ? 'selected' : '' ?>>Oyo</option>
                        <option value="lagos" <?= ($_POST['state'] === 'lagos') ? 'selected' : '' ?>>Lagos</option>
                        <option value="ogun" <?= ($_POST['state'] === 'ogun') ? 'selected' : '' ?>>Ogun</option>
                    </select>
                    <div id="state" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>
                <div class="col-6">
                    <label for="bio" class="form-label <?= $err['bio'] ? 'is-invalid' : '' ?>">Profile Summary</label>
                    <textarea name="bio" id="bio" cols="30" rows="10" class="form-control"><?= $_POST['bio'] ?></textarea>
                    <div id="bio" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>
                <div class="col-6">
                    <label for="education" class="form-label <?= $err['education'] ? 'is-invalid' : '' ?>">Education Background</label>
                    <textarea name="education" id="education" cols="30" rows="10" class="form-control"><?= $_POST['education'] ?></textarea>
                    <div id="education" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>
                <div class="col-6">
                    <label for="work" class="form-label <?php echo $err['work'] ? 'is-invalid' : '' ?>">Work Experience</label>
                    <textarea name="work" id="work" cols="30" rows="10" class="form-control"><?= $_POST['work'] ?></textarea>
                    <div id="work" class="invalid-feedback">
                        <?= $msg ?>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-25">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include_once 'partials/footer.php';

?>