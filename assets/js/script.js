const carrossel = document.querySelector(".carrossel"),
firstImg = carrossel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carrossel scroll left value
    let scrollWidth = carrossel.scrollWidth - carrossel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carrossel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carrossel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carrossel scroll left else add to it
        carrossel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carrossel.scrollLeft - (carrossel.scrollWidth - carrossel.clientWidth) > -1 || carrossel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carrossel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carrossel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carrossel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carrossel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carrossel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carrossel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carrossel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carrossel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carrossel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carrossel.addEventListener("mousedown", dragStart);
carrossel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carrossel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carrossel.addEventListener("touchend", dragStop);
