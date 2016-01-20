{* http://www.tinymce.com/wiki.php/Configuration:style_formats *}
{* http://www.tinymce.com/wiki.php/Configuration:formats *}
style_formats: [
        { title: 'Headers', items: [
            { title: 'H1', block: 'h1'},
            { title: 'H2', block: 'h2'},
            { title: 'H3', block: 'h3'},
			{ title: 'H4', block: 'h4'},
			{ title: 'H5', block: 'h5'}
        ] },

        { title: 'Images', items: [
            { title: 'image à gauche', selector: 'img', classes: 'left'},
			{ title: 'image à droite', selector: 'img', classes: 'right'}
        ]},

		 { title: 'hightlight', inline: 'span', classes: 'hightlight'},

    ],