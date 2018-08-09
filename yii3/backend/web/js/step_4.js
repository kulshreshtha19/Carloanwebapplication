var mainbox_step4 = document.getElementById("vehicle_step4");
            var btns_step4 = mainbox_step4.getElementsByClassName("btn_step4");
            for (var i = 0; i < btns_step4.length; i++) {
            btns_step4[i].addEventListener("click", function() {
                var current = mainbox_step4.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }