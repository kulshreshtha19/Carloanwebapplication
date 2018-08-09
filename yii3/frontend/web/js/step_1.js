
            var mainbox = document.getElementById("vehicle");
            var btns = mainbox.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = mainbox.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

