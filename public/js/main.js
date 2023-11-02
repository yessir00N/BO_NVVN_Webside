const sdgs = document.getElementsByClassName("sdg");
const sdgsShuffled = Array.from(sdgs).sort(() => Math.random() - 0.5)
let backbutton = document.getElementById("back-button")

for (let i = 0; i < 3; i++) {
    let sdg = sdgsShuffled[i];

    sdg.style.display = "flex"

    sdg.onclick = function() {
        let modal = document.getElementById(`modal-${sdg.id}`);
        modal.style.display = "flex"

        for (let i = 0; i < sdgs.length; i++) {
            console.log(sdgs[i]);
            sdgs[i].style.display = "none";
        }
    }
}