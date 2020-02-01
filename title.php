<div class="ui two wide column">
    <img class="ui medium centered image" src="img/thenewjourney.png" alt="logo">
</div>
<div class="ui fourteen wide column">
    <a id="link1"><h1 class="ui title">The Yellow Submarine Servers</h1></a>
    <h3 class="ui description">Minecraft | Vanilla + Modded</h3>
    <h3 id="desc" class="ui description">
        <script>
            var path = window.location.pathname;
            var page = path.split("/").pop();
            const index = "home.php";
            const discord = "discord.php";
            const videos = "videos.php";
            const help = "help.php";
            const about = "about.php";
            const download = "download.php";
            const status = "status.php";
            getName();

            function getName() {
                switch (page) {
                    case index:
                        document.getElementById("desc").innerHTML = "Home";
                        break;
                    case discord:
                        document.getElementById("desc").innerHTML = "Discord";
                        break;
                    case videos:
                        document.getElementById("desc").innerHTML = "Videos";
                        break;
                    case help:
                        document.getElementById("desc").innerHTML = "Help | F.A.Q";
                        break;
                    case about:
                        document.getElementById("desc").innerHTML = "The Development and Discord Team";
                        break;
                    case download:
                        document.getElementById("desc").innerHTML = "Modpack Installation";
                        break;
                    case status:
                        document.getElementById("desc").innerHTML = "Server Status";
                        break;
                    default:
                        return "";
                }
            }

            $('html').css('overflow', 'hidden');
        </script>
    </h3>
</div>
