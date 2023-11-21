let lightMode = localStorage.getItem("lightMode");
const lightModeToggle = document.querySelector("#light-mode-toggle");

//check if light mode is enabled
//if enabled , turn it off
//if disabled, turn it on

const enableLightMode = () => {
    //1. add class lightmode to the body
    document.body.classList.add("lightMode");
    //2. pdate lightmode in local storage
    localStorage.setItem("lightMode", "enabled");
};

const disableLightMode = () => {
    document.body.classList.remove("lightMode");
    localStorage.setItem("lightMode", null);
};

if (lightMode == "enabled") {
    enableLightMode();
}

lightModeToggle.addEventListener("click", () => {
    lightMode = localStorage.getItem("lightMode");
    // console.log("test");
    if (lightMode !== "enabled") {
        enableLightMode();
    } else {
        disableLightMode();
    }
});
