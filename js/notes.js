const notesContainer = document.querySelector(".note-container");
const createBtn = document.querySelector(".btn");

let notes = document.querySelectorAll(".input-box");

/*DISPLAY THE EXISTING NOTES*/
function showNotes(){
    notesContainer.innerHTML = localStorage.getItem("notes");
}
showNotes();

function updateStorage() {
    localStorage.setItem("notes", notesContainer.innerHTML);
}

/*DISPLAY NOTES*/
createBtn.addEventListener("click", ()=>{
    let inputBox = document.createElement("p");
    let img = document.createElement("img");

    inputBox.className = "input-box";
    inputBox.setAttribute("contenteditable", "true");
    img.src = "../Images/trashIcon.png";

    notesContainer.appendChild(inputBox).appendChild(img);
})

/*REMOVE FUNCTION FOR TRASH ICON*/
notesContainer.addEventListener("click", function(e){
    if(e.target.tagName === "IMG") {
        e.target.parentElement.remove();
        updateStorage();
    }
    else if(e.target.tagName === "P") {
        /*SAVING NOTES EVEN IF SITE IS REFRESHED*/
        notes = document.querySelectorAll(".input-box");
        notes.forEach(nt => {
            nt.onkeyup = function(){
                updateStorage();
            }
        })
    }
})