<?php 
include './inc/db.php';//fichier de connecxion a bd securise
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';?>

<?php include_once './parts/header.php';?>
<!-- <canvas class="confetti" id="conf"></canvas> -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto">
            <img id="profile" width="400px" src="./images/winner.png" alt="profile"/>
            <h1 class="display-4 fw-normal">من سعيد الحظ</h1>
            <p class="lead fw-normal">باقــــي على فتـــح التسجيــــــــل</p>
            <h3 id="countdown"></h3>
            <p class="lead fw-normal">للسحب على ربــــــــــــــــــــح 100د </p>
        </div>
        <div class="container">
        <h3>للدخول في السحب اتبــــع مــا يلــي:</h3>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">تابع البث المباشر على صفحتي على فايسبوك بالتاريخ المذكور أعلاه</li>
                <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
                <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجيل اسمك وإيميلك</li>
                <li class="list-group-item">بنهاية البث سيتم إختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
                <li class="list-group-item">الرابح سيحصل على مبلغ قيمته 100د</li>
            </ul>
        </div>
    </div>

<div class="container">
 <div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>الرجاء أدخل معلوماتك</h3>
            
            <div class="form-floating">
                <input type="text" name="firstName" id="firstName" value="<?php echo $firstName ?>" class="form-control">
                <label for="firstName">الأسم الأول</label>
                <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
            </div>

            <div class="form-floating">
                <input type="text" name="lastName" id="lastName" value="<?php echo $lastName ?>" class="form-control">
                <label for="lastName">الأسم الأخير</label>
                <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" name="email" id="email" value="<?php echo $email ?>" class="form-control">
                <label for="email">البريد الإلكتروني</label>
                <div class="form-text error"><?php echo $errors['emailError'] ?></div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>
        </form>
    </div>
</div>
<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner" class="btn btn-primary" >
    إختيـــــــــــــــــــار الرابـــــــــــــــــــــح
    </button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">  
            <h5 class="modal-title" id="modal">الرابـــــــح فــي المسابقــــة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user): ?>  
            <h1 class="display-3 text-center modal-title" id="modal"><?php echo htmlspecialchars($user['firstName']).' '.htmlspecialchars($user['lastName'])?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>


<?php include_once './parts/footer.php';?>
 







