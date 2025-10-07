document.getElementById("appointmentForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const successMsg = document.getElementById("successMsg");
  successMsg.style.display = "block";
  setTimeout(() => {
    this.reset();
    successMsg.style.display = "none";
  }, 2500);
});

// Show selected section
function showSection(id) {
  const sections = document.querySelectorAll(".section");
  sections.forEach((sec) => (sec.style.display = "none"));
  document.getElementById(id).style.display = "block";

  // Update active class
  document.querySelectorAll(".sidebar nav a").forEach((link) => link.classList.remove("active"));
  event.target.classList.add("active");
}
window.onload = () => {
  showSection('book'); // default section to show
};
