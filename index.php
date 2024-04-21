<?php 
include './inc/dp.php';
include './inc/form.php';
include './inc/select.php';
include './inc/dp_close.php';
include './parts/footer.php';


?>

<?php include_once './parts/header.php'; ?>
 <div class="container">

 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع ثامر </h1>
      <p class="lead fw-normal">باقي على فتح التسجيل </p>
      <h3 id="demo"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج  </p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على الفيسبوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">ساقوم ببث مباشر لمدة ساعة عبارة عن اسئلة واجوبة حرة للجميع </li>
  <li class="list-group-item">خلال فترة ساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك ةايميلك </li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي </li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من البرنامج </li>
</ul>

<div class="container">
<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST">
  <h3>الرجاء ادخل معلوماتك </h3>
  <div class="mb-3">
    <label for="firstName"  class="form-label" >الاسم الاول </label>
    <input type="text" name="firstName"  class="form-control" id="firstName" VALUE="<?php echo $firstName ?>">
    <div class="form-text error " ><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" VALUE="<?php echo $lastName ?>">
    <div class="form-text  error" ><?php echo $errors['lastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني </label>
    <input type="email" name="email" class="form-control" id="email" VALUE="<?php echo $email ?>">
    <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">ارسال المعلومات </button>
</form>
</div>
</div>







 
 </div> 

  <!--  
        <input type="text" name="firstName" id="firstName" placeholder="الاسم الاول">
        <input type="text" name="lastName" id="lastName" placeholder="الاسم الاخير" >
        <input type="text" name="email" id="email" placeholder="Email">
     
    </form>
<br>
-->
<!-- <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>  
  -->

    

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button id="winner" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
اختيار الرابح 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="modalLabel">الرابح في المسابقة </h5>
        <button id="winner" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class=" displey-3 text-center modal-title" id="modalLabel"><?php echo ($user['firstName']) . ''  ;  echo ($user['lastName']) ; ?></h1>
        <?php endforeach; ?>  
     
      </div>

      </div>
    </div>
  </div>
<!-- </div>
<script id="loader">
var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#4285f4';
	ctx.strokeStyle = "#4285f4";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
	    // Add scripting here that will run when progress completes
      myModal.show();
	}
	al++;
}
var sim = setInterval(progressSim, 20);
const win = document.querySelector('#winner');
const loader = document.querySelector('#loader');
  loader.style.display='block';
  var myModal = new bootstrap.Modal(document.getElementById('modal'), {
    kayboard: false
  })

  win.addEventListener('click' , function(){
    }  ); 


 
</script>
-->


    <div class="row mb-5 pd-5">
    <script>
  const loader = document.querySelector('#loader');
  loader.style.display='block';
</script>

<!--
  <div id="cards" class="col-sm-6">
    <div class="card my-1 bg-light">
      <h5 class="card-title"></h5>
      <p class="card-text"><?php echo ($user['email']) ; ?></p>
    </div>
  </div>
 
</div>
--->
<script>
var countDownDate = new Date("Apr 30, 2024 18:37:25").getTime();
var x = setInterval(function() {
    var counter = document.getElementById("demo") ;
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  counter.innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقد " + seconds + "ثانية ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "لقد وصلت متاخرا";
  }
}, 1000);
</script>
<script src="./js/script.js"></script>