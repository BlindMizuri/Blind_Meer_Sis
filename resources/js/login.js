<script>
    // Get references to the logo and submit button elements
    const logo = document.getElementById("logo");
    const submit = document.getElementById("submit");

    // Animate the logo on hover when mouse over
    logo.addEventListener("mouseover", () => {
    logo.style.transform = "scale(1.2)"
});
    // Animate the logo on hover when mouse NOT over
    logo.addEventListener("mouseout", () => {
    logo.style.transform = "scale(1)"
});

    // Animate the submit button on hover
    submit.addEventListener("mouseover", () => {
    submit.style.backgroundColor = "#04082c"
});

    submit.addEventListener("mouseout", () => {
    submit.style.backgroundColor = "#0095f6"
});

    //animation for when login is clicked it makes the button go down 2px
    submit.addEventListener("mousedown", () => {
    submit.style.transform = "translateY(2px)"
});

    submit.addEventListener("mouseup", () => {
    submit.style.transform = "translateY(0)"
});

</script>
