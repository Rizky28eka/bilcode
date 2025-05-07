const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

// Show Sidebar
menuBtn .addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

// Close Sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// Editor JS
const editor = new EditorJS({
    holder: 'editorjs',


    tools: {
        header: {
            class: Header,
            shortcut: 'CMD+SHIFT+H',
        },

        linkTool: {
            class: LinkTool,
            config: {
            endpoint: 'http://127.0.0.1:8000/development/work/create',
            }
        },

        image: {
            class: ImageTool,
            config: {
                endpoints: {
                byFile: 'http://127.0.0.1:8000/development/work/create',
                byUrl: 'http://127.0.0.1:8000/development/work/create',
                }
            }
        },

        list: {
            class: List,
            inlineToolbar: true,
            config: {
            defaultStyle: 'unordered'
            }
        },

        quote: {
            class: Quote,
            inlineToolbar: true,
            shortcut: 'CMD+SHIFT+O',
            config: {
            quotePlaceholder: 'Enter a quote',
            captionPlaceholder: 'Quote\'s author',
            },
        },

        embed: {
            class: Embed,
            config: {
            services: {
                youtube: true,
                facebook: true,
                instagram: true,
                twitter: true,
                codepen: true,
                pinterest: true,
                coub: true
            }
            }
        },

    },
 });

