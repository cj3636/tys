<script>
    let imageListRight = [
        "https://cdn.discordapp.com/attachments/687847023688548432/689545441121009697/Acmit-01-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542294982230164/Riley2-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542130255134740/Noah_Norrod-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542145174011910/NVTIVE-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689541960096153723/Beakfeet-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542088978858098/Lauf-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542347704500367/St4bility-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542657160380433/XEV-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689541968145023123/Doin_Fine-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689541971442008102/EXXO-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542110181064755/Midnight_Drift-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542339534127139/Sleepless-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542346869833855/SIVIN-01.png",
        "https://cdn.discordapp.com/attachments/687847023688548432/689542650797490317/Sukuno-01.png"
    ];
    let cardsToAddRight = imageListRight.length;

    function computeImages(img) {
        for (let i = 0; i < cardsToAddRight; i++) {

            let parentCard = document.createElement("div");
            let childImageDiv = document.createElement("div");
            let childImage = document.createElement("img");

            parentCard.className = "ui centered styled stackable card";
            childImageDiv.className = "image";
            childImage.src = img[i];
            childImage.alt = "ARTIST LOGO";

            childImageDiv.appendChild(childImage);
            parentCard.appendChild(childImageDiv);

            document.getElementById('rightCards').appendChild(parentCard);
        }
    }

    computeImages(imageListRight);
</script>
