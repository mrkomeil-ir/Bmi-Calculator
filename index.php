<?php
$answer = '';
if (isset($_POST['computing'])){
    $w = $_POST['weight'];
    $h = $_POST['height'];
    if (preg_match("/^[0-9.]+$/",$w) && preg_match("/^[0-9.]+$/",$h)){
        $bmi = $w / ($h * $h);
        if ($bmi < 18.5){
            $answer = 'کمبود وزن';
        }elseif ($bmi >= 18.5 && $bmi < 25){
            $answer = 'سالم';
        }elseif ($bmi >= 25 && $bmi < 30){
            $answer = 'اضافه وزن';
        }elseif ($bmi >= 30){
            $answer = 'چاق';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-info pb-5">
        <h2 class="text-center pt-4 pb-4 text-white">bmi محاسبه</h2>
        <br>
        <form action="" method="post" class="d-flex flex-column align-items-center">
            <input type="text" name="weight" placeholder="وزن (کیلوگرم - عدد مجاز است)" class="text-right mt-3 pt-1 pr-1 pb-1 w-25" style="border:1px solid #ddd;border-radius: 5px; font-size: 15px;">
            <input type="text" name="height" placeholder="قد ( متر - عدد مجاز است)" class="text-right mt-3 pt-1 pr-1 pb-1 w-25" style="border:1px solid #ddd;border-radius: 5px; font-size: 15px;">
            <input type="submit" value="محاسبه" class="btn btn-danger mt-2 w-25" name="computing">
        </form>
        <h3 class="text-center answer"><?php echo $answer; ?></h3>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>