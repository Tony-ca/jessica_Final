const gif = document.getElementById('animated-gif');
    setTimeout(function() {
        gif.src = 'img/Logojessica.png'; 
    }, 2600); 

const toggleBtn = document.querySelector('.toggle_btn')
    const toggleBtnIcon = document.querySelector('.toggle_btn')
    const dropDownMenu = document.querySelector('.dropdown_menu')

    toggleBtn.onclick = function() {
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')
    }

    function Modal() {
    
        document.getElementById("arrierePlan").style.display = "block";
        document.getElementById("premierPlan").style.display = "block";
     
        let cancelButtons = document.querySelectorAll(".nonButton, .close, .containerBgOpacity");
            cancelButtons.forEach(function (button) {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    document.getElementById("arrierePlan").style.display = "none";
                    document.getElementById("premierPlan").style.display = "none";
                });
            })
    };