<?php

$height = 1.73;
$weight = 63;

$imc = $weight / ($height * $height);

$imcTwoDecimals = number_format($imc, 2);

if($imc <= 18.5){
    echo "Your BMI is: $imcTwoDecimals which is considered underweight!"."<br>" . "Consult a doctor. Some people are underweight due to their body type, and that's okay. Others may be facing issues like malnutrition. It's important to identify the cause.";
}elseif($imc <= 24.99){
    echo "Your BMI is: $imcTwoDecimals which is considered normal!"."<br>" . "Great that you're in the normal weight range! The best way to stay that way is by maintaining an active lifestyle and balanced nutrition.";
}elseif($imc <= 29.99){
    echo "Your BMI is: $imcTwoDecimals which is considered overweight!"."<br>" . "This is actually a form of pre-obesity, and many people in this range already have associated health issues like diabetes and hypertension. It's important to review habits and seek help before, for various reasons, moving into the full obesity category.";
}elseif($imc <= 34.99){
    echo "Your BMI is: $imcTwoDecimals which is considered obesity class I!"."<br>" . "Alert signal! It's time to take care of yourself, even if your tests are normal. Let's begin changes today! Watch your diet, and you should start working with a nutritionist and/or endocrinologist.";
}elseif($imc <= 39.99){
    echo "Your BMI is: $imcTwoDecimals which is considered obesity class II!"."<br>" . "Even if your tests seem normal, it's time to take action, starting lifestyle changes with close monitoring from health professionals.";
}elseif($imc >= 40){
    echo "Your BMI is: $imcTwoDecimals which is considered obesity class III!"."<br>" . "This is a red flag, with a high likelihood of serious associated diseases. Treatment needs to be much more urgent.";
}else{
    echo "Error!!!". "<br>" ."Please reassess your weight and height!";
}
?>
