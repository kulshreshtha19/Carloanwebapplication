var mainbox_step9 = document.getElementById("checkbox_step9");
            var btns_step9 = mainbox_step9.getElementsByClassName("btn_step9");
            for (var i = 0; i < btns_step9.length; i++) {
            btns_step9[i].addEventListener("click", function() {
                var current = mainbox_step9.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }