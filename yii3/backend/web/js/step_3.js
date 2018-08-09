var mainbox_step3 = document.getElementById("vehicle_step3");
            var btns_step3 = mainbox_step3.getElementsByClassName("btn_step3");
            for (var i = 0; i < btns_step3.length; i++) {
            btns_step3[i].addEventListener("click", function() {
                var current = mainbox_step3.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }