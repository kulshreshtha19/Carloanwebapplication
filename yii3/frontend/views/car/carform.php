<?php 
use yii\helpers\Url;
use yii\web\AssetBundle;
use yii\helpers\Html;
use yii\bootstrap\Button;
use yii\web\View;
?>

<html>
<head>
<link rel="stylesheet" href="<?= Url::to('@web/css/final.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_1.css')?>">    
<link rel="stylesheet" href="<?= Url::to('@web/css/step_2.css')?>">    
<link rel="stylesheet" href="<?= Url::to('@web/css/step_3.css')?>">   
<link rel="stylesheet" href="<?= Url::to('@web/css/step_4.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_5.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_6.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_7.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_9.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_10.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_11.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_12.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_13.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_14.css')?>">
<link rel="stylesheet" href="<?= Url::to('@web/css/step_15.css')?>">
<style>
            body{
                background: #3dbfd9;
                font-family: "Lato",Helvetica,Arial,sans-serif;
                color: white;
            }

        input[type=date]{
            display: flex;
            width: 30%;
            height: 50px;
            padding: 6px 12px;
            font-size: 15px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            outline: none;
        }

        .image_1_step8{
            /* background-image: url('user-24.png'); */
            width: 24px;
            height: 24px;
            display: inline-block!important;
            margin-top:11px; 
        }

        .image_2_step8{
            /* background-image: url('white-phone-24.png'); */
            width: 24px;
            height: 24px;
            display: inline-block!important;
            margin-top:11px; 
        }


        .image_step8{
            background-color: #34495e;
            border: 0 none;
            vertical-align : middle;
            border-radius: 4px 0 0 4px;
            /* display: table-cell; */
            padding: 0 12px;
            width: 20px;
            height: 50px;
            margin-left: 450px;
            /* background-image: url('rupee.png'); */
        }

        .text_step8{
            width: 100%;
            height: 50px;
            display: flex;
            margin-top: 100px;
        }

        .text_step8_1{
            width: 100%;
            height: 50px;
            display: flex;
            margin-top: 30px;
        }

        .text_step8_2{
            width: 100%;
            height: 50px;
            display: flex;
            margin-top: 30px;
        }

        .heading_step8{
            font-size: 50px;
            text-align: center;
            margin-top: 40px;
        }

        .buttonproperty_step8{
        color: #fff;
        background-color: #e74c3c;  
        height: 45px;
        width: 150px;
        border: 5px;
        border-radius: 6px;
        text-align: center;
        margin-left: 590px;
        font-weight: 520;
        font-size: 22px;
        cursor: pointer;
        font-family: "Lato",Helvetica,Arial,sans-serif;
        transition: all 0.5s;
        margin-top: 50px;
        outline: none;
        }

        .buttonproperty_step8:active,.buttonproperty_step8:hover{
        outline: 0;
        background-color: #ec7063;
        text-decoration: none;
        }

        .thank{
            font-size:40px;
            text-align: center;
            font-weight: 600;
            margin-top: 300px;
        }

       /* <?php $this->registerCssFile("@web/css/final.css");?> */
</style>
</head>

<body>
        <div class="wrap">
                <div id="arrow-left" class="arrow" ></div>
                
