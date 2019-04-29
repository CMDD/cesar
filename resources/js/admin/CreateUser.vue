<template>
<div class="col-md-8 users">
    <h2>Usuarios</h2>
    <div class="list">
        <div class="item title">
            <span class="id">ID</span><span class="email">E-mail</span><span class="pass">Contraseña</span>
        </div>
        <div class="item">
            <span class="id">1</span><span class="email">johndg10@gmail.com</span><span class="pass">password</span><span class="buttons"><a href="#" class="edit" data-toggle="modal" data-target="#exampleModal">Editar</a> | <a href="#" class="delete">Eliminar</a></span>
        </div>


        <a href="#" class="btn add" data-toggle="modal" data-target="#exampleModal">Agregar</a>
        <div class="pag"><a href="#">1</a><a class="active">2</a><a href="#">3</a><a href="#">4</a></div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="text" class="form-control mb-3" placeholder="E-mail">
                        <input type="text" class="form-control mb-3" placeholder="Contraseña">
                        <button type="submit" class="btn">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
    
</template>

<script>
export default {
    data(){
        return{
            user:{
                'nombre':'',
                'correo':''
            }
        }
    }
}
</script>


