const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .react()
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
    .postCss(
        "node_monpm audules/tinymce/skins/ui/oxide/skin.min.css",
        "public/css/tinymce.css"
    );