<div class="slide">
              <div class="heading">
            <h1>What type of car are you looking for?</h1>   
        </div>
        
        <div id="vehicle">
            
            <div class="column_new">
                <div class="btn active">
                    <label class="label_container_new" >
                        <span class="vehicleiconnew"></span>
                        <span class="text_new">Old Car</span>
                        <span class="radioBtn">
                                <span class="firstIcon"></span>
                                <span class="secondIcon"></span>
                                <input type="radio" name="vehicleNew" class="vehicleNew" checked>
                            </span>
                    </label>  
                </div>
            </div>

            <div class="column_old">
                <div class="btn">
                    <label class="label_container_new" >
                        <span class="vehicleiconnew"></span>
                        <span class="text_new">New Car</span>
                        <span class="radioBtn">
                                <span class="firstIcon"></span>
                                <input type="radio" name="vehicleNew" class="vehicleNew">
                                <span class="secondIcon"></span>
                        </span>
                    </label>
                </div>
            </div>   
        </div>
        
        
        <div class="searccarbtn">
                <button class="buttonproperty " onclick="buttonRight()">Search for Car Loans</button>  
        </div>

    </div>
    <div class="slide">
                        <div class="heading_step2">
                                <h1>My Preferred car is</h1>   
                            </div>
                            
                            <div id="vehicle_step2">
                                
                                <div class="column_hun_step2">
                                    <div class="btn_step2 active">
                                        <label class="label_container_new_step2" >
                                            <span class="vehicleiconnew_step2"></span>
                                            <span class="text_old_step2">Hyundai Eon</span>
                                            <span class="radioBtn_step2">
                                                    <span class="firstIcon_step2"></span>
                                                    <span class="secondIcon_step2"></span>
                                                    <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2" checked>
                                                </span>
                                        </label>  
                                    </div>
                                </div>
                    
                                <div class="column_maruti_step2">
                                    <div class="btn_step2">
                                        <label class="label_container_new_step2">
                                            <span class="vehicleiconnew_step2"></span>
                                            <span class="text_old_step2">Maruti Alto 800</span>
                                            <span class="radioBtn_step2">
                                                    <span class="firstIcon_step2"></span>
                                                    <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2">
                                                    <span class="secondIcon"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="column_marucelerio_step2">
                                        <div class="btn_step2">
                                            <label class="label_container_new_step2" >
                                                <span class="vehicleiconnew_step2"></span>
                                                <span class="text_old_step2">Maruti Celerio</span>
                                                <span class="radioBtn_step2">
                                                        <span class="firstIcon_step2"></span>
                                                        <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Honda_amaze_step2">
                                        <div class="btn_step2">
                                            <label class="label_container_new_step2" >
                                                <span class="vehicleiconnew_step2"></span>
                                                <span class="text_old_step2">Honda Amaze</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step2"></span>
                                                        <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Hyundai_Grand_I10_step2">
                                        <div class="btn_step2">
                                            <label class="label_container_new_step2" >
                                                <span class="vehicleiconnew_step2"></span>
                                                <span class="text_old_step2">Hyundai Grand I10</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step2"></span>
                                                        <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                    
                                <div class="Maruti_Wagon_R_step2">
                                        <div class="btn_step2">
                                            <label class="label_container_new_step2">
                                                <span class="vehicleiconnew_step2"></span>
                                                <span class="text_old_step2">Maruti Wagon R</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step2"></span>
                                                        <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Maruti_Swift_step2">
                                        <div class="btn_step2">
                                            <label class="label_container_new_step2" >
                                                <span class="vehicleiconnew_step2"></span>
                                                <span class="text_old_step2">Maruti Swift</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step2"></span>
                                                        <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Others_step2">
                                        <div class="btn_step2">
                                            <label class="label_container_new_step2">
                                                <span class="vehicleiconnew_step2"></span>
                                                <span class="text_old_step2">Hyundai Verna</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step2"></span>
                                                        <input type="radio" name="vehicleNew_step2" class="vehicleNew_step2">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                            </div>       
                            
                            <div class="searccarbtn_step2">
                                    <button class="buttonproperty_step2 " onclick="buttonRight_step2()">Continue</button>  
                            </div>    
    </div>
    <div class="slide">
                        <div class="heading_step3">
                                <h1>Where do you live currently?</h1>   
                            </div>
                            
                            <div id="vehicle_step3">
                                
                                <div class="column_hun_step3">
                                    <div class="btn_step3 active">
                                        <label class="label_container_new_step3" >
                                            <span class="vehicleiconnew_step3"></span>
                                            <span class="text_step3">Mumbai</span>
                                            <span class="radioBtn_step3">
                                                    <span class="firstIcon_step3"></span>
                                                    <span class="secondIcon"></span>
                                                    <input type="radio" name="vehicleNew_step3" class="vehicleNew_step3" checked>
                                                </span>
                                        </label>  
                                    </div>
                                </div>
                    
                                <div class="column_maruti_step3">
                                    <div class="btn_step3">
                                        <label class="label_container_new_step3" >
                                            <span class="vehicleiconnew_step3"></span>
                                            <span class="text_step3">Chennai</span>
                                            <span class="radioBtn_step3">
                                                    <span class="firstIcon_step3"></span>
                                                    <input type="radio" name="vehicleNew_step3" class="vehicleNew_step3">
                                                    <span class="secondIcon"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="column_marucelerio_step3">
                                        <div class="btn_step3">
                                            <label class="label_container_new_step3" >
                                                <span class="vehicleiconnew_step3"></span>
                                                <span class="text_step3">New Delhi</span>
                                                <span class="radioBtn_step3">
                                                        <span class="firstIcon_step3"></span>
                                                        <input type="radio" name="vehicleNew_step3" class="vehicleNew_step3">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Honda_amaze_step3">
                                        <div class="btn_step3">
                                            <label class="label_container_new_step3">
                                                <span class="vehicleiconnew_step3"></span>
                                                <span class="text_step3">Banglore</span>
                                                <span class="radioBtn_step3">
                                                        <span class="firstIcon_step3"></span>
                                                        <input type="radio" name="vehicleNew_step3" class="vehicleNew_step3">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Hyundai_Grand_I10_step3">
                                        <div class="btn_step3">
                                            <label class="label_container_new_step3">
                                                <span class="vehicleiconnew_step3"></span>
                                                <span class="text_step3">Ahmedabad</span>
                                                <span class="radioBtn_step3">
                                                        <span class="firstIcon_step3"></span>
                                                        <input type="radio" name="vehicleNew_step3" class="vehicleNew_step3">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                            </div>       
                            
                            <div class="searccarbtn_step3">
                                    <button class="buttonproperty_step3 " onclick="buttonRight_step3()">Continue</button>  
                            </div>
    </div>
    <div class="slide">
                        <div class="company_step4">
                                <div class="text_step4">Company I work for</div>
                                <div class="input_step4">
                                        <input type="text" id="value_step4">
                                </div>
                        
                                <div id="vehicle_step4">
                                    <button class="btn_step4 active">Salaried</button>
                                    <button class="btn_step4">Self-employed</button>
                                </div>
                                
                                <div class="searccarbtn_step4">
                                        <button class="buttonproperty_step4 " onclick="buttonRight_step4()">Continue</button>  
                                </div>
                        
                                <div class="tooltip_step4">
                                    <div class="arrow_step4"></div>
                                    <div class="form_step4">
                                        Psst! Don't worry if you don't find your company name on our list! Simply type in the name & proceed! We've got your back!
                                    </div>
                                </div>
                            </div>
    </div>
    <div class="slide">
        <div class="heading_step5">
            My gross monthly salary is
        </div>
        <div class="text_step5">
            <div class="image">
                <span class="image_1"></span>
            </div>
            <input type="number" name="rupee" placeholder="Rs." id="value_step5">
        </div>

        <div class="searccarbtn_step5">
            <button class="buttonproperty_step5 " onclick="buttonRight_step5()">Continue</button>
        </div>
    </div>
    <div class="slide">
                        <div class="heading_step6">
                                <h1>My salary account is with</h1>   
                            </div>
                            
                            <div id="vehicle_step6">
                                
                                <div class="column_hun_step6">
                                    <div class="btn_step6 active">
                                        <label class="label_container_new_step6" >
                                            <span class="vehicleiconnew_step6"></span>
                                            <span class="text_old_step6">Axis</span>
                                            <span class="radioBtn_step6">
                                                    <span class="firstIcon_step6"></span>
                                                    <span class="secondIcon_step6"></span>
                                                    <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6" checked>
                                                </span>
                                        </label>  
                                    </div>
                                </div>
                    
                                <div class="column_maruti_step6">
                                    <div class="btn_step6">
                                        <label class="label_container_new_step6" >
                                            <span class="vehicleiconnew_step6"></span>
                                            <span class="text_old_step6">CITI</span>
                                            <span class="radioBtn_step6">
                                                    <span class="firstIcon_step6"></span>
                                                    <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6">
                                                    <span class="secondIcon"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="column_marucelerio_step6">
                                        <div class="btn_step6">
                                            <label class="label_container_new_step6" >
                                                <span class="vehicleiconnew_step6"></span>
                                                <span class="text_old_step6">HDFC</span>
                                                <span class="radioBtn_step6">
                                                        <span class="firstIcon_step6"></span>
                                                        <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Honda_amaze_step6">
                                        <div class="btn_step6">
                                            <label class="label_container_new_step6" >
                                                <span class="vehicleiconnew_step6"></span>
                                                <span class="text_old_step6">ICICI</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step6"></span>
                                                        <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Hyundai_Grand_I10_step6">
                                        <div class="btn_step6">
                                            <label class="label_container_new_step6" >
                                                <span class="vehicleiconnew_step6"></span>
                                                <span class="text_old_step6">IDBI</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step6"></span>
                                                        <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                    
                                <div class="Maruti_Wagon_R_step6">
                                        <div class="btn_step6">
                                            <label class="label_container_new_step6" >
                                                <span class="vehicleiconnew_step6"></span>
                                                <span class="text_old_step6">Kotak Mahindra</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step6"></span>
                                                        <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Maruti_Swift_step6">
                                        <div class="btn_step6">
                                            <label class="label_container_new_step6">
                                                <span class="vehicleiconnew_step6"></span>
                                                <span class="text_old_step6">SBI</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step6"></span>
                                                        <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                    
                                <div class="Others_step6">
                                        <div class="btn_step6">
                                            <label class="label_container_new_step6" >
                                                <span class="vehicleiconnew_step6"></span>
                                                <span class="text_old_step6">I receive by Cash</span>
                                                <span class="radioBtn">
                                                        <span class="firstIcon_step6"></span>
                                                        <input type="radio" name="vehicleNew_step6" class="vehicleNew_step6">
                                                        <span class="secondIcon"></span>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                            </div>       
                            
                            <div class="searccarbtn_step6">
                                    <button class="buttonproperty_step6 " onclick="buttonRight_step6()">Continue</button>  
                            </div>               
    </div>
    <div class="slide">
        <div class="heading_step7"> 
        </div>
        <div class="text_step7">
            <div class="image_step7">
                <span class="span_1_step7"></span>
            </div>
            <input type="date" placeholder="Your Joining year" id="value_step7">
        </div>

        <div class="heading_step7">
            what is your work experience 
        </div>
        <div class="text_step7_1">
            <div class="image_step7">
                <span class="span_1_step7"></span>
            </div>
            <input type="number" placeholder="Experience" id="value_step7_1">
        </div>

        <div class="searccarbtn_step7">
                <button class="buttonproperty_step7 " onclick="buttonRight_step7()">Continue</button>  
        </div>
    </div>
    <div class="slide">
        <div class="heading_step8"> 
        </div>
        <div class="text_step8">
            <div class="image_step8">
                <span class="image_1_step8"></span>
            </div>
            <input type="date" name="rupee"  id="value_1_step8" required>        
        </div>

        <div class="heading_step8">
                When did you move to current residence?
        </div>

        <div class="text_step8_1">
            <div class="image_step8">
                <span class="image_2_step8"></span>
            </div>
            <input type="date" name="rupee"  id="value_2_step8" required>
        </div>

        <div class="searccarbtn_step8">
                <button class="buttonproperty_step8 " onclick="buttonRight_step8()">Continue</button>  
        </div>
    </div>
    <div class="slide">
        <div class="company_step9">
                <div class="text_step9">Tell us about your residence type</div>
            <div class="image_step9">
                <div id="checkbox_step9">
                    <div class="btn_step9 active">
                        <label class="position_step9">
                            <input type="radio" name="gender" value="Owened by self/spouse" class="vehicleNew_step9" checked > Owened by self/spouse<br>
                        </label>   
                    </div>

                    <div class="btn_step9">
                        <label class="position_step9">
                            <input type="radio" name="gender" value="Rented - with Family" class="vehicleNew_step9" > Rented - with Family<br>
                        </label>    
                    </div>

                    <div class="btn_step9">
                            <label class="position_step9">
                                <input type="radio" name="gender" value="OwnedByparent/sibling" class="vehicleNew_step9" > OwnedByparent/sibling<br>
                            </label>
                    </div>

                    <div class="btn_step9">
                            <label class="position_step9">
                                <input type="radio" name="gender" value="Rented - staying alone" class="vehicleNew_step9" > Rented - staying alone<br>
                            </label>   
                    </div>

                    <div class="btn_step9">
                            <label class="position_step9">
                                <input type="radio" name="gender" value="Company Provided" class="vehicleNew_step9" > Company Provided<br>
                            </label>
                    </div>

                    <div class="btn_step9">
                            <label class="position_step9">
                                <input type="radio" name="gender" value="Hostel" class="vehicleNew_step9" > Hostel<br>
                            </label>   
                    </div>

                    <div class="btn_step9">
                            <label class="position_step9">
                                <input type="radio" name="gender" value="Rented - with Friends" class="vehicleNew_step9" > Rented - with Friends<br>
                            </label>   
                    </div>

                    <div class="btn_step9">
                        <label class="position_step9">
                            <input type="radio" name="gender" value="Paying guest" class="vehicleNew_step9" >Paying guest<br>
                        </label>    
                    </div>

                </div>
                <div class="searccarbtn_step9">
                        <button class="buttonproperty_step9 " onclick="buttonRight_step9()">Continue</button>  
                </div>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="heading_step10">
            What's your Dateofbirth?
        </div>
        <div class="text_step10">
            <div class="image_step10">
                <span class="image_1_step10"></span>
            </div>
            <input type="date" name="rupee"  id="value_step10">
        </div>

        <div class="searccarbtn_step10">
                <button class="buttonproperty_step10 " onclick="buttonRight_step10()">Continue</button>  
        </div>
    </div>
    <div class="slide">
        <div class="heading_step11">
                Total EMIs (if any)
        </div>
        <div class="text_step11">
            <div class="image_step11">
                <span class="image_1_step11"></span>
            </div>
            <input type="number" name="rupee" placeholder="Rs." id="value_step11">
        </div>

        <div class="searccarbtn_step11">
                <button class="buttonproperty_step11 " onclick="buttonRight_step11()">Continue or skip</button>  
        </div>
    </div>
    <div class="slide">
        <div class="heading_step12">
                Average monthly incentives (optional)
        </div>
        <div class="text_step12">
            <div class="image_step12">
                <span class="image_1_step12"></span>
            </div>
            <input type="number" name="rupee" placeholder="Rs." id="value_step12">
        </div>

        <div class="searccarbtn_step12">
                <button class="buttonproperty_step12 " onclick=" buttonRight_step12()">Continue or skip</button>  
        </div>
    </div>
    <div class="slide">
        <div class="heading_step13">
            We've got the best offers lined up for you
        </div>
        <div class="text_step13">
            <div class="image_step13">
                <span class="image_1_step13"></span>
            </div>
            <input type="text" name="rupee" placeholder="My First Name" id="value_step13" required>        
        </div>

        <div class="text_step13_1">
            <div class="image_step13">
                <span class="image_2_step13"></span>
            </div>
            <input type="number" name="rupee" placeholder="My Mobile (Required)" id="value_1_step13"  required>
        </div>

        <div class="text_step13_2">
            <div class="image_step13">
                <span class="image_3_step13"></span>
            </div>
            <input type="email" name="rupee" placeholder="My email (optional)" id="value_2_step13" required> 
        </div>

        <div class="searccarbtn_step13">
                <button class="buttonproperty_step13 " onclick="buttonRight_step13(); selected();">Continue</button>  
        </div>
    </div>
    <div class="slide">
        <div id="mydiv">
        </div>
    </div>
    <div class="slide">
        <div class="thank">Thank you for you Response</div>
    </div>            
    <div id="arrow-right" class="arrow"></div>
    <!-- </form> -->
        </div>

<?php $model = $model->find()->andWhere(['cid' =>Yii::$app->user->identity->id])->andWhere(['createdAt' => $createdAt])->one(); ?>

    <script>
    window.addEventListener("load",function(event){
             var div=document.querySelectorAll(".btn");
              for(var i=0;i<div.length;i++)
              {
                  if(div[i].querySelector(".text_new").innerHTML=== '<?php echo $model->cartype; ?>')
                  {
                    div[i].querySelector(".vehicleNew").checked=true;   
                    var mainbox = document.getElementById("vehicle");
                    var btns = mainbox.getElementsByClassName("btn");
                    var current = mainbox.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    div[i].className += " active";
                  }
               }
    },false);

    window.addEventListener("load",function(event){  
              var div=document.querySelectorAll(".btn_step2");
              for(var i=0;i<div.length;i++)
              {
                  if(div[i].querySelector(".text_old_step2").innerHTML=='<?php echo $model->precar; ?>')
                  {
                    div[i].querySelector(".vehicleNew_step2").checked=true;
                    var mainbox=document.getElementById("vehicle_step2");
                    var btns=mainbox.getElementsByClassName("btn_step2");
                    var current=mainbox.getElementsByClassName("active");
                    current[0].className=current[0].className.replace(" active","");
                    div[i].className += " active";

                    // alert(div[i].className);   
                  }
              }
        
    },false);

    window.addEventListener("load",function(event){  
              var div=document.querySelectorAll(".btn_step3");
              for(var i=0;i<div.length;i++)
              {
                  if(div[i].querySelector(".text_step3").innerHTML=='<?php echo $model->currenlive; ?>')
                  {
                    div[i].querySelector(".vehicleNew_step3").checked=true;
                    var mainbox=document.getElementById("vehicle_step3");
                    var paragraph =document.querySelector(".heading_step8");
                    paragraph.innerHTML="when did you move to" +" "+ '<?php echo $model->currenlive; ?>';
                    var btns=mainbox.getElementsByClassName("btn_step3");
                    var current=mainbox.getElementsByClassName("active");
                    current[0].className=current[0].className.replace(" active","");
                    div[i].className += " active";   
                  }
              }
        
    },false);

    window.addEventListener("load",function(event){
        var val=document.getElementById("value_step4");
        var paragraph = document.querySelector(".heading_step7");
        val.value='<?php echo $model->comname; ?>';
        paragraph.innerHTML="Joining date with" +" "+val.value;
    },false);

    window.addEventListener("load",function(event){
        var val=document.getElementById("value_step5");
        val.value='<?php echo $model->grosssalary; ?>';
    },false);

    window.addEventListener("load",function(event){
        var div=document.querySelectorAll(".btn_step6");
              for(var i=0;i<div.length;i++)
              {
                  if(div[i].querySelector(".text_old_step6").innerHTML=='<?php echo $model->salaryaccount; ?>')
                  {
                    div[i].querySelector(".vehicleNew_step6").checked=true;
                    var mainbox=document.getElementById("vehicle_step6");
                    var btns=mainbox.getElementsByClassName("btn_step6");
                    var current=mainbox.getElementsByClassName("active");
                    current[0].className=current[0].className.replace(" active","");
                    div[i].className += " active";   
                  }
              }
    },false);

    window.addEventListener("load",function(event){
        var val=document.getElementById("value_step7");
        var val1=document.getElementById("value_step7_1");
        val.value='<?php echo $model->joiningdate; ?>';
        val1.value='<?php echo $model->workexperience; ?>';
    },false);

    window.addEventListener("load",function(event){
        var val=document.getElementById("value_1_step8");
        var val1=document.getElementById("value_2_step8");
        val.value='<?php echo $model->movecity; ?>';
        val1.value='<?php echo $model->movecurrent; ?>';

        // alert('<?php echo $model->movecurrent; ?>');
    },false);

        window.addEventListener("load",function(event){  
              var div=document.querySelectorAll(".btn_step9");
              for(var i=0;i<div.length;i++)
              {
                  if(div[i].querySelector(".vehicleNew_step9").value=='<?php echo $model->residencetype; ?>')
                  {
                    div[i].querySelector(".vehicleNew_step9").checked=true;
                    var mainbox=document.getElementById("checkbox_step9");
                    var btns=mainbox.getElementsByClassName("btn_step9");
                    var current=mainbox.getElementsByClassName("active");
                    current[0].className=current[0].className.replace(" active","");
                    div[i].className += " active";

                    // alert(div[i].className);   
                  }
              }
        
    },false);

        window.addEventListener("load",function(event)
        {
            var val=document.getElementById("value_step10");
            val.value='<?php echo $model->age; ?>';
            alert(val.value);
        },false);

        window.addEventListener("load",function(event)
        {
            var val=document.getElementById("value_step11");
            val.value='<?php echo $model->Emi; ?>';
        },false);

        window.addEventListener("load",function(event)
        {
            var val=document.getElementById("value_step12");
            val.value='<?php echo $model->monthlyincentive; ?>';
        },false);

        window.addEventListener("load",function(event)
        {
             var val=document.getElementById("value_step13");
             var val1=document.getElementById("value_1_step13");
             var val2=document.getElementById("value_2_step13");

             val.value='<?php echo $model->name; ?>';
            val1.value='<?php echo $model->phone; ?>';
            val2.value='<?php echo $model->email; ?>';

        },false);

    </script>
</body>
</html>