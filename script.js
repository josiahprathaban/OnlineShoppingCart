
function select(){
       if(selection==1)
           displayAdmin();
       if(selection==2)
           displaySupplier();
       if(selection==3)
           displayCustomer();

}

function adminViewer(){
    if(view==1)
        addSupplier();
    if(view==2)
        removeSupplier();
    if(view==0 || null)
        showMessage();
    if(null)
        document.getElementById("addSupplier").style.display = "none";

}
function displayAdmin() {
        document.getElementById("admin").style.display = "inline-block";
        document.getElementById("signup").style.display = "none";
        document.getElementById("login").style.display = "none";
        document.getElementById("logout").style.display = "inline-block";
        document.getElementById("welcome").style.display = "inline-block";
}

function displaySupplier() {
        document.getElementById("supplier").style.display = "inline-block";
        document.getElementById("signup").style.display = "none";
        document.getElementById("login").style.display = "none";
        document.getElementById("logout").style.display = "inline-block";
        document.getElementById("welcome").style.display = "inline-block";
}

function displayCustomer() {
    document.getElementById("signup").style.display = "none";
    document.getElementById("login").style.display = "none";
    document.getElementById("logout").style.display = "inline-block";
    document.getElementById("welcome").style.display = "inline-block";
}

function addSupplier(){
    document.getElementById("addSupplier").style.display = "block";
    document.getElementById("AS").style.color="rgb(121, 173, 61)";
    document.getElementById("AS").style.backgroundColor="rgb(253, 254, 254)";
    noRemoveSupplier();
    noUpdateSupplier();
    noViewCustomer();
    noViewSupplier();
    noShowAllMessages();
}
function noAddSupplier(){
    document.getElementById("addSupplier").style.display = "none";
    document.getElementById("AS").style.color="rgb(253, 254, 254)";
    document.getElementById("AS").style.backgroundColor="rgb(121, 173, 61)";
}

function removeSupplier(){
    document.getElementById("removeSupplier").style.display = "block";
    document.getElementById("RS").style.color="rgb(121, 173, 61)";
    document.getElementById("RS").style.backgroundColor="rgb(253, 254, 254)";
    noAddSupplier();
    noUpdateSupplier();
    noViewCustomer();
    noViewSupplier();
    noShowAllMessages();
}
function noRemoveSupplier(){
    document.getElementById("removeSupplier").style.display = "none";
    document.getElementById("RS").style.color="rgb(253, 254, 254)";
    document.getElementById("RS").style.backgroundColor="rgb(121, 173, 61)";
}

function updateSupplier(){
    document.getElementById("updateSupplier").style.display = "block";
    document.getElementById("USI").style.color="rgb(121, 173, 61)";
    document.getElementById("USI").style.backgroundColor="rgb(253, 254, 254)";
    noAddSupplier();
    noRemoveSupplier();
    noViewCustomer();
    noViewSupplier();
    noShowAllMessages();
}
function noUpdateSupplier(){
    document.getElementById("updateSupplier").style.display = "none";
    document.getElementById("USI").style.color="rgb(253, 254, 254)";
    document.getElementById("USI").style.backgroundColor="rgb(121, 173, 61)";
}

function viewSupplier(){
    document.getElementById("viewSupplier").style.display = "block";
    document.getElementById("VS").style.color="rgb(121, 173, 61)";
    document.getElementById("VS").style.backgroundColor="rgb(253, 254, 254)";
    noAddSupplier();
    noRemoveSupplier();
    noUpdateSupplier();
    noViewCustomer();
    noShowAllMessages();
}
function noViewSupplier(){
    document.getElementById("viewSupplier").style.display = "none";
    document.getElementById("VS").style.color="rgb(253, 254, 254)";
    document.getElementById("VS").style.backgroundColor="rgb(121, 173, 61)";
}

function viewCustomer(){
    document.getElementById("viewCustomer").style.display = "block";
    document.getElementById("VC").style.color="rgb(121, 173, 61)";
    document.getElementById("VC").style.backgroundColor="rgb(253, 254, 254)";
    noAddSupplier();
    noRemoveSupplier();
    noUpdateSupplier();
    noViewSupplier();
    noShowAllMessages();
}
function noViewCustomer(){
    document.getElementById("viewCustomer").style.display = "none";
    document.getElementById("VC").style.color="rgb(253, 254, 254)";
    document.getElementById("VC").style.backgroundColor="rgb(121, 173, 61)";
}

function  showMessage(){
    document.getElementById("addSupplier").style.display = "none";
    document.getElementById("showMessage").style.display = "block";
}

function noShowAllMessages(){
    document.getElementById("showMessage").style.display = "none";
}



function suppViewer(){
    if(view==1)
        addSupplier();
    if(view==2)
        removeSupplier();
    if(view==0 || null)
        showMessage();
    if(null)
        document.getElementById("addSupplier").style.display = "none";

}





function addItem(){
    document.getElementById("addItem").style.display = "block";
    document.getElementById("AI").style.color="rgb(121, 173, 61)";
    document.getElementById("AI").style.backgroundColor="rgb(253, 254, 254)";
    noRemoveItem();
    noUpdateItem();
    noViewItem();
    noShowAllMessages();
}
function noAddItem(){
    document.getElementById("addItem").style.display = "none";
    document.getElementById("AI").style.color="rgb(253, 254, 254)";
    document.getElementById("AI").style.backgroundColor="rgb(121, 173, 61)";
}

function removeItem(){
    document.getElementById("removeItem").style.display = "block";
    document.getElementById("RI").style.color="rgb(121, 173, 61)";
    document.getElementById("RI").style.backgroundColor="rgb(253, 254, 254)";
    noAddItem();
    noUpdateItem();
    noViewItem();
    noShowAllMessages();
}
function noRemoveItem(){
    document.getElementById("removeItem").style.display = "none";
    document.getElementById("RI").style.color="rgb(253, 254, 254)";
    document.getElementById("RI").style.backgroundColor="rgb(121, 173, 61)";
}

function updateItem(){
    document.getElementById("updateItem").style.display = "block";
    document.getElementById("UII").style.color="rgb(121, 173, 61)";
    document.getElementById("UII").style.backgroundColor="rgb(253, 254, 254)";
    noAddItem();
    noRemoveItem();
    noViewItem();
    noShowAllMessages();
}
function noUpdateItem(){
    document.getElementById("updateItem").style.display = "none";
    document.getElementById("UII").style.color="rgb(253, 254, 254)";
    document.getElementById("UII").style.backgroundColor="rgb(121, 173, 61)";
}

function viewItem(){
    document.getElementById("viewItem").style.display = "block";
    document.getElementById("VI").style.color="rgb(121, 173, 61)";
    document.getElementById("VI").style.backgroundColor="rgb(253, 254, 254)";
    noAddItem();
    noRemoveItem();
    noUpdateItem();
    noShowAllMessages();
}
function noViewItem(){
    document.getElementById("viewItem").style.display = "none";
    document.getElementById("VI").style.color="rgb(253, 254, 254)";
    document.getElementById("VI").style.backgroundColor="rgb(121, 173, 61)";
}

function  showMessage(){
    document.getElementById("addItem").style.display = "none";
    document.getElementById("showMessage").style.display = "block";
}

function noShowAllMessages(){
    document.getElementById("showMessage").style.display = "none";
}