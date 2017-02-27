    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(fuckpig,"smaller");
            } else {
                if (classie.has(fuckpig,"smaller")) {
                    classie.remove(fuckpig,"smaller");
                }
            }
        });
    }
    window.onload = init();
