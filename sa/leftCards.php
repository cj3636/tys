<script>
    let imageListLeft = [
        "https://cdn.discordapp.com/attachments/687847023688548432/689563866585497755/AVGMENT-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542636964544579/Testarossa-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542695919943680/Yoshimi-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689541954303819794/Aspect-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542041763708967/Gyrofield-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542191881912334/Rift-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542172076277763/Plusol-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542367874777127/Stereo_Guy-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542211511255219/Riley1-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542165180710923/PurityStar-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542078593630364/Mergatroid-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542798692712501/Zephure-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542739045777425/Yuki-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542718434705467/WLG-01.png"
    ];
    let cardsToAddLeft = imageListLeft.length;

    function computeImages(img) {
        for (let i = 0; i < cardsToAddLeft; i++) {

            let parentCard = document.createElement("div");
            let childImageDiv = document.createElement("div");
            let childImage = document.createElement("img");

            parentCard.className = "ui centered styled stackable card";
            childImageDiv.className = "image";
            childImage.src = img[i];
            childImage.alt = "ARTIST LOGO";

            childImageDiv.appendChild(childImage);
            parentCard.appendChild(childImageDiv);

            document.getElementById('leftCards').appendChild(parentCard);
        }
    }

    computeImages(imageListLeft);
</script>
