function confirmDelete(){
    var respuesta = confirm("¿Estás seguro que deseas eliminar este cliente?");

    if(respuesta == true){
        return true;
    }

    else {
        return false;
    }
}