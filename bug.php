function myFunc() {
  $result = 0;
  for ($i = 1; $i <= 10; $i++) {
    $result += $i;
  }
  return $result;
}

$sum = myFunc();
echo "Sum: " . $sum; //This will correctly output 55

function myOtherFunc(){
  $result = 0;
  for ($i = 1; $i <= 10; $i++) {
    $result += $i;
    if($i == 5){
      return $result;
    }
  }
  return $result;
}

$sum2 = myOtherFunc();
echo "Sum2: " . $sum2; // This will output 15, but may be unexpected