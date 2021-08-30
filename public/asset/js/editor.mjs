
DecoupledEditor
    .create(document.querySelector('#editor'), {
        image: {
            upload: "uploads/"

        }
    })
    .then(editor => {
        const toolbarContainer = document.querySelector('#toolbar-container');

        toolbarContainer.appendChild(editor.ui.view.toolbar.element);
    })
    .catch(error => {
        console.error(error);
    });
