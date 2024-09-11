

$(function () {
  "use strict";


  /* scrollar */

  new PerfectScrollbar(".notify-list")

  new PerfectScrollbar(".search-content")

  // new PerfectScrollbar(".mega-menu-widgets")



  /* toggle button */

  $(".btn-toggle").click(function () {
    $("body").hasClass("toggled") ? ($("body").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($("body").addClass("toggled"), $(".sidebar-wrapper").hover(function () {
      $("body").addClass("sidebar-hovered")
    }, function () {
      $("body").removeClass("sidebar-hovered")
    }))
  })


     


  /* menu */

  $(function () {
    $('#sidenav').metisMenu();
  });

  $(".sidebar-close").on("click", function () {
    $("body").removeClass("toggled")
  })



  /* dark mode button */

  $(".dark-mode i").click(function () {
    $(this).text(function (i, v) {
      return v === 'dark_mode' ? 'light_mode' : 'dark_mode'
    })
  });


  $(".dark-mode").click(function () {
    $("html").attr("data-bs-theme", function (i, v) {
      return v === 'dark' ? 'light' : 'dark';
    })
  })



  /* switcher */

  $("#LightTheme").on("click", function () {
    $("html").attr("data-bs-theme", "light")
  }),

    $("#DarkTheme").on("click", function () {
      $("html").attr("data-bs-theme", "dark")
    }),

    $("#SemiDarkTheme").on("click", function () {
      $("html").attr("data-bs-theme", "semi-dark")
    }),

    $("#BoderedTheme").on("click", function () {
      $("html").attr("data-bs-theme", "bodered-theme")
    })



  /* search control */

  $(".search-control").click(function () {
    $(".search-popup").addClass("d-block");
    $(".search-close").addClass("d-block");
  });


  $(".search-close").click(function () {
    $(".search-popup").removeClass("d-block");
    $(".search-close").removeClass("d-block");
  });


  $(".mobile-search-btn").click(function () {
    $(".search-popup").addClass("d-block");
  });


  $(".mobile-search-close").click(function () {
    $(".search-popup").removeClass("d-block");
  });




  /* menu active */

  $(function () {
    for (var e = window.location, o = $(".metismenu li a").filter(function () {
      return this.href == e
    }).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
  });



});

function scrollTabs(rowId, amount) {
  const tabRow = document.getElementById(rowId);
  tabRow.scrollLeft += amount;
}

function toggleScrollButtons() {
  const tabRows = document.querySelectorAll('.tab-row');

  tabRows.forEach((tabRow) => {
    const scrollButtons = tabRow.closest('.tabs-container').querySelectorAll('.scroll-button');
    
    // Check if the tab row is scrollable
    if (tabRow.scrollWidth > tabRow.clientWidth) {
      scrollButtons.forEach(button => button.style.display = 'block');
    } else {
      scrollButtons.forEach(button => button.style.display = 'none');
    }
  });
}

function activateTab(button) {
  // Remove active class from all buttons in the same row
  const tabRow = button.closest('.tab-row');
  tabRow.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('btn-primary', 'btn-success'));
  tabRow.querySelectorAll('.tab-button').forEach(btn => btn.classList.add('btn-light'));

  // Add active class to the clicked button
  button.classList.remove('btn-light');
  button.classList.add('btn-primary');

  // Store the active tab's ID in localStorage
  localStorage.setItem('activeTab', button.innerText.trim());

  // Navigate to the target page
  const targetPage = button.getAttribute('data-target');
  window.location.href = targetPage;
}

// Function to load the active tab from localStorage
function loadActiveTab() {
  const activeTab = localStorage.getItem('activeTab');
  if (activeTab) {
    const activeButton = Array.from(document.querySelectorAll('.tab-button'))
      .find(button => button.innerText.trim() === activeTab);

    if (activeButton) {
      // Remove active class from all buttons
      document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('btn-primary', 'btn-success'));
      document.querySelectorAll('.tab-button').forEach(btn => btn.classList.add('btn-light'));

      // Add active class to the stored active button
      activeButton.classList.remove('btn-light');
      activeButton.classList.add('btn-primary');
    }
  }
}

// Run the functions on load
window.addEventListener('load', () => {
  toggleScrollButtons();
  loadActiveTab();
});

window.addEventListener('resize', toggleScrollButtons);









