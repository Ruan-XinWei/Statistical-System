function addName() {
    var name = UrlParm.parm("user");
    var node_id_name = document.getElementById("name");
    var node_name = document.createTextNode(name);
    node_id_name.appendChild(node_name);

    var id = UrlParm.parm("id");
    var node_id_id = document.getElementById("id");
    var node_id = document.createTextNode(id);
    node_id_id.appendChild(node_id);
}

addLoadEvent(addName);