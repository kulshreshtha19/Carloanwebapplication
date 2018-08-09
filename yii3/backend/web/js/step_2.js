var mainbox_step2 = document.getElementById("vehicle_step2");
            var btns_step2 = mainbox_step2.getElementsByClassName("btn_step2");
            for (var i = 0; i < btns_step2.length; i++) {
            btns_step2[i].addEventListener("click", function() {
                var current = mainbox_step2.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }