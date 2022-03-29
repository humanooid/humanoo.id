@extends('b._layout')
@section('css')
    <link href="{{ asset('b/plugins/jodit/jodit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('b/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>{{ $title }}</h1>
                        </div>
                    </div>
                </div>
                <form action="createpost" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            aria-describedby="titleHelp">
                                        {{-- <div id="titleHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <textarea id="editor" name="body"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-sm btn-primary float-end"><i
                                            class="material-icons">save</i>Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="category" class="form-label">Category</label>
                                                <select class="js-states form-control" tabindex="-1" name="category"
                                                    id="category" style="display: none; width: 100%">
                                                    <option value="" selected disabled>Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="category" class="form-label">Tags</label>
                                                <select class="js-example-basic-multiple-limit js-states form-control"
                                                    multiple="multiple" tabindex="-1" style="display: none; width: 100%"
                                                    name="tags[]">
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="heroImage" class="form-label">Hero Image</label>
                                                <input class="form-control form-control-sm" id="heroImage" name="heroImage"
                                                    type="file" onchange="imgPreview($(this))">
                                            </div>
                                            <div id="imgPreview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('b/plugins/jodit/jodit.min.js') }}"></script>
    <script src="{{ asset('b/plugins/select2/js/select2.full.min.js') }}"></script>
@endsection
@section('script')
    <script>
        $('select').select2();
        $(".js-example-basic-multiple-limit").select2({
            maximumSelectionLength: 5,
            tags: true,
            tokenSeparators: [',', ' ']
        });


        function imgPreview(el) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imgPreview').html('<img src="' + e.target.result + '" class="img-fluid" alt="image preview">');
            }
            reader.readAsDataURL(el[0].files[0]);
        }

        const editor = Jodit.make("#editor", {
            "uploader": {
                "insertImageAsBase64URI": true
            },
            //   "theme": "light",
            "toolbarButtonSize": "small",
            "height": 500,
            "minHeight": 500,
            "toolbarAdaptive": false,
            "buttons": [
                "bold",
                "italic",
                "underline",
                "strikethrough",
                "|",
                "eraser",
                "ul",
                "ol",
                "indent",
                "outdent",
                "align",
                "|",
                "font",
                "fontsize",
                "brush",
                "|",
                "paragraph",
                // "classSpan",
                "superscript",
                "subscript",
                "|",
                "image",
                // "video",
                // "file",
                "|",
                // "copyformat",
                // "cut",
                // "copy",
                // "paste",
                // "selectall",
                // "|",
                "hr",
                "table",
                // "link",
                "symbol",
                "|",
                "undo",
                "redo",
                "find",
                "|",
                "source",
                // "fullsize",
                // "preview",
                // "print",
                // "about",
                //   "\n",
            ],
        });
    </script>
@endsection
