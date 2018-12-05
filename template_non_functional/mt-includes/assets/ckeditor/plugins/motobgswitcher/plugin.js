'use strict';

(function() {
    CKEDITOR.plugins.add('motobgswitcher', {
        icons: 'motobgswitcher',
        init: function(editor) {
            var $translate = editor.config.$injector.get('$translate');
            var $editable;

            function addInitialClass() {
                $editable = editor.document.find('.cke_editable').getItem(0);
                $editable.addClass('moto-cke-background');
                if (editor.commands.switchbgcolor.state === 1) {
                    $editable.addClass('moto-cke-background_dark');
                }
            }

            editor.on('instanceReady', addInitialClass);
            editor.on('dataReady', addInitialClass);

            editor.addCommand('switchbgcolor', {
                canUndo: false,
                exec: function(editor) {
                    var darkClassName = 'moto-cke-background_dark';

                    if ($editable.hasClass(darkClassName)) {
                        $editable.removeClass(darkClassName);
                        editor.commands.switchbgcolor.setState(CKEDITOR.TRISTATE_OFF);
                    } else {
                        $editable.addClass(darkClassName);
                        editor.commands.switchbgcolor.setState(CKEDITOR.TRISTATE_ON);
                    }
                }
            });

            editor.ui.addButton('motobgswitcher', {
                label: $translate.instant('UI.ELEMENT.TEXT_EDITOR.CHANGE_BACKGROUND_TOOLTIP'),
                icon: CKEDITOR.plugins.getPath('motobgswitcher') + 'icons' + (CKEDITOR.env.hidpi ? '/hidpi' : '') + '/icon.png',
                command: 'switchbgcolor',
                toolbar: 'motobgswitcher'
            });
        }
    });
})();
