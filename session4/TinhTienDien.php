<!DOCTYPE html>
<html>
<head>
	<title>Register - Session 3</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<h1>Register form</h1>
	<?php 
		$errFullname = $errStartDate = $errEndDate = $errFirstNum=$errLastNum= $errDate=$errNum=$name=$tien='';
        $fullname = $enddate = $startdate = $firstnum= $lastnum='';
        $checkRegister=true;
        $money = 0;
        
		if (isset($_POST['submit'])) {
			$fullname =  $_POST['fullname'];
			$startdate =  $_POST['startdate'];
            $enddate   =  $_POST['enddate'];
            $firstnum   =  $_POST['firstnum'];
            $lastnum   =  $_POST['lastnum'];           
			
			if ($fullname == '') {
                $errFullname  = 'Please input your fullname';
                $checkRegister = false;

			} else {
				$errFullname = '';
			}
			if ($startdate == '') {
                $errStartDate  = 'Please input your start date';
                $checkRegister = false;

			} else {
				$errStartDate = '';
			}
			if ($enddate == '') {
                $errEndDate  = 'Please input your end date';
                $checkRegister = false;

			} else {
				$errEndDate = '';
            }
            if ($firstnum == '') {
                $errFirstNum  = 'Please input your first num';
                $checkRegister = false;

			} else {
				$errFirstNum = '';
            }
            if ($lastnum == '') {
                $errLastNum  = 'Please input your last num';
                $checkRegister = false;

			} else {
				$errLastNum = '';
            }
            
            if ($enddate < $startdate){
                $errDate= 'Ngay cuoi ki phai lon hon ngay dau ki';
                $checkRegister = false;

            } else{
                $errDate='';
            }
            
            if ($lastnum < $firstnum){
                $errNum= 'So dien cuoi ki phai lon hon so dau ki';
                $checkRegister = false;

            } else{
                $errNum='';
            }
            $num = $lastnum - $firstnum;
            if ($num <= 100){
                $money = 1500*$num;
            } if ($num > 100 && $num<=300) {
                $money = 1500*100+2000*($num-100);
            } if($num > 300) {
                $money = 1500*100+2000*200+3500*($num-300);
            }
            
            if ($checkRegister){
                $name=$fullname;
                $tien=$money;
            }
            
			
			
		}
	?>
	<form action="#" method="POST">
        <p class="error"><?php echo"Bien lai tien dien cua gia dinh ". $name. " tu ngay ".$startdate." den ngay ".$enddate?></p>
        <p class="error"><?php echo $tien;?></p>
        <p class="error"><?php echo $errDate;?></p>
        <p class="error"><?php echo $errNum;?></p>
		<p>Ho va ten: 
			<input type="text" name="fullname" value="<?php echo $fullname?>">
		</p>
		<p class="error"><?php echo $errFullname;?></p>
		<p>Ngay Dau Ki: 
			<input type="date" name="startdate" value="<?php echo $startdate?>">
		</p>
		<p class="error"><?php echo $errStartDate;?></p>
		<p>Ngay Cuoi Ki:
            <input type="date" name="enddate" value="<?php echo $enddate?>">    
		</p>
        <p class="error"><?php echo $errEndDate;?></p>
        <p>So Dau Ki:
            <input type="text" name="firstnum" value="<?php echo $firstnum?>">    
		</p>
        <p class="error"><?php echo $errFirstNum;?></p>
        <p>So Cuoi Ki:
            <input type="text" name="lastnum" value="<?php echo $lastnum?>">    
		</p>
        <p class="error"><?php echo $errLastNum;?></p>
		<p>
			<input type="submit" name="submit" value="Submit">
		</p>
	</form>
</body>
</html>