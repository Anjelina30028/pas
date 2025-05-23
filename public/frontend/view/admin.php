    <?php
    require_once 'components/head.php';
    ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js "></script>
    </head>

    <?php

    use model\User;

    User::getUsers();
    ?>

    <body>
        <h1>Админская</h1>

        <div class="main">
            <div id="editor">
                <p>Start typing here...</p>
            </div>
        </div>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </body>

    </html>