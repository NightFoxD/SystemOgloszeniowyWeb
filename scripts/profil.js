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
function Btn_LanguageEdit(ButtonEdit,ButtonAdd,Form){
    const buttonAdd = document.getElementById(ButtonAdd);
    const buttonEdit = document.getElementById(ButtonEdit);
    if (buttonEdit.classList.contains == "MyUncollapse") {
        buttonEdit.style.display = "none";
        buttonAdd.style.display = "block";
        document.getElementById(Userinformations).classList.replace("MyCollapse", "MyUncollapse");
        document.getElementById(Form).classList.replace("MyUncollapse", "MyCollapse");
    }
}
function Btn_LanguageCancel(ButtonEdit,ButtonAdd,Form){
    const buttonAdd = document.getElementById(ButtonAdd);
    const buttonEdit = document.getElementById(ButtonEdit);
    if (buttonEdit.style.display == "none") {
        buttonEdit.style.display = "block";
        buttonAdd.style.display = "block";
        document.getElementById(Userinformations).classList.replace("MyCollapse", "MyUncollapse");
        document.getElementById(Form).classList.replace("MyUncollapse", "MyCollapse");
    }
}
function Btn_Add(Button, Form) {
    
    const buttonElement = document.getElementById(Button);
    if (buttonElement.classList.contains("MyUncollapse")) {
        buttonElement.style.display = "none";
        document.getElementById(Form).classList.replace("MyCollapse", "MyUncollapse");
    }
    console.log("asdf");
}

function Btn_Cancel(Button, Form) {
    const buttonElement = document.getElementById(Button);
    if (buttonElement.style.display == "none") {
        buttonElement.style.display = "block";
        document.getElementById(Form).classList.replace("MyUncollapse", "MyCollapse");
    }
}