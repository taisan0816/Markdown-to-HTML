let editor;
require.config(
    { 
        paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs' }
    }
);
require(['vs/editor/editor.main'], function() {
        editor = monaco.editor.create(document.getElementById('editor-container'), {
        value: 'console.log(x);',
        language: 'javascript'
    });
    editor.onDidChangeModelContent(function(event) {
        console.log('エディタの内容が変更されました。');
        let currentContent = editor.getValue();
        document.getElementById('output').innerHTML = currentContent;
    });
});