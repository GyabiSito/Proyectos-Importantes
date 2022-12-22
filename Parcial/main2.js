//name
//ap
//email
//number

function submitData(){
    var name=$('#name').val();
    var ap=$('#ap').val();
    var email=$('#email').val();
    var desc=$('#desc').val();

    jsonObjet={
        "name":"",
        "ap":"",
        "email":"",
        "desc":"",
    }
    jsonObjet.Name=name;
    jsonObjet.Ap=ap;
    jsonObjet.Email=email;
    jsonObjet.desc=desc;

    var str=JSON.stringify(jsonObjet);
    document.write(str);
    
}