
window.addEventListener("mousemove", mouseFollow);

function mouseFollow(e) {
    let mouseFollow1 = document.querySelector("#mouseFollow1");
    let mouseFollow2 = document.querySelector("#mouseFollow2");
    let mouseFollow3 = document.querySelector("#mouseFollow3");
    let mouseFollow4 = document.querySelector("#mouseFollow4");

    mouseFollow1.style.left = e.clientX + "px";
    mouseFollow2.style.left = e.clientX + "px";
    mouseFollow2.style.top = e.clientY + "px";
    mouseFollow3.style.top = e.clientY + "px";
    mouseFollow4.style.left = e.clientX + "px";
    mouseFollow4.style.top = e.clientY + "px";
}


function revealNewTask() {
    document.getElementById("new-task-container").style.opacity = "1";
    document.getElementById("new-task-container").style.left = "42vw";
}
function hideNewTask() {
    document.getElementById("new-task-container").style.opacity = "0";
    document.getElementById("new-task-container").style.left = "5vw";
}

function revealEditTask() {
    document.getElementById("new-task-container").style.opacity = "1";
    document.getElementById("new-task-container").style.left = "42vw";
}
function hideEditTask() {
    document.getElementById("new-task-container").style.opacity = "0";
    document.getElementById("new-task-container").style.left = "5vw";
}






