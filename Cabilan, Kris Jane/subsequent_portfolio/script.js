document.addEventListener("DOMContentLoaded", function () {
  var typed = new Typed(".auto-type", {
    strings: ["Student", "Programmer", "Passionate Learner", "Coding Enthusiast"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
  });

  const isDarkMode = localStorage.getItem('darkMode') === 'enabled';

  // Apply dark mode if enabled
  if (isDarkMode) {
    document.documentElement.classList.add('dark-mode');
  }

  // Toggle dark mode on button click
  document.getElementById('dark-mode-toggle').addEventListener('click', () => {
    toggleDarkMode();
  });

  // Change theme on button click
  document.getElementById('change-theme').addEventListener('click', () => {
    changeTheme();
  });
});

function toggleDarkMode() {
  const html = document.documentElement;
  const isDarkModeEnabled = html.classList.toggle('dark-mode');

  // Save dark mode preference to local storage
  localStorage.setItem('darkMode', isDarkModeEnabled ? 'enabled' : 'disabled');
}

function changeTheme() {
  var allColors = document.documentElement;

  var check = getComputedStyle(allColors);
  const c = check.getPropertyValue('--black');

  if (c == "#000000") {
    allColors.style.setProperty("--black", "#ffffff");
    allColors.style.setProperty("--white", "#000000");
    allColors.style.setProperty("--bg", "#e8e9eb");
    allColors.style.setProperty("--purple-darker", "#bbbbbd");
    allColors.style.setProperty("--purple-dark", "#cccdcf");
  } else {
    allColors.style.setProperty("--black", "#000000");
    allColors.style.setProperty("--white", "#ffffff");
    allColors.style.setProperty("--bg", "rgb(23, 2, 23)");
    allColors.style.setProperty("--purple-darker", "rgb(42, 10, 42)");
    allColors.style.setProperty("--purple-dark", "rgb(66, 16, 66)");
  }
}
