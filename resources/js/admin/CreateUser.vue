<template>
  <div class="col-md-8 users">
                    <h2>Usuarios</h2>
                    <div class="list">
                        <div class="item title">
                            <span class="id">ID</span><span class="email">E-mail</span><span class="pass">Contraseña</span>
                        </div>
                        <div class="item">
                            <span class="id">1</span><span class="email">johndg10@gmail.com</span><span class="pass">password</span><span class="buttons"><a href="#" class="edit">Editar</a> | <a href="#" class="delete">Eliminar</a></span>
                        </div>
                        
                        
                        <a href="#" class="btn add">Agregar</a>
                        <div class="pag"><a href="#">1</a><a class="active">2</a><a href="#">3</a><a href="#">4</a></div>
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

