<template>
     <div class="col-md-4 col-xl-3 transmition">
                    <form>
                        <h2>Transmisión</h2>
                        <input type="text" class="form-control mb-3" placeholder="ID YouTube">
                        <div class="image">
                            <input type="file" id="file" class="inputfile" />
                            <label for="file"><span>Cover</span></label>
                        </div>
                        <button type="submit" class="btn">Iniciar</button>
                    </form>
                    <form class="next">
                        <h2>Siguiente</h2>
                        <div>
                            <small>Fecha</small>
                            <input type="text" class="form-control" placeholder="DD">/
                            <input type="text" class="form-control" placeholder="MM">/
                            <input class="form-control" type="text" placeholder="AA">
                        </div>
                        <div>
                            <small>Hora</small>
                            <input class="form-control" type="text" placeholder="00">:
                            <input class="form-control" type="text" placeholder="00">
                        </div>
                        <input type="text" class="form-control" placeholder="Título">
                        <textarea class="form-control" placeholder="Descripción"></textarea>
                        <textarea class="form-control" placeholder="Boton de pago"></textarea>
                        <button type="submit" class="btn">Programar</button>
                    </form>
                </div>
</template>

<script>
export default {
    data(){
        return{
            'transmision':{
                'id_youtube':'',
                'cover':''
            },
            'siguiente':{
                'dia':'',
                'mes':'',
                'ano':'',
                'hora':'',
                'minuto':'',
                'titulo':'',
                'descripcion':'',
                'btn_pago':'',
            }
        }
    }
}
</script>

