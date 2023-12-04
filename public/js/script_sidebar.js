
        document.getElementById('menu-button').addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            var menuIcon = document.getElementById('menu-icon');
            var closeIcon = document.getElementById('close-icon');

            if (sidebar.style.left === "-250px") {
                sidebar.style.left = "0";
                menuIcon.style.display = "none";
                closeIcon.style.display = "block";
            } else {
                sidebar.style.left = "-250px";
                menuIcon.style.display = "block";
                closeIcon.style.display = "none";
            }
        });
// const menuBtn = document.querySelector(".menu-button");

// menuBtn.addEventListener("click", ()=> {
//     document.body.classList.toggle("open");
// })