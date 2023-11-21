function Btn_Edit(Button, Userinformations, Form) {
    const buttonElement = document.getElementById(Button);
    if (buttonElement.classList.contains("MyUncollapse")) {
        buttonElement.style.display = "none";
        document.getElementById(Userinformations).classList.replace("MyUncollapse", "MyCollapse");
        document.getElementById(Form).classList.replace("MyCollapse", "MyUncollapse");
    }
}

function Btn_CancelSave(Button, Userinformations, Form) {
    const buttonElement = document.getElementById(Button);
    if (buttonElement.style.display == "none") {
        buttonElement.style.display = "block";
        document.getElementById(Userinformations).classList.replace("MyCollapse", "MyUncollapse");
        document.getElementById(Form).classList.replace("MyUncollapse", "MyCollapse");
    }
}