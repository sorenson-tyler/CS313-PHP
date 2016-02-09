function addPlayers(id) {
    var players = document.getElementById(id).value;
    var container = document.getElementById("container");
    if (players == null) {
        return;
    }
    else {
        while (container.hasChildNodes()) {
            container.removeChild(container.lastChild);
        }
        for (i = 1;i <= players;i++) {
            var input = document.createElement("input");
            input.type = "Text";
            input.name = "player" + i;
            input.placeholder = "Player " + i + "'s name";
            container.appendChild(input);
            container.appendChild(document.createElement("br"));
        }
    }
}