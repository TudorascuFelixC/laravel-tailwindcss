let activeButton = 'personal'; // Initially set the active button to 'personal'

function toggleButtons(button) {
  const buttons = document.querySelectorAll('.buttonss-personal-business');
  buttons.forEach((button) => {
    button.classList.remove('active');
    button.classList.remove('inactive'); // Remove 'inactive' class from all buttons
  });

  if (activeButton !== button) {
    activeButton = button;
  } else {
    // If the same button is clicked again, toggle its active state
    activeButton = activeButton === 'personal' ? 'business' : 'personal';
  }

  const activeButtonElement = document.querySelector(`.${activeButton}`);
  activeButtonElement.classList.add('active');

  const inactiveButtonElement = document.querySelector(`.${activeButton === 'business' ? 'personal' : 'business'}`);
  inactiveButtonElement.classList.add('inactive');

  // Show the corresponding heading
  const helloHeadings = document.querySelectorAll('.hello-heading');
  helloHeadings.forEach((heading) => {
    heading.style.display = 'none';
  });

  const activeHelloHeading = document.querySelector(`.hello-${activeButton}`);
  activeHelloHeading.style.display = 'block';

  // Hide all Plan divs
  const planDivs = document.querySelectorAll('.plan');
  planDivs.forEach((plan) => {
    plan.classList.add('hidden');
  });

  // Show the active Plan divs
  const activePlanDivs = document.querySelectorAll(`.${activeButton === 'business' ? 'hello1' : 'hello2'} .plan`);
  activePlanDivs.forEach((plan) => {
    plan.classList.remove('hidden');
  });
}
</script>