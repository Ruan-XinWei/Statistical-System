function addName() {
    var name = UrlParm.parm("user");
    var node_id_name = document.getElementById("name");
    var node_name = document.createTextNode(name);
    node_id_name.appendChild(node_name);
}

addLoadEvent(addName);