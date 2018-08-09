let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;

// Clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}

// Init slider
function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
}

// Show prev
function slideLeft() {
  reset();
  sliderImages[current - 1].style.display = "block";
  current--;
}

// Show next
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  current++;
}

// Left arrow click
arrowLeft.addEventListener("click", function() {
  if (current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});

// Right arrow click
arrowRight.addEventListener("click", function() {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});

startSlide();

var form=[];
var username="";
var password="";
function buttonRight(){
  var div=document.querySelectorAll(".btn");
  for(var i=0;i<div.length;i++)
  {
      if(div[i].querySelector(".vehicleNew").checked==true)
      {
        form[0]=div[i].querySelector(".text_new").innerHTML;
        slideRight();
      }
  } 
}

function buttonRight_step2(){
  var div=document.querySelectorAll(".btn_step2");
  for(var i=0;i<div.length;i++)
  {
      if(div[i].querySelector(".vehicleNew_step2").checked==true)
      {
        form[1]=div[i].querySelector(".text_old_step2").innerHTML;
        slideRight();
      }
  } 
}

function buttonRight_step3(){
  var div=document.querySelectorAll(".btn_step3");
  for(var i=0;i<div.length;i++)
  {
      if(div[i].querySelector(".vehicleNew_step3").checked==true)
      {
        var paragraph =document.querySelector(".heading_step8");
        paragraph.innerHTML="when did you move to" +" "+ div[i].querySelector(".text_step3").innerHTML;
        form[2]=div[i].querySelector(".text_step3").innerHTML;
        slideRight();
      }
  } 
}

function buttonRight_step4(){
    var val=document.getElementById("value_step4");
    if(val.value=="")
    {
      alert('Please Enter your company name....!');
    }

    else{
            var val=document.getElementById("value_step4");
            var paragraph = document.querySelector(".heading_step7");
            paragraph.innerHTML="Joining date with" +" "+val.value;
            form[3]=val.value;
            slideRight();
    }
}

function buttonRight_step5(){
  var val=document.getElementById("value_step5");
    if(val.value=="")
    {
      alert('Please Enter your gross monthly salary....!');
    }

    else{
      form[4]=val.value;
      slideRight();
    }
}

function buttonRight_step6(){
  var div=document.querySelectorAll(".btn_step6");
  for(var i=0;i<div.length;i++)
  {
      if(div[i].querySelector(".vehicleNew_step6").checked==true)
      {
        form[5]=div[i].querySelector(".text_old_step6").innerHTML;
        slideRight();    
      }
  } 
}

function buttonRight_step7(){
  var val=document.getElementById("value_step7");
  var val1=document.getElementById("value_step7_1");
    if(val.value=="")
    {
      alert('Please Enter your joining date....!');
    }

    if(val1.value=="")
    {
      alert('Please Enter your working experience...!');
    }

    if(val1.value!="" && val.value!=""){
      form[6]=val.value;
      form[16]=val1.value;
      slideRight();
    }
}

function buttonRight_step8(){
  var val=document.getElementById("value_1_step8");
  var val1=document.getElementById("value_2_step8");
  if(val.value=="")
  {
    alert('Please Enter your moving date to current city...!');
  }

  if(val1.value=="")
  {
    alert('Please Enter your moving date to current residence...!');
  }

  if(val1.value!="" && val.value!=""){
    form[7]=val.value;
    form[8]=val1.value;
    slideRight();
  }
}

function buttonRight_step9(){
  var div=document.querySelectorAll(".btn_step9");
  for(var i=0;i<div.length;i++)
  {
      if(div[i].querySelector(".vehicleNew_step9").checked==true)
      {
        form[9] = div[i].querySelector(".vehicleNew_step9").value;
        slideRight();    
      }
  } 
}

function buttonRight_step10(){
  var val=document.getElementById("value_step10");
  if(val.value=="")
  {
    alert('Please Enter your dateofbirth');
  }

  else{
    // var d=new Date();
    form[10]=val.value;
    slideRight();
  }
}

function buttonRight_step11(){
  var val=document.getElementById("value_step11");
  form[11]=val.value;
  slideRight();
}

function buttonRight_step12(){
  var val=document.getElementById("value_step12");
  form[12]=val.value;
  slideRight();
}

function buttonRight_step13(){
  var val=document.getElementById("value_step13");
  var val1=document.getElementById("value_1_step13");
  var val2=document.getElementById("value_2_step13");
  var atpos = val2.value.indexOf("@");
  var dotpos = val2.value.lastIndexOf(".");

  if(val.value=="")
  {
    alert('Please Enter your name...!');
  }

  if(val1.value=="")
  {
    alert('Please Enter your mobile no (required)...!');
  }

  if(val1.value!="" && val.value!=""){
    if(val1.value.length>=10 && val1.value.length<=13 && (val1.value.substr(0,1)=="9" || val1.value.substr(0,1)=="8" || val1.value.substr(0,1)=="7"))
    {
      if((atpos<1 || dotpos<atpos+2 || dotpos+2>=val2.value.length)&& val2.value!="")
      {
        alert('Please enter valid email');
      }

      else
      {
        form[13]=val.value;
        form[14]=val1.value;
        form[15]=val2.value;
        alert(form);
        // send();
        slideRight();
      }
    }

    else{
      alert('Please enter valid phone no');
    }
  }
}

function selected()
{
                var array = [["Cartype",form[0]],
                              ["Preferred Car",form[1]],
                              ["Currently Live",form[2]],
                              ["Company you work for",form[3]],
                              ["Gross Monthly salary",form[4]],
                              ["Salary account with",form[5]],
                              ["Date of joining with your company",form[6]],
                              ["Work Experience",form[16]],
                              ["Date of moving to current city",form[7]],
                              ["Date of moving to current Residence",form[8]],
                              ["Your Residence Type",form[9]],
                              ["Date of Birth",form[10]],
                              ["Total Emi",form[11]],
                              ["Average Monthly Incentives",form[12]],
                              ["Name",form[13]],
                              ["Phone",form[14]],
                              ["Email Address",form[15]]
                              ]

                var mydiv=document.getElementById("mydiv");
                var fdiv=document.createElement("div");
                mydiv.appendChild(fdiv);
                fdiv.style.width="100%";
                fdiv.style.height="100%";
                var btn=document.createElement("button");
                var btntext=document.createTextNode("Edit");
                btn.appendChild(btntext);

            {   
                var table1=document.createElement("table");
                var head1=document.createElement('th'); 
                var text1=document.createTextNode("Car you looking for-");
                head1.appendChild(text1);
                
                var btn1=document.createElement("button");
                var btntext1=document.createTextNode("Edit");
                btn1.appendChild(btntext1);
                head1.appendChild(btn1);

                table1.appendChild(head1);
                var newRow=table1.insertRow(table1.length);
                for(var j = 0; j < array[0].length; j++)
                {
                    var cell = newRow.insertCell(j);
                    cell.innerHTML = array[0][j];
                }
                var tds=table1.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table1);

                btn1.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[0].style.display = "block";
                  current=0;
                });
            }

            { 
                var table2=document.createElement("table");
                var head2=document.createElement('th'); 
                var text2=document.createTextNode("Your prerred car is-");
                head2.appendChild(text2);

                var btn2=document.createElement("button");
                var btntext2=document.createTextNode("Edit");
                btn2.appendChild(btntext2);
                head2.appendChild(btn2);

                table2.appendChild(head2);

                var newRow=table2.insertRow(table2.length);
                for(var j = 0; j < array[1].length; j++)
                {
                    var cell = newRow.insertCell(j);
                    cell.innerHTML = array[1][j];
                   
                }

                var tds=table2.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table2);

                btn2.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[1].style.display = "block";
                  current=1;
                });
            }    

            { 
                var table3=document.createElement("table");
                var head3=document.createElement('th'); 
                var text3=document.createTextNode("Currently live-");
                head3.appendChild(text3);

                var btn3=document.createElement("button");
                var btntext3=document.createTextNode("Edit");
                btn3.appendChild(btntext3);
                head3.appendChild(btn3);

                table3.appendChild(head3);
                var newRow=table3.insertRow(table3.length);
                for(var j = 0; j < array[2].length; j++)
                {
                    var cell = newRow.insertCell(j);
                    cell.innerHTML = array[2][j];
                   
                }

                var tds=table3.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table3);

                btn3.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[2].style.display = "block";
                  current=2;
                });
            }
            
            {
                 
                var table4=document.createElement("table");
                var head4=document.createElement('th'); 
                var text4=document.createTextNode("Company you work for-");
                head4.appendChild(text4);

                var btn4=document.createElement("button");
                var btntext4=document.createTextNode("Edit");
                btn4.appendChild(btntext4);
                head4.appendChild(btn4);

                table4.appendChild(head4);
                var newRow=table4.insertRow(table4.length);
                for(var j = 0; j < array[3].length; j++)
                {
                    var cell = newRow.insertCell(j);
                    cell.innerHTML = array[3][j];
                  
                }

                var tds=table4.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table4);

                btn4.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[3].style.display = "block";
                  current=3;
                });
            }

            {
                var table5=document.createElement("table");
                var head5=document.createElement('th'); 
                var text5=document.createTextNode("Gross Month salary-");
                head5.appendChild(text5);

                var btn5=document.createElement("button");
                var btntext5=document.createTextNode("Edit");
                btn5.appendChild(btntext5);
                head5.appendChild(btn5);

                table5.appendChild(head5);
                var newRow=table5.insertRow(table5.length);
                for(var j = 0; j < array[4].length; j++)
                {
                    var cell = newRow.insertCell(j);
                    cell.innerHTML = array[4][j];
                    
                }

                var tds=table5.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table5);

                btn5.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[4].style.display = "block";
                  current=4;
                });
            }

            {  
                var table6=document.createElement("table");
                var head6=document.createElement('th'); 
                var text6=document.createTextNode("Salary account with-");
                head6.appendChild(text6);

                var btn6=document.createElement("button");
                var btntext6=document.createTextNode("Edit");
                btn6.appendChild(btntext6);
                head6.appendChild(btn6);

                table6.appendChild(head6);
                var newRow=table6.insertRow(table6.length);
                for(var j = 0; j < array[5].length; j++)
                {
                    var cell = newRow.insertCell(j);
                    cell.innerHTML = array[5][j];
                   
                }

                var tds=table6.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table6);

                btn6.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[5].style.display = "block";
                  current=5;
                });
            }

            {
                
                
                var table7=document.createElement("table");
                var head7=document.createElement('th'); 
                var text7=document.createTextNode("Your Date of joining and your work experience-");
                head7.appendChild(text7);

                var btn7=document.createElement("button");
                var btntext7=document.createTextNode("Edit");
                btn7.appendChild(btntext7);
                head7.appendChild(btn7);

                table7.appendChild(head7);
                for(var i=6;i<=7;i++)
                {
                    var newRow=table7.insertRow(table7.length);
                    for(var j = 0; j < array[i].length; j++)
                    {
                        var cell = newRow.insertCell(j);
                        cell.innerHTML = array[i][j];
                       
                    }
                }    

                var tds=table7.getElementsByTagName('td');
                tds[0].style.width="400px";
                tds[2].style.width="400px";
                fdiv.appendChild(table7);

                btn7.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[6].style.display = "block";
                  current=6;
                });
            }

            {
                var table8=document.createElement("table");
                var head8=document.createElement('th'); 
                var text8=document.createTextNode("Date of moving to current residence and city-");
                head8.appendChild(text8);

                var btn8=document.createElement("button");
                var btntext8=document.createTextNode("Edit");
                btn8.appendChild(btntext8);
                head8.appendChild(btn8);

                table8.appendChild(head8);
                for(var i=8;i<=9;i++)
                {
                    var newRow=table8.insertRow(table8.length);
                    for(var j = 0; j < array[i].length; j++)
                    {
                        var cell = newRow.insertCell(j);
                        cell.innerHTML = array[i][j];
                    }
                }    

                var tds=table8.getElementsByTagName('td');
                tds[0].style.width="400px";
                tds[2].style.width="400px";
                fdiv.appendChild(table8);

                btn8.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[7].style.display = "block";
                  current=7;
                });
            }

            {
                var table9=document.createElement("table");
                var head9=document.createElement('th'); 
                var text9=document.createTextNode("Your Residence type-");
                head9.appendChild(text9);

                var btn9=document.createElement("button");
                var btntext9=document.createTextNode("Edit");
                btn9.appendChild(btntext9);
                head9.appendChild(btn9);

                table9.appendChild(head9);
                    var newRow=table9.insertRow(table9.length);
                    for(var j = 0; j < array[10].length; j++)
                    {
                        var cell = newRow.insertCell(j);
                        cell.innerHTML = array[10][j];
                    }
                
                var tds=table9.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table9);

                btn9.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[8].style.display = "block";
                  current=8;
                });
            }

            {
                var table10=document.createElement("table");
                var head10=document.createElement('th'); 
                var text10=document.createTextNode("Your age-");
                head10.appendChild(text10);

                var btn10=document.createElement("button");
                var btntext10=document.createTextNode("Edit");
                btn10.appendChild(btntext10);
                head10.appendChild(btn10);

                table10.appendChild(head10);

                    var newRow=table10.insertRow(table10.length);
                    for(var j = 0; j < array[11].length; j++)
                    {
                        var cell = newRow.insertCell(j);
                        cell.innerHTML = array[11][j];
                    }

                var tds=table10.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table10);

                btn10.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[9].style.display = "block";
                  current=9;
                });
            }

            { 
                var table11=document.createElement("table");
                var head11=document.createElement('th'); 
                var text11=document.createTextNode("Your Emi-");
                head11.appendChild(text11);

                var btn11=document.createElement("button");
                var btntext11=document.createTextNode("Edit");
                btn11.appendChild(btntext11);
                head11.appendChild(btn8);

                table11.appendChild(head11);
                
                    var newRow=table11.insertRow(table11.length);
                    for(var j = 0; j < array[12].length; j++)
                    {
                        var cell = newRow.insertCell(j);
                        cell.innerHTML = array[12][j];
                    }

                var tds=table11.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table11);

                btn11.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[10].style.display = "block";
                  current=10;
                });
            }

            {
                var table12=document.createElement("table");
                var head12=document.createElement('th'); 
                var text12=document.createTextNode("Your monthly incentive-");
                head12.appendChild(text12);

                var btn12=document.createElement("button");
                var btntext12=document.createTextNode("Edit");
                btn12.appendChild(btntext12);
                head12.appendChild(btn12);

                table12.appendChild(head12);
                
                    var newRow=table12.insertRow(table12.length);
                    for(var j = 0; j < array[13].length; j++)
                    {
                        var cell = newRow.insertCell(j);
                        cell.innerHTML = array[13][j];
                    }

                var tds=table12.getElementsByTagName('td');
                tds[0].style.width="400px";
                fdiv.appendChild(table12);

                btn12.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[11].style.display = "block";
                  current=11;
                });
            }

            {
                var table13=document.createElement("table");
                var head13=document.createElement('th'); 
                var text13=document.createTextNode("Your Personal details-");
                head13.appendChild(text13);

                var btn13=document.createElement("button");
                var btntext13=document.createTextNode("Edit");
                btn13.appendChild(btntext13);
                head13.appendChild(btn13);

                table13.appendChild(head13);

                for(var i=14;i<=16;i++)
                {
                    var newRow=table13.insertRow(table13.length);
                    for(var j = 0; j < array[i].length; j++)
                    {
                        var cell = newRow.insertCell(j);
                        cell.innerHTML = array[i][j];
                    }
                }
                
                var tds=table13.getElementsByTagName('td');
                tds[0].style.width="400px";
                tds[2].style.width="400px";
                tds[4].style.width="400px";
               
                fdiv.appendChild(table13);

                btn13.addEventListener("click",function(){
                  fdiv.parentNode.removeChild(fdiv);
                  reset();
                  sliderImages[12].style.display = "block";
                  current=12;
                });
               
            }

            {
              var button14=document.createElement("button");
              var text14=document.createTextNode("Save as draft");
              button14.appendChild(text14);
              fdiv.appendChild(button14);

              button14.addEventListener("click",function(){
                  form[17]="Draft";
                  var r= confirm("Existing user or not");
                  if(r==true)
                  {
                      username = prompt("Username","");
                      send();
                  }
                  else{
                    username=prompt("Username","");
                    password=prompt("Password","");
                    signup();
                  }

                  // alert(form);
              });
            }

            {
              var button15=document.createElement("button");
              var text15=document.createTextNode("Continue");
              button15.appendChild(text15);
              // button15.style.margin-left="100px";
              
              fdiv.appendChild(button15);

              button15.addEventListener("click",function(){
                  form[17]="Saved";
                  var r= confirm("Existing user or not");
                  if(r==true)
                  {
                      username = prompt("Username","");
                      send();
                  }
                  else{
                    username=prompt("Username","");
                    password=prompt("Password","");
                    signup();
                  }
                  
                  // alert(form);
              });
            }
          }

          function send(){
            if(form.length==18)
            {
              $.ajax({
                  type: 'post',
                  url: "/yii3/backend/web/index.php?r=car/test",
                  data: {"key":form,"temp":username},
                  success: function(data){
                    alert('temp');
                    reset();
                    slideRight();
                  },
                  error: function(data){alert('You have entered wrong username!')},
                });
            }
          }

          function signup(){
            if(form.length==18)
            {
              $.ajax({
                  type: 'post',
                  url: "/yii3/backend/web/index.php?r=car/sign",
                  data: {"key":form,"username":username,"password":password},
                  success: function(data){alert('temp')},
                  error: function(data){alert('kul')},
                });
            }
          }