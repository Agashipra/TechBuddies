function showTab(tabId) {
  // will Hide all tab contents
  const tabs = document.querySelectorAll(".tab-content");
  tabs.forEach((tab) => tab.classList.remove("active")); // Remove the 'active' class

  // Remove 'active' class from all buttons
  const buttons = document.querySelectorAll(".tab-btn");
  buttons.forEach((button) => button.classList.remove("active"));

  // Show the selected tab and activate the corresponding button
  document.getElementById(tabId).classList.add("active");
  event.target.classList.add("active"); // Add 'active' class to the clicked button
}
