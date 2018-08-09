var mainbox_step6 = document.getElementById("vehicle_step6");
            var btns_step6 = mainbox_step6.getElementsByClassName("btn_step6");
            for (var i = 0; i < btns_step6.length; i++) {
            btns_step6[i].addEventListener("click", function() {
                var current = mainbox_step6.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }