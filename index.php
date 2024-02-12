<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markdown to HTML</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
        $switch = "ON";
        function switchHighlight(){
            if($switch=="ON"){
                $switch = "OFF";
            }
            else if($switch == "OFF"){
                $switch = "ON";
            }
        }
    ?>
    <h3 class="text-center mt-1" style="height:8vh">Markdown to HTML</h3>
    <div class="d-flex justify-content-around" style="height:85vh">
        <div id="editor-container" class="col-5 h-100"></div>
        <div class="h-100">
            <div class="d-flex justify-content-around" style="height:5vh">
                <form action="" class="d-flex justify-content-around">
                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                    <label class="btn btn-primary" for="option1">Preview</label>

                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-secondary" for="option2">HTML</label>

                    <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off">
                    <label class="btn btn-secondary" for="option3">Highlight: <?php echo $switch ?></label>

                    <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                    <label class="btn btn-secondary" for="option4">Download</label>
                </form>
            </div>
            <div id="output">
                aaaa
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.min.js"></script>
    <script src="./public/js/editor/editor.js"></script>
</body>
</html>