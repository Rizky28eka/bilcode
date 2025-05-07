@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="top">
            @auth
                <div class="message">
                    <a href="/development/work" class="btn__back">
                        <i class='bx bx-left-arrow-alt'></i>
                    </a>
                </div>

                <div class="title">
                    <h1>Create Post</h1>
                </div>
            @endauth

            <form action="/development/work" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card__body-input">
                    <input type="text" name="title" id="title" autocomplete="off" value="{{ old('title') }}" class="effect-1" placeholder="Title" autofocus>
                    <span class="focus-border"></span>
                </div>

                <div class="card__body-input" style="display: none">
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" placeholder="Slug" >
                </div>

                <div class="card__body-category">
                    <div>
                        <h2>Category:</h2>
                        <div class="card__body-dropdown">
                            <input type="text" name="category_id" id="category_id" value="{{ old('category_id') }}" autocomplete="off" class="textBox" placeholder="Select category" id="textBox" readonly>
                            <div class="card__body-option">
                                <div onclick="show('Website')" value="1">Website</div>
                                <div  onclick="show('Mobile App')" value="2">Mobile App</div>
                                <div  onclick="show('UI & &UX Design')" value="3">UI & &UX Design</div>
                                <div  onclick="show('Graphic Design')" value="4">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2>Cover:</h2>
                        <div id="drop-area">
                            <div>
                                <i class='bx bx-cloud-upload'></i>
                                <p class="drag-area">Drag and drop or <a class="browse__btn">browse</a></p>
                                <input type="file" name="image" id="fileElem" onchange="handleFiles(this.files)">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card__body-input summary">
                    <h2>Summary: </h2>
                    <div>
                        <input type="text" name="summary" id="summary" autocomplete="off" class="effect-1" value="{{ old('summary') }}" placeholder="Please enter the content">
                        <span class="focus-border"></span>
                    </div>
                </div> --}}

                <div class="editorjs">
                    <h2>Our Content:</h2>
                    <input type="hidden" id="body" name="body" value="{{ old('body') }}" autofocus>
                    <div id="editorjs" input="body"></div>
                </div>

                <button class="btn-post" type="submit">Post</button>
                </form>
        </div>

    </main>

    <script>

        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/development/work/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });


        function show(anything) {
            document.querySelector('.textBox').value = anything;
        }

        let card__body__dropdown = document.querySelector('.card__body-dropdown');
        card__body__dropdown.onclick = function() {
            card__body__dropdown.classList.toggle('active');
        }


    </script>
@endsection
