document.addEventListener("DOMContentLoaded", function () {
  const sliderElement = document.querySelector("#compliance-slider");
  if (sliderElement) {
      new RangeSlider(sliderElement);
        sliderElement.addEventListener("input", function () {
          document.querySelector("#compliance-value").textContent = `$${parseInt(this.value).toLocaleString()}`;
      });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("input[type='range']").forEach(slider => {
    function updateTrack() {
      let value = ((slider.value - slider.min) / (slider.max - slider.min)) * 100;
      slider.style.background = `linear-gradient(to right, #FF763B ${value}%, #444 ${value}%)`;
    }

    slider.addEventListener("input", updateTrack);
    slider.addEventListener("change", updateTrack); // Ensure it updates on change
    updateTrack(); // Initialize on page load
  });
});
function calculateSavings() {
  let complianceCost = document.querySelector(".comp_cost").value || 100000;
  let workforceCount = document.querySelector(".comp_workforce").value || 60;
  let efficiencyGain = 0.3; // Assuming 30% efficiency gain

  // Calculate savings
  let monthlySavings = ((complianceCost / 12) * efficiencyGain).toFixed(2);
  let annualSavings = (complianceCost * efficiencyGain).toFixed(2);

  // Update displayed values
  document.getElementById("compliance-value").innerText = parseInt(complianceCost).toLocaleString();
  document.getElementById("workforce-value").innerText = workforceCount;
  document.getElementById("monthlySavings").innerText = `$${parseInt(monthlySavings).toLocaleString()}`;
  document.getElementById("annualSavings").innerText = `$${parseInt(annualSavings).toLocaleString()}`;
}

// Attach event listeners to both sliders
document.querySelector(".comp_cost").addEventListener("input", calculateSavings);
document.querySelector(".comp_workforce").addEventListener("input", calculateSavings);

// Initialize values on page load
calculateSavings();
