<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>César Peña Live</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css' media='all'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" type='text/css' media='all'>
    <link rel="stylesheet" href="css/live.css" type='text/css' media='all'>
</head>

<body>
    <div id="app">
        <div class="container-fluid black">
            <div class="row">
                <div class="col">
                    <h1 class="title">César Peña <span>Live</span></h1>
                    <a href="#" class="btn out">Cerrar sesión</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="blocker paused">
                            <div class="cover" style="background-image: url(img/cover.png);"></div>
                            <a class="playpause"></a>
                        </div>
                        <div class="box-video">
                            <div id="player"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col comments">
                    <h3>Comentarios</h3>
                    <div class="box">
                        <ul class="list">
                            <li>
                                <div class="text"><span class="user">J</span><p>Mauris faucibus suscipit massa, sit amet consequat nunc laoreet vel. Aenean sodales dolor a laoreet pulvinar. Morbi pellentesque iaculis molestie. Nullam tempor pellentesque nisl</p><span class="buttons"><a href="#" class="reply">Responder</a><a href="#" class="delete">Eliminar</a></span></div>
                            </li>
                            <li>
                                <div class="text"><span class="user">A</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper neque et est gravida pulvinar. Pellentesque justo ipsum, sodales vel felis ut, congue feugiat dolor. Morbi iaculis porta dictum. Integer dapibus purus ut sollicitudin auctor. Mauris faucibus suscipit massa, sit amet consequat nunc laoreet vel. Aenean sodales dolor a laoreet pulvinar. Morbi pellentesque iaculis molestie. Nullam tempor pellentesque nisl.</p><span class="buttons"><a href="#" class="reply">Responder</a><a href="#" class="delete">Eliminar</a></span></div>
                                <ul>
                                    <li>
                                        <div class="text"><span class="user">C</span><p>Morbi iaculis porta dictum. Integer dapibus purus ut sollicitudin auctor. Mauris faucibus suscipit massa, sit amet consequat nunc laoreet vel.</p><span class="buttons"><a href="#" class="reply">Responder</a><a href="#" class="delete">Eliminar</a></span></div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="text"><span class="user">B</span><p>Morbi pellentesque iaculis molestie.</p><span class="buttons"><a href="#" class="reply">Responder</a><a href="#" class="delete">Eliminar</a></span></div>
                            </li>
                            <li>
                                <div class="text"><span class="user">z</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper neque et est gravida pulvinar. Pellentesque justo ipsum, sodales vel felis ut, congue feugiat dolor. Morbi iaculis porta dictum. Integer dapibus purus ut sollicitudin auctor. Mauris faucibus suscipit massa, sit amet consequat nunc laoreet vel.</p><span class="buttons"><a href="#" class="reply">Responder</a><a href="#" class="delete">Eliminar</a></span></div>
                            </li>
                        </ul>
                        <h3>Deja tu comentario</h3>
                        <form>
                            <textarea class="form-control" rows="6"></textarea>
                            <button type="submit" class="btn">Comentar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row footer">
                <div class="col">
                    <span>© 2019 • César Peña</span>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z"/></svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/></svg></a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
