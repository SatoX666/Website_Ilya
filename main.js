function closePUP() {
    document.querySelector(".container").style.display="none"
}

function openPUP() {
    document.querySelector(".container").style.display="block"
}

function closeOpacity() {
    document.querySelector(".container").classList.add("formAnimateClose")
    document.querySelector(".container").classList.remove("formAnimateOpen")
}

function openOpacity() {
    document.querySelector(".container").classList.remove("formAnimateClose")
    document.querySelector(".container").classList.add("formAnimateOpen")
}