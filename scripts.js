// // Получаем все блоки по классу
// const imageBlocks = document.querySelectorAll('.image-block');

// // Добавляем обработчик события на каждый блок
// imageBlocks.forEach(block => {
//     block.addEventListener('click', () => {
//         // Переключаем видимость выпадающего текста при клике
//         const dropdownText = block.querySelector('.dropdown-text');
//         dropdownText.classList.toggle('show');
//     });
// });

// document.addEventListener('DOMContentLoaded', function () {
//     var menuItems = document.querySelectorAll('.menu-item-has-children');
    
//     menuItems.forEach(function (menuItem) {
//         var submenu = menuItem.querySelector('.submenu');
        
//         menuItem.addEventListener('click', function (event) {
//             event.preventDefault();
            
//             if (submenu) {
//                 submenu.classList.toggle('show');
//             }
//         });
//     });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const showPopupBtn = document.getElementById("showPopupBtn");
//   const popup = document.getElementById("popup");
//   const closePopup = document.getElementById("closePopup");

//   showPopupBtn.addEventListener("click", function () {
//     popup.style.display = "block";
//   });

//   closePopup.addEventListener("click", function () {
//     popup.style.display = "none";
//   });
// });
// 
// // Захватываем все элементы меню с подменю
    var menuItemsWithSubmenu = document.querySelectorAll('.menu-item-has-children');

    // Добавляем обработчики событий для показа/скрытия подменю
    menuItemsWithSubmenu.forEach(function(menuItem) {
        menuItem.addEventListener('mouseenter', function() {
            this.querySelector('.submenu').style.display = 'block';
        });

        menuItem.addEventListener('mouseleave', function() {
            this.querySelector('.submenu').style.display = 'none';
        });
    });

$(document).ready(function() {
      $("#showPopupBtn").click(function() {
        $("#contactModal").modal("show");
      });
      
      $("#contactModal .close, #contactModal .btn-secondary").click(function() {
      $("#contactModal").modal("hide");
    });
      
      $("#contactForm").on("input", function() {
        if ($(this).find(":invalid").length === 0) {
          $("#submitButton").prop("disabled", false);
        } else {
          $("#submitButton").prop("disabled", true);
        }
      });
    });