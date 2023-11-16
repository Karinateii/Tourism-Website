var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
    }
};
xhttp.open("GET", "/SaloTourGuide/States_list.xml", true);
xhttp.send();

function myFunction(xml) {
    var x, i, txt, xmlDoc, y, j, k, l;
    xmlDoc = xml.responseXML;
    txt = "";
    stateid = "";
    var stateElements = document.getElementsByTagName("div");
    var states = xmlDoc.getElementsByTagName("state");
    try{
        
        for (x=0; x<states.length; x++){
            var attr = states[x].getAttributeNode("id");
            var stid = attr.nodeValue;
            for (var i = 0; i < stateElements.length; i++) {      
                if(stateElements[i].id == stid){
                    var getel = document.getElementById(stid);
                    var stdiv = getel.children[0].getAttributeNode("id");
                    var st = stdiv.nodeValue;
                    stateid = stateElements[i].id;
                    var pgState = document.getElementById(st);
                    var desc = pgState.children[1];
                    var fact = pgState.children[4];
                    var conc = pgState.children[7];
                    var sites = states[x].getElementsByTagName("site");      
                    for(y = 0; y < sites.length; y++){
                        var stattr = sites[y].getAttributeNode("id");
                        var stattrid = stattr.nodeValue;
                        if(stattrid == st){
                            var getdesc = sites[y].getElementsByTagName("description");
                            var getfact = sites[y].getElementsByTagName("funfact");
                            var getconc = sites[y].getElementsByTagName("conclusion");
                            for (j = 0; j < getdesc.length; j++) { 
                                desc.innerHTML = getdesc[j].childNodes[0].nodeValue;
                            }
                            for (k = 0; k < getfact.length; k++) { 
                                fact.innerHTML = getfact[k].childNodes[0].nodeValue;
                            }
                            for (l = 0; l < getconc.length; l++) { 
                                conc.innerHTML = getconc[l].childNodes[0].nodeValue;
                            }
                        }
                    } 
                }else{
                    continue;
                }
            }
        }
    }catch{
        console.log("Execution complete");
    }
}
function getid(div, elem){
    divid = div;
    elemid = elem;
}